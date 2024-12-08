<x-admin-app-layout :title="'Role Add'">
    <div class="card card-flush">

        <form class="form" action="{{ route('admin.role.store') }}" method="POST">
            @csrf

            <div class="card-body d-flex flex-column scroll-y me-n7 pe-7" data-kt-scroll="true"
                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                data-kt-scroll-offset="300px">

                <div class="fv-row mb-10">
                    <x-metronic.label for="role-name"
                        class="col-form-label required fw-bold fs-6">{{ __('Role Name') }}</x-metronic.label>
                    <x-metronic.input id="role-name" type="text" name="name" :value="old('name')"
                        placeholder="Enter the Role name"></x-metronic.input>
                </div>


                <div class="fv-row">

                    <label class="fs-5 fw-bolder form-label mb-2">Role Permissions</label>


                    <div class="table-responsive">

                        <table class="table align-middle table-row-dashed fs-6 gy-5">

                            <tbody class="text-gray-600 fw-bold">

                                <tr>
                                    <td class="text-gray-800">Administrator Access
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Allows a full access to the system"></i>
                                    </td>
                                    <td>

                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                            <input class="form-check-input metronic_select_all" type="checkbox"
                                                value="" id="kt_roles_select_all" />
                                            <span class="form-check-label" for="kt_roles_select_all">Select all</span>
                                        </label>

                                    </td>
                                </tr>
                                @foreach ($permissionsByGroups as $group)
                                    <tr>
                                        <td class="text-gray-800">
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                <input type="checkbox" class="form-check-input group-checkbox"
                                                    data-group="{{ $group->group_name }}" />
                                                <span class="form-check-label">{{ $group->group_name }}</span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                @foreach ($permissions->where('group_name', $group->group_name) as $permission)
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input permission-checkbox"
                                                            type="checkbox" value="{{ $permission->name }}"
                                                            name="permissions[]"
                                                            data-group="{{ $group->group_name }}" />
                                                        <span class="form-check-label">{{ $permission->name }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>


            <div class="card-footer text-center">
                <x-metronic.button type="submit" class="primary">
                    {{ __('Submit') }}
                </x-metronic.button>
            </div>

        </form>

    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const groupCheckboxes = document.querySelectorAll('.group-checkbox');

                groupCheckboxes.forEach(groupCheckbox => {
                    groupCheckbox.addEventListener('change', function() {
                        const groupName = this.dataset.group;
                        const permissionCheckboxes = document.querySelectorAll(
                            `.permission-checkbox[data-group="${groupName}"]`);

                        permissionCheckboxes.forEach(permissionCheckbox => {
                            permissionCheckbox.checked = this.checked;
                        });
                    });
                });
            });
        </script>
    @endpush
</x-admin-app-layout>
