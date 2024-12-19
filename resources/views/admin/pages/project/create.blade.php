<x-admin-app-layout :title="'Project Create'">


    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.project.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.project.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-secondary rounded-0 p-5">
                    <div class="row p-4">

                        <!-- Status Field -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="status" class="mb-2">Choose Status</label>
                                <select name="status" id="status" class="form-select form-select-sm"
                                    data-control="select2" data-placeholder="Select an option">
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

                        <!-- Category -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="status" class="mb-2">Choose Category</label>
                                <select name="category_id" id="status" class="form-select form-select-sm"
                                    data-control="select2" data-placeholder="Select an option">

                                    <option value="">Select an option</option>

                                    @foreach ($categorys as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                <div id="statusError" class="invalid-feedback" style="display: none;">Please select a
                                    status</div>
                            </div>
                        </div>

                        <!-- Name Field -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="name" class="mb-2">Name</label>
                                <input type="text" name="name" placeholder="Project Name"
                                    class="form-control form-control-sm" value="{{ old('name') }}">
                            </div>
                        </div>

                        {{-- short_description --}}
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="name" class="mb-2">Short Description</label>
                                <textarea name="short_description" placeholder="Short Description.........." id="" class="form-control form-control-sm" cols="5" rows="5">{{ old('short_description') }}</textarea>
                            </div>
                        </div>


                        <!-- Live Link Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="live_link" class="mb-2">Live Link</label>
                                <input type="text" name="live_link" placeholder="Project Live Link"
                                    class="form-control form-control-sm" value="{{ old('live_link') }}">
                            </div>
                        </div>

                        <!-- Client Name Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="client_name" class="mb-2">Client Name</label>
                                <input type="text" name="client_name" placeholder="Client Name"
                                    class="form-control form-control-sm" value="{{ old('client_name') }}">
                            </div>
                        </div>

                        <!-- Facebook Link Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="facebook_link" class="mb-2">Facebook Link</label>
                                <input type="text" name="facebook_link" placeholder="Facebook Link"
                                    class="form-control form-control-sm" value="{{ old('facebook_link') }}">
                            </div>
                        </div>

                        <!-- LinkedIn Link Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="linkedin_link" class="mb-2">LinkedIn Link</label>
                                <input type="text" name="linkedin_link" placeholder="LinkedIn Link"
                                    class="form-control form-control-sm" value="{{ old('linkedin_link') }}">
                            </div>
                        </div>

                        <!-- Platform Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="platform" class="mb-2">Platform</label>
                                <input type="text" name="platform" id="platform" placeholder="Enter platform(s)"
                                    class="form-control form-control-sm" value="{{ old('platform') }}">
                            </div>
                        </div>

                        <!-- Technology Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="technology" class="mb-2">Technology</label>
                                <input type="text" name="technology" id="technology"
                                    placeholder="Enter technology(ies)" class="form-control form-control-sm"
                                    value="{{ old('technology') }}">
                            </div>
                        </div>

                        <!-- Plugin Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="plugin" class="mb-2">Plugin</label>
                                <input type="text" name="plugin" id="plugin" placeholder="Enter plugin(s)"
                                    class="form-control form-control-sm" value="{{ old('plugin') }}">
                            </div>
                        </div>


                        <!-- Duration Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="duration" class="mb-2">Duration</label>
                                <input type="text" name="duration" placeholder="Duration"
                                    class="form-control form-control-sm" value="{{ old('duration') }}">
                            </div>
                        </div>

                        <!-- Team Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="team" class="mb-2">Team</label>
                                <input type="text" name="team" placeholder="Team Members"
                                    class="form-control form-control-sm" value="{{ old('team') }}">
                            </div>
                        </div>

                        <!-- Logo Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="logo" class="mb-2">Logo</label>
                                <input type="file" name="logo" class="form-control form-control-sm"
                                    onchange="previewImage(this, 'logoPreview')" value="{{ old('logo') }}">
                                <img id="logoPreview" style="width: 80px;height: 80px;" alt=""
                                    class="img-fluid mt-2" style="display: none;">
                            </div>
                        </div>

                        <!-- Image One Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="image_one" class="mb-2">Image One</label>
                                <input type="file" name="image_one" class="form-control form-control-sm"
                                    onchange="previewImage(this, 'imageOnePreview')" value="{{ old('image_one') }}">
                                <img id="imageOnePreview" style="width: 80px;height: 80px;" class="img-fluid mt-2"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Image Two Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="image_two" class="mb-2">Image Two</label>
                                <input type="file" name="image_two" class="form-control form-control-sm"
                                    onchange="previewImage(this, 'imageTwoPreview')" value="{{ old('image_two') }}">
                                <img id="imageTwoPreview" style="width: 80px;height: 80px;" class="img-fluid mt-2"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Image Three Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="image_three" class="mb-2">Image Three</label>
                                <input type="file" name="image_three" class="form-control form-control-sm"
                                    onchange="previewImage(this, 'imageThreePreview')"
                                    value="{{ old('image_three') }}">
                                <img id="imageThreePreview" style="width: 80px;height: 80px;" class="img-fluid mt-2"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Banner Image Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_image" class="mb-2">Banner Image</label>
                                <input type="file" name="banner_image" class="form-control form-control-sm"
                                    onchange="previewImage(this, 'bannerImagePreview')"
                                    value="{{ old('banner_image') }}">
                                <img id="bannerImagePreview" style="width: 80px;height: 80px;" class="img-fluid mt-2"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Row One Fields -->
                        <div class="col-3 mb-3">
                            <label for="row_one_badge" class="mb-2">Row One Badge</label>
                            <input type="text" name="row_one_badge" placeholder="Row One Badge"
                                class="form-control form-control-sm" value="{{ old('row_one_badge') }}">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="row_one_title" class="mb-2">Row One Title</label>
                            <input type="text" name="row_one_title" placeholder="Row One Title"
                                class="form-control form-control-sm" value="{{ old('row_one_title') }}">
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_one_image" class="mb-2">Row One Image</label>
                                <input type="file" name="row_one_image" class="form-control form-control-sm"
                                    onchange="previewImage(this, 'rowOneImagePreview')"
                                    value="{{ old('row_one_image') }}">
                                <img id="rowOneImagePreview" style="width: 80px;height: 80px;" class="img-fluid mt-2"
                                    style="display: none;">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="row_one_description" class="mb-2">Row One Description</label>
                            <textarea name="row_one_description" class="form-control form-control-sm editor" placeholder="Row One Description">{{ old('row_one_description') }}</textarea>
                        </div>
                        <div class="col-3 mb-3">
                            <label for="row_one_button_name" class="mb-2">Row One Button Name</label>
                            <input type="text" name="row_one_button_name" placeholder="Row One Button Name"
                                class="form-control form-control-sm" value="{{ old('row_one_button_name') }}">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="row_one_button_link" class="mb-2">Row One Button Link</label>
                            <input type="text" name="row_one_button_link" placeholder="Row One Button Link"
                                class="form-control form-control-sm" value="{{ old('row_one_button_link') }}">
                        </div>

                        <!-- Row Two Fields -->
                        <div class="col-3 mb-3">
                            <label for="row_two_badge" class="mb-2">Row Two Badge</label>
                            <input type="text" name="row_two_badge" placeholder="Row Two Badge"
                                class="form-control form-control-sm" value="{{ old('row_two_badge') }}">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="row_two_title" class="mb-2">Row Two Title</label>
                            <input type="text" name="row_two_title" placeholder="Row Two Title"
                                class="form-control form-control-sm" value="{{ old('row_two_title') }}">
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_two_image" class="mb-2">Row Two Image</label>
                                <input type="file" name="row_two_image" class="form-control form-control-sm"
                                    onchange="previewImage(this, 'rowTwoImagePreview')"
                                    value="{{ old('row_two_image') }}">
                                <img id="rowTwoImagePreview" style="width: 80px;height: 80px;" class="img-fluid mt-2"
                                    style="display: none;">
                            </div>
                        </div>


                        <div class="col-12 mb-3">
                            <label for="row_two_description" class="mb-2">Row Two Description</label>
                            <textarea name="row_two_description" class="form-control form-control-sm editor" placeholder="Row Two Description">{{ old('row_two_description') }}</textarea>
                        </div>
                        <div class="col-3 mb-3">
                            <label for="row_two_button_name" class="mb-2">Row Two Button Name</label>
                            <input type="text" name="row_two_button_name" placeholder="Row Two Button Name"
                                class="form-control form-control-sm" value="{{ old('row_two_button_name') }}">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="row_two_button_link" class="mb-2">Row Two Button Link</label>
                            <input type="text" name="row_two_button_link" placeholder="Row Two Button Link"
                                class="form-control form-control-sm" value="{{ old('row_two_button_link') }}">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="row_two_image_title" class="mb-2">Row Two Image Title</label>
                            <input type="text" name="row_two_image_title" placeholder="Row Two Image Title"
                                class="form-control form-control-sm" value="{{ old('row_two_image_title') }}">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="row_two_image_description" class="mb-2">Row Two Image Description</label>
                            <textarea name="row_two_image_description" class="form-control form-control-sm editor"
                                placeholder="Row Two Image Description">{{ old('row_two_image_description') }}</textarea>
                        </div>

                        <!-- Row Three Fields -->
                        <div class="col-3 mb-3">
                            <label for="row_three_badge" class="mb-2">Row Three Badge</label>
                            <input type="text" name="row_three_badge" placeholder="Row Three Badge"
                                class="form-control form-control-sm" value="{{ old('row_three_badge') }}">
                        </div>

                        <div class="col-3 mb-3">
                            <label for="row_three_title" class="mb-2">Row Three Title</label>
                            <input type="text" name="row_three_title" placeholder="Row Three Title"
                                class="form-control form-control-sm" value="{{ old('row_three_title') }}">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="row_three_description" class="mb-2">Row Three Description</label>
                            <textarea name="row_three_description" class="form-control form-control-sm editor"
                                placeholder="Row Three Description">{{ old('row_three_description') }}</textarea>
                        </div>

                        <!-- Gallery Fields -->
                        <div class="col-3 mb-3">
                            <label for="gallery_title" class="mb-2">Gallery Title</label>
                            <input type="text" name="gallery_title" placeholder="Gallery Title"
                                class="form-control form-control-sm" value="{{ old('gallery_title') }}">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="gallery_description" class="mb-2">Gallery Description</label>
                            <textarea name="gallery_description" class="form-control form-control-sm editor" placeholder="Gallery Description">{{ old('gallery_description') }}</textarea>
                        </div>

                        <!-- Row Four Fields -->
                        <div class="col-3 mb-3">
                            <label for="row_four_badge" class="mb-2">Row Four Badge</label>
                            <input type="text" name="row_four_badge" placeholder="Row Four Badge"
                                class="form-control form-control-sm" value="{{ old('row_four_badge') }}">
                        </div>

                        <div class="col-3 mb-3">
                            <label for="row_four_title" class="mb-2">Row Four Title</label>
                            <input type="text" name="row_four_title" placeholder="Row Four Title"
                                class="form-control form-control-sm" value="{{ old('row_four_title') }}">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="row_four_description" class="mb-2">Row Four Description</label>
                            <textarea name="row_four_description" class="form-control form-control-sm editor" placeholder="Row Four Description">{{ old('row_four_description') }}</textarea>
                        </div>

                        <!-- Row Five Fields -->
                        <div class="col-3 mb-3">
                            <label for="row_five_title" class="mb-2">Row Five Title</label>
                            <input type="text" name="row_five_title" placeholder="Row Five Title"
                                class="form-control form-control-sm" value="{{ old('row_five_title') }}">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="row_five_description" class="mb-2">Row Five Description</label>
                            <textarea name="row_five_description" class="form-control form-control-sm editor" placeholder="Row Five Description">{{ old('row_five_description') }}</textarea>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Function to preview the selected image
        function previewImage(input, previewId) {
            const file = input.files[0];
            const preview = document.getElementById(previewId);

            // Only show the preview if a file is selected
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block'; // Show the preview
                };

                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none'; // Hide the preview if no file is selected
            }
        }
    </script>

    <!-- Include Tagify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.0/tagify.css">

    <!-- Include Tagify JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.0/tagify.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Tagify for each input field
            var platformInput = document.querySelector('#platform');
            var technologyInput = document.querySelector('#technology');
            var pluginInput = document.querySelector('#plugin');

            new Tagify(platformInput);
            new Tagify(technologyInput);
            new Tagify(pluginInput);
        });
    </script>




</x-admin-app-layout>
