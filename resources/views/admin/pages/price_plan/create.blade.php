<x-admin-app-layout :title="'Price Plan Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.price-plan.index') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span> Back to list
                </a>
            </div>
        </div>
        <div class="card-body">

            <form id="myForm" method="post" action="{{ route('admin.price-plan.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-secondary rounded-0 p-5">
                    <div class="row p-4">

                        <!-- Page Banner Selection -->
                        <div class="col-3 mb-7">
                            <div class="form-group">
                                <label for="type" class="mb-2 required">Plan Duration</label>
                                <select name="duration" required class="form-select form-select-sm"
                                    data-control="select2">
                                    <option value="">Select an option</option>

                                    <!-- Page related options -->
                                    <option value="monthly">Monthly</option>
                                    <option value="year">Yearly</option>
                                </select>
                            </div>
                        </div>


                        <!-- Title -->
                        <div class="col-3 mb-7">
                            <div class="form-group">
                                <label for="name" class="mb-2 required">Plan Name</label>
                                <input type="text" name="name" placeholder="Name"
                                    class="form-control form-control-sm" value="{{ old('name') }}">
                            </div>
                        </div>

                        <!-- Currency -->
                        <div class="col-3 mb-7">
                            <div class="form-group">
                                <label for="currency" class="mb-2 required">Currency</label>
                                <select name="currency" class="form-select form-select-sm" data-control="select2">
                                    <option value="">Select Currency</option>
                                    <option value="taka">Taka</option>
                                    <option value="euro">EURO</option>
                                    <option value="pound">Pound</option>
                                    <option value="dollar">Dollar</option>
                                </select>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="col-3 mb-7">
                            <div class="form-group">
                                <label for="price" class="mb-2 required">Price</label>
                                <input type="number" name="price" step="0.01" placeholder="Enter Price"
                                    class="form-control form-control-sm" value="{{ old('price') }}">
                            </div>
                        </div>

                        <div class="col-12 mb-7">
                            <div class="form-group">
                                <label for="type" class="mb-2 required">Plan Modules</label>
                                <div class="table-responsive">
                                    <table class="text-center">
                                        <tbody>
                                            @foreach ($plan_modules as $plan_module)
                                                <tr>
                                                    <td width="20%">
                                                        <input type="checkbox" name="plan_module_id[]"
                                                            id="plan_module_id" class="form-check-input" value="{{ $plan_module->id }}">
                                                    </td>
                                                    <td width="55%">{{ $plan_module->title }}</td>
                                                    <td width="25%">{{ $plan_module->price }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="col-12 mb-7 mt-4">
                            <button type="submit" class="btn btn-dark rounded-0 px-5 btn-sm float-end">Submit
                                Data</button>
                        </div>

                    </div>
                </div>

            </form>

        </div>

    </div>
</x-admin-app-layout>
