<x-admin-app-layout :title="'About Edit'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.about.index') }}" class="btn btn-light-primary rounded-2">
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
            <form id="myForm" method="post" action="{{ route('admin.about.update', $item->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card bg-secondary rounded-0 p-5">
                    <div class="row p-4">

                        <!-- Row One Badge -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_one_badge" class="mb-2">Row One Badge</label>
                                <input type="text" name="row_one_badge" placeholder="Row One Badge"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_one_badge', $item->row_one_badge) }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_one_title" class="mb-2">Row One Title</label>
                                <input type="text" name="row_one_title" placeholder="Row One Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_one_title', $item->row_one_title) }}">
                            </div>
                        </div>

                        <!-- Row One Image Big -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_one_image_big" class="mb-2">Row One Image Big (420x510)</label>
                                <input type="file" name="row_one_image_big" class="form-control form-control-sm"
                                    id="rowOneImageBigInput" onchange="previewImage(event, 'rowOneImageBigPreview')">
                                <img id="rowOneImageBigPreview"
                                    src="{{ $item->row_one_image_big ? asset('storage/' . $item->row_one_image_big) : '' }}"
                                    alt="Image Preview" class="img-thumbnail mt-2"
                                    style="display:{{ $item->row_one_image_big ? 'block' : 'none' }}; width: 70px; height: 70px;">
                            </div>
                        </div>

                        <!-- Row One Image Small -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_one_image_small" class="mb-2">Row One Image Small (270x270)</label>
                                <input type="file" name="row_one_image_small" class="form-control form-control-sm"
                                    id="rowOneImageSmallInput"
                                    onchange="previewImage(event, 'rowOneImageSmallPreview')">
                                <img id="rowOneImageSmallPreview"
                                    src="{{ $item->row_one_image_small ? asset('storage/' . $item->row_one_image_small) : '' }}"
                                    alt="Image Preview" class="img-thumbnail mt-2"
                                    style="display:{{ $item->row_one_image_small ? 'block' : 'none' }}; width: 70px; height: 70px;">
                            </div>
                        </div>

                        <!-- Row One Description -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_one_description" class="mb-2">Row One Description</label>
                                <textarea name="row_one_description" class="form-control editor" rows="3">{{ old('row_one_description', $item->row_one_description) }}</textarea>
                            </div>
                        </div>

                        <!-- Row One Button Name -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_one_button_name" class="mb-2">Row One Button Name</label>
                                <input type="text" name="row_one_button_name" placeholder="Button Name"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_one_button_name', $item->row_one_button_name) }}">
                            </div>
                        </div>

                        <!-- Row One Button URL -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_one_button_url" class="mb-2">Row One Button URL</label>
                                <input type="url" name="row_one_button_url" placeholder="Button URL"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_one_button_url', $item->row_one_button_url) }}">
                            </div>
                        </div>

                        <!-- Row Three Badge -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_badge" class="mb-2">Row Three Badge</label>
                                <input type="text" name="row_three_badge" placeholder="Row Three Badge"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_three_badge', $item->row_three_badge) }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Three Title</label>
                                <input type="text" name="row_three_title" placeholder="Row Three Badge"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_three_title', $item->row_three_title) }}">
                            </div>
                        </div>

                        <!-- Row Three Image Big -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_image_big" class="mb-2">Row Three Image Big (636x334)</label>
                                <input type="file" name="row_three_image_big" class="form-control form-control-sm"
                                    id="rowThreeImageBigInput"
                                    onchange="previewImage(event, 'rowThreeImageBigPreview')">
                                <img id="rowThreeImageBigPreview"
                                    src="{{ $item->row_three_image_big ? asset('storage/' . $item->row_three_image_big) : '' }}"
                                    alt="Image Preview" class="img-thumbnail mt-2"
                                    style="display:{{ $item->row_three_image_big ? 'block' : 'none' }}; width: 70px; height: 70px;">
                            </div>
                        </div>

                        <!-- Row Three Image Small -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_image_small" class="mb-2">Row Three Image Small
                                    (636x608)</label>
                                <input type="file" name="row_three_image_small"
                                    class="form-control form-control-sm" id="rowThreeImageSmallInput"
                                    onchange="previewImage(event, 'rowThreeImageSmallPreview')">
                                <img id="rowThreeImageSmallPreview"
                                    src="{{ $item->row_three_image_small ? asset('storage/' . $item->row_three_image_small) : '' }}"
                                    alt="Image Preview" class="img-thumbnail mt-2"
                                    style="display:{{ $item->row_three_image_small ? 'block' : 'none' }}; width: 70px; height: 70px;">
                            </div>
                        </div>

                        <!-- Row Three Description -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_three_description" class="mb-2">Row Three Description</label>
                                <textarea name="row_three_description" class="form-control editor" rows="3">{{ old('row_three_description', $item->row_three_description) }}</textarea>
                            </div>
                        </div>

                        <!-- Row Three Button Name -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="row_three_button_name" class="mb-2">Row Three Button Name</label>
                                <input type="text" name="row_three_button_name" placeholder="Button Name"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_three_button_name', $item->row_three_button_name) }}">
                            </div>
                        </div>

                        <!-- Row Three Button URL -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="row_three_button_url" class="mb-2">Row Three Button URL</label>
                                <input type="url" name="row_three_button_url" placeholder="Button URL"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_three_button_url', $item->row_three_button_url) }}">
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
</x-admin-app-layout>

<script>
    function previewImage(event, previewId) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById(previewId);
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
