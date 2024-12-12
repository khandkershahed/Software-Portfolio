<x-admin-app-layout :title="'HomePage Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
                <!-- You can place additional title or description here -->
            </div>
            <div class="card-toolbar">
                <a href="{{ route('admin.homepage.index') }}" class="btn btn-light-primary rounded-2">
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
                    </span>
                    Back to list
                </a>
            </div>
        </div>

        <div class="card-body">
            <form id="myForm" method="POST" action="{{ route('admin.homepage.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-secondary rounded-0 p-5">
                    <div class="row p-4">

                        <!-- Row One -->
                        <div class="col-12 mb-3">
                            <h5>Row One</h5>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="row_one_badge" class="mb-2">Badge</label>
                                <input type="text" name="row_one_badge" id="row_one_badge"
                                    class="form-control form-control-sm" value="{{ old('row_one_badge') }}"
                                    placeholder="Enter Badge">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="row_one_title" class="mb-2">Title</label>
                                <input type="text" name="row_one_title" id="row_one_title"
                                    class="form-control form-control-sm" value="{{ old('row_one_title') }}"
                                    placeholder="Enter Title">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_one_description" class="mb-2">Description</label>
                                <textarea name="row_one_description" id="row_one_description" class="form-control form-control-sm"
                                    placeholder="Enter Description">{{ old('row_one_description') }}</textarea>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_one_link" class="mb-2">Link</label>
                                <input type="text" name="row_one_link" id="row_one_link"
                                    class="form-control form-control-sm" value="{{ old('row_one_link') }}"
                                    placeholder="Enter Link">
                            </div>
                        </div>

                        <!-- Row Two - Icons -->
                        <div class="col-12 mb-3">
                            <h5>Row Two (Icons)</h5>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Two Icon One</label>
                                <input type="text" name="row_two_icon_one" id="row_two_icon_one"
                                    class="form-control form-control-sm" value="{{ old('row_two_icon_one') }}"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Two Icon One Title</label>
                                <input type="text" name="row_two_icon_one_title" id="row_two_icon_one_title"
                                    class="form-control form-control-sm" value="{{ old('row_two_icon_one_title') }}"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Two Icon Two</label>
                                <input type="text" name="row_two_icon_two" id="row_two_icon_two"
                                    class="form-control form-control-sm" value="{{ old('row_two_icon_two') }}"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Two Icon Two Title</label>
                                <input type="text" name="row_two_icon_two_title" id="row_two_icon_two_title"
                                    class="form-control form-control-sm" value="{{ old('row_two_icon_two_title') }}"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Two Icon Three</label>
                                <input type="text" name="row_two_icon_three" id="row_two_icon_three"
                                    class="form-control form-control-sm" value="{{ old('row_two_icon_three') }}"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Two Icon Three Title</label>
                                <input type="text" name="row_two_icon_three_title" id="row_two_icon_three_title"
                                    class="form-control form-control-sm" value="{{ old('row_two_icon_three_title') }}"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Two Icon Four</label>
                                <input type="text" name="row_two_icon_four" id="row_two_icon_four"
                                    class="form-control form-control-sm" value="{{ old('row_two_icon_four') }}"
                                    placeholder="">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Two Icon Three Four</label>
                                <input type="text" name="row_two_icon_four_title" id="row_two_icon_four_title"
                                    class="form-control form-control-sm" value="{{ old('row_two_icon_four_title') }}"
                                    placeholder="">
                            </div>
                        </div>

                        <!-- Row Three -->
                        <div class="col-12 mb-3">
                            <h5>Row Three</h5>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Title</label>
                                <input type="text" name="row_three_title" id="row_three_title"
                                    class="form-control form-control-sm" value="{{ old('row_three_title') }}"
                                    placeholder="Enter Title">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="row_three_pdf" class="mb-2">PDF</label>
                                <input type="file" name="row_three_pdf" id="row_three_pdf"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <!-- Row Four -->
                        <div class="col-12 mb-3">
                            <h5>Row Four</h5>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_four_title" class="mb-2">Title</label>
                                <input type="text" name="row_four_title" id="row_four_title"
                                    class="form-control form-control-sm" value="{{ old('row_four_title') }}"
                                    placeholder="Enter Title">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_four_description" class="mb-2">Description</label>
                                <textarea name="row_four_description" id="row_four_description" class="form-control form-control-sm"
                                    placeholder="Enter Description">{{ old('row_four_description') }}</textarea>
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
