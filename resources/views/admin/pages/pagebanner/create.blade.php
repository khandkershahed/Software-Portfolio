<x-admin-app-layout :title="'Page Banner Create'">


    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.page-banner.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.page-banner.store') }}"
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
                                <label for="" class="mb-2">Choose Page Banner</label>
                                <select name="page_name" required data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">
                                    <option value="">Select an option</option>
                                    <option value="homeslider">Home Slider</option>
                                    <option value="allproject">All Project</option>
                                    <option value="about">About US</option>
                                    <option value="contact">Contact US</option>
                                    <option value="query">Query</option>
                                    <option value="grphaics">Graphics</option>
                                    <option value="terms">Terms </option>
                                    <option value="privacy">Privacy</option>
                                    <option value="pricing">Pricing Plan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Badge</label>
                                <input type="text" name="badge" placeholder="Banner Badge"
                                    class="form-control form-control-sm" value="{{ old('badge') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Title</label>
                                <input type="text" name="title" placeholder="Banner Title"
                                    class="form-control form-control-sm" value="{{ old('title') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Button Name</label>
                                <input type="text" name="button_name" placeholder="Button Name"
                                    class="form-control form-control-sm" value="{{ old('button_name') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Image</label>
                                <input type="file" name="image" class="form-control form-control-sm"
                                    id="imageInput" onchange="previewImage(event)">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group" id="imagePreview" class="mt-2">
                                <label for="" class="mb-2"></label>
                                <img id="preview" src="" alt="Image Preview" class="img-thumbnail"
                                    style="display: none; max-width: 140px; height: 100px;">
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Button Link</label>
                                <textarea name="button_link" placeholder="https:www.google.com" cols="1" rows="1" class="form-control">{{ old('button_link') }}</textarea>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Banner Link</label>
                                <textarea name="banner_link" placeholder="https:www.google.com" cols="1" rows="1" class="form-control">{{ old('banner_link') }}</textarea>
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
        function previewImage(event) {
            var reader = new FileReader();
            var image = document.getElementById('preview');

            reader.onload = function() {
                image.src = reader.result; // Set the preview image source to the selected file
                image.style.display = 'block'; // Display the image preview
            }

            if (event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]); // Read the selected file as DataURL (base64)
            }
        }
    </script>

</x-admin-app-layout>
