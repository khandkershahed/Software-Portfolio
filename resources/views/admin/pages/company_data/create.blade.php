<x-admin-app-layout :title="'Company Data Create'">


    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.company-data.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.company-data.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-secondary rounded-0 p-5">

                    <div class="row p-4">

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="status" class="mb-2">Choose Status</label>
                                <select name="status" id="status" required class="form-select form-select-sm"
                                    data-control="select2" data-placeholder="Select an option">
                                    <option value="">Select an option</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <div id="statusError" class="invalid-feedback" style="display: none;">Please select a
                                    status</div>
                            </div>
                        </div>


                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Title</label>
                                <input type="text" name="title" placeholder="Company Title"
                                    class="form-control form-control-sm" value="{{ old('title') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Icon</label>
                                <input type="text" name="icon" placeholder="Company Icon"
                                    class="form-control form-control-sm" value="{{ old('icon') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Link</label>
                                <input type="text" name="link" placeholder="Company Link"
                                    class="form-control form-control-sm" value="{{ old('link') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Data</label>
                                <input type="number" name="data" placeholder="Company Data"
                                    class="form-control form-control-sm" value="{{ old('data') }}">
                            </div>
                        </div>


                        <div class="col-12 mb-3 mt-4">
                            <button type="submit" class="btn btn-dark rounded-0 px-5 btn-sm float-end">Submit
                                Data</button>
                        </div>

                    </div>
                </div>

            </form>

        </div>

    </div>

</x-admin-app-layout>
