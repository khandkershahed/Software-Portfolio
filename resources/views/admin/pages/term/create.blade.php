<x-admin-app-layout :title="'Term & Condition Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>
            <div class="card-toolbar">
                <a href="{{ route('admin.term.index') }}" class="btn btn-light-primary rounded-2">
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
            <form id="myForm" method="post" action="{{ route('admin.term.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card bg-secondary rounded-0 p-5">
                    <div class="row p-4">
                        <!-- Name Input Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="name" class="mb-2">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name') }}" placeholder="Enter name">
                            </div>
                        </div>

                        <!-- Version Input Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="version" class="mb-2">Version</label>
                                <input type="text" name="version" id="version" class="form-control"
                                    value="{{ old('version') }}" placeholder="Enter version">
                            </div>
                        </div>

                        <!-- Effective Date Input Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="effective_date" class="mb-2">Effective Date</label>
                                <input type="date" name="effective_date" id="effective_date" class="form-control"
                                    value="{{ old('effective_date') }}">
                            </div>
                        </div>

                        <!-- Expiration Date Input Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="expiration_date" class="mb-2">Expiration Date</label>
                                <input type="date" name="expiration_date" id="expiration_date" class="form-control"
                                    value="{{ old('expiration_date') }}">
                            </div>
                        </div>

                        <!-- Content Input Field -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="content" class="mb-2">Content</label>
                                <textarea name="content" id="content" class="form-control" rows="4" placeholder="Enter content">{{ old('content') }}</textarea>
                            </div>
                        </div>

                        <!-- Status Dropdown -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="status" class="mb-2">Choose Status</label>
                                <select name="status" id="status" class="form-select form-select-sm" required>
                                    <option value="">Select an option</option>
                                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                <div id="statusError" class="invalid-feedback" style="display: none;">Please select a
                                    status</div>
                            </div>
                        </div>

                        <!-- Submit Button -->
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
