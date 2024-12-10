<x-admin-app-layout :title="'Company Client Edit'">

    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
                <!-- Title here -->
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.company-client.index') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <!-- SVG Icon here -->
                    </span> Back to list
                </a>
            </div>
        </div>
        <div class="card-body">

            <form id="myForm" method="post" action="{{ route('admin.company-client.update', $item->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card bg-secondary rounded-0 p-5">
                    <div class="row p-4">
                        <!-- Status Dropdown -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="status" class="mb-2">Choose Status</label>
                                <select name="status" id="status" required class="form-select form-select-sm"
                                    data-control="select2" data-placeholder="Select an option">
                                    <option value="active" {{ $item->status == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $item->status == 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                <div id="statusError" class="invalid-feedback" style="display: none;">Please select a
                                    status</div>
                            </div>
                        </div>

                        <!-- Company Name -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="company_name" class="mb-2">Company Name</label>
                                <input type="text" name="company_name" placeholder="Company Name"
                                    class="form-control form-control-sm"
                                    value="{{ old('company_name', $item->company_name) }}">
                            </div>
                        </div>

                        <!-- Company Website -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="company_website" class="mb-2">Company Website</label>
                                <input type="text" name="company_website" placeholder="Company Website"
                                    class="form-control form-control-sm"
                                    value="{{ old('company_website', $item->company_website) }}">
                            </div>
                        </div>

                        <!-- Logo Image -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="logo" class="mb-2">Logo</label>
                                <input type="file" name="logo" id="logo" class="form-control form-control-sm"
                                    onchange="previewImage(event, 'logoPreview')">
                                <!-- Show existing logo preview if available -->
                                @if ($item->logo)
                                    <img id="logoPreview" src="{{ asset('storage/' . $item->logo) }}" alt="Logo Preview"
                                        style="width: 70px; height: 70px; margin-top: 10px;">
                                @else
                                    <img id="logoPreview" src="" alt="Logo Preview"
                                        style="display: none; width: 70px; height: 70px; margin-top: 10px;">
                                @endif
                            </div>
                        </div>

                        <!-- Banner Image -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_image" class="mb-2">Banner Image</label>
                                <input type="file" name="banner_image" id="banner_image"
                                    class="form-control form-control-sm"
                                    onchange="previewImage(event, 'bannerPreview')">
                                <!-- Show existing banner preview if available -->
                                @if ($item->banner_image)
                                    <img id="bannerPreview" src="{{ asset('storage/' . $item->banner_image) }}"
                                        alt="Banner Preview" style="width: 70px; height: 70px; margin-top: 10px;">
                                @else
                                    <img id="bannerPreview" src="" alt="Banner Preview"
                                        style="display: none; width: 70px; height: 70px; margin-top: 10px;">
                                @endif
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

    <script>
        function previewImage(event, previewId) {
            var reader = new FileReader();

            reader.onload = function() {
                var output = document.getElementById(previewId);
                output.src = reader.result;
                output.style.display = "block"; // Show the preview
            };

            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</x-admin-app-layout>
