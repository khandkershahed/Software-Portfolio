<x-admin-app-layout :title="'Contact'">

    <div class="card card-flash">
        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Code</th>
                        <th width="10%">Name</th>
                        <th width="15%">Email</th>
                        <th width="10%">Phone</th>
                        <th width="10%">Message</th>
                        <th width="8%">Status</th>
                        <th width="10%">Actions</th>
                    </tr>
                </thead>

                <tbody class="fw-bold text-gray-600">
                    @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="text-start">{{ $item->code }}</td>
                            <td class="text-start">{{ $item->name }}</td>
                            <td class="text-start">{{ $item->email }}</td>
                            <td class="text-start">{{ $item->phone }}</td>



                            <td>
                                {{-- <a href="{{ route('admin.page-banner.edit', $item->id) }}" class="text-primary">
                                    <i class="fa fa-edit text-primary fs-4"></i>
                                </a> --}}
                                <a href="{{ route('admin.contacts.destroy', $item->id) }}" class="delete">
                                    <i class="fa fa-trash text-danger fs-4"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {

                // Initialize DataTable
                $('#kt_datatable_example_5').DataTable({
                    "language": {
                        "lengthMenu": "Show _MENU_",
                    },
                    "dom": "<'row'" +
                        "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                        "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                        ">" +
                        "<'table-responsive'tr>" +
                        "<'row'" +
                        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                        ">"
                });
            });
        </script>
    @endpush


</x-admin-app-layout>
