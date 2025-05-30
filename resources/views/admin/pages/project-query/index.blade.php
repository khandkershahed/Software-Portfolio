<x-admin-app-layout :title="'Project Query'">

    

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.project-query.create') }}" class="btn btn-light-primary rounded-2">
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
                    </span> Create
                </a>
            </div>
        </div>

        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Project Name</th>
                        <th width="10%">Name</th>
                        <th width="10%">Email</th>
                        <th width="10%">Phone</th>
                        <th width="10%">Actions</th>
                    </tr>
                </thead>

                <tbody class="fw-bold text-gray-600">
                    @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="text-start">{{ optional($item->project)->name }}</td>
                            <td class="text-start">{{ $item->name }}</td>
                            <td class="text-start">{{ $item->email }}</td>
                            <td class="text-start">{{ $item->phone }}</td>

                            <td>
                                <a href="{{ route('admin.project-query.edit', $item->id) }}" class="text-primary">
                                    <i class="fa fa-edit text-primary fs-4"></i>
                                </a>
                                <a href="{{ route('admin.project-query.destroy', $item->id) }}" class="delete">
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
                // Handle status toggle button change
                $('.status-toggle').change(function() {
                    var status = $(this).prop('checked') ? 'active' : 'inactive'; // Determine new status
                    var bannerId = $(this).data('id');
                    var url = $(this).data('url'); // Get the URL for status update

                    // Send AJAX request to update status
                    $.ajax({
                        url: url,
                        method: 'PUT', // Use PUT method for update
                        data: {
                            status: status,
                            _token: '{{ csrf_token() }}', // CSRF token for security
                        },
                        success: function(response) {
                            // Success notification
                            Swal.fire({
                                icon: 'success',
                                title: 'Status updated!',
                                text: 'The status has been successfully updated.',
                            });
                        },
                        error: function() {
                            // Error notification
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Something went wrong. Please try again.',
                            });

                            // Revert checkbox to original state if error occurs
                            $(this).prop('checked', !$(this).prop('checked'));
                        }
                    });
                });

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
