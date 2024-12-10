<x-admin-app-layout :title="'Company Client Create'">


    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.company-client.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.company-client.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-secondary rounded-0 p-5">

                    <div class="row p-4">

                        <div class="col-4 mb-3">
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


                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Company Name</label>
                                <input type="text" name="company_name" placeholder="Company Name"
                                    class="form-control form-control-sm" value="{{ old('company_name') }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Company Website</label>
                                <input type="text" name="company_website" placeholder="Company Website"
                                    class="form-control form-control-sm" value="{{ old('company_website') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="logo" class="mb-2">Logo</label>
                                <input type="file" name="logo" id="logo" class="form-control form-control-sm"
                                    onchange="previewImage(event, 'logoPreview')">
                                <img id="logoPreview" src="" alt="Logo Preview"
                                    style="display: none; width: 70px; height: 70px; margin-top: 10px;">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_image" class="mb-2">Banner Image</label>
                                <input type="file" name="banner_image" id="banner_image"
                                    class="form-control form-control-sm"
                                    onchange="previewImage(event, 'bannerPreview')">
                                <img id="bannerPreview" src="" alt="Banner Preview"
                                    style="display: none; width: 70px; height: 70px; margin-top: 10px;">
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
