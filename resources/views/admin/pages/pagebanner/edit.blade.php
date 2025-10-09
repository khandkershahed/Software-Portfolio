<x-admin-app-layout :title="'Page Banner Edit'">


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

            <form id="myForm" method="post" action="{{ route('admin.page-banner.update', $item->id) }}"
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
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Page Name Dropdown -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="page_name" class="mb-2">Choose Page Banner</label>
                                <select name="page_name" id="page_name" required class="form-select form-select-sm"
                                    data-control="select2" data-placeholder="Select Row One..">
                                    <option value="homeslider" {{ $item->page_name == 'homeslider' ? 'selected' : '' }}>
                                        Home Slider</option>
                                    <option value="allproject" @selected($item->page_name == 'allproject')>All Project</option>
                                    <option value="about" @selected($item->page_name == 'about')>About US</option>
                                    <option value="contact" @selected($item->page_name == 'contact')>Contact US</option>
                                    <option value="query" @selected($item->page_name == 'query')>Query</option>
                                     <option value="grphaics" @selected($item->page_name == 'grphaics')>Graphics</option>
                                    <option value="terms" @selected($item->page_name == 'terms')>Terms </option>
                                    <option value="privacy" @selected($item->page_name == 'privacy')>Privacy</option>
                                    <option value="pricing" @selected($item->page_name == 'pricing')>Pricing Plan</option>
                                </select>
                                @error('page_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Badge -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="badge" class="mb-2">Badge</label>
                                <input type="text" name="badge" id="badge" placeholder="Banner Badge"
                                    class="form-control form-control-sm @error('badge') is-invalid @enderror"
                                    value="{{ old('badge', $item->badge) }}">
                                @error('badge')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="title" class="mb-2">Title</label>
                                <input type="text" name="title" id="title" placeholder="Banner Title"
                                    class="form-control form-control-sm @error('title') is-invalid @enderror"
                                    value="{{ old('title', $item->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Button Name -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="button_name" class="mb-2">Button Name</label>
                                <input type="text" name="button_name" id="button_name" placeholder="Button Name"
                                    class="form-control form-control-sm @error('button_name') is-invalid @enderror"
                                    value="{{ old('button_name', $item->button_name) }}">
                                @error('button_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="image" class="mb-2">Image</label>
                                <input type="file" name="image" id="imageInput"
                                    class="form-control form-control-sm" onchange="previewImage(event)">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Preview -->
                        <div class="col-3 mb-3">
                            <div class="form-group" id="imagePreview" class="mt-2">
                                <label for="preview" class="mb-2">Current Image</label>
                                <img id="preview" src="{{ asset('storage/' . $item->image) }}" alt="Image Preview"
                                    class="img-thumbnail"
                                    style="max-width: 140px; height: 100px; display: {{ $item->image ? 'block' : 'none' }};">
                            </div>
                        </div>

                        <!-- Button Link -->
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="button_link" class="mb-2">Button Link</label>
                                <textarea name="button_link" id="button_link" placeholder="https://www.example.com" cols="1" rows="1"
                                    class="form-control @error('button_link') is-invalid @enderror">{{ old('button_link', $item->button_link) }}</textarea>
                                @error('button_link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Banner Link -->
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="banner_link" class="mb-2">Banner Link</label>
                                <textarea name="banner_link" id="banner_link" placeholder="https://www.example.com" cols="1" rows="1"
                                    class="form-control @error('banner_link') is-invalid @enderror">{{ old('banner_link', $item->banner_link) }}</textarea>
                                @error('banner_link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 mb-3 mt-4">
                            <button type="submit" class="btn btn-dark rounded-0 px-5 btn-sm float-end">Update
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
