<x-admin-app-layout :title="'Project Query Create'">


    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.project-query.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.project-query.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-secondary rounded-0 p-5">
                    <div class="row p-4">

                        <!-- Choose Project -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="project_id" class="mb-2">Choose Project</label>
                                <select name="project_id" id="project_id" class="form-select form-select-sm"
                                    data-control="select2" data-placeholder="Select an option">
                                    <option value="">Select a project</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                    @endforeach
                                </select>
                                <div id="project_idError" class="invalid-feedback" style="display: none;">Please select
                                    a project</div>
                            </div>
                        </div>

                        <!-- Name Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="name" class="mb-2">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your name"
                                    class="form-control form-control-sm" value="{{ old('name') }}">
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="email" class="mb-2">Email</label>
                                <input type="email" name="email" id="email" placeholder="Enter your email"
                                    class="form-control form-control-sm" value="{{ old('email') }}">
                            </div>
                        </div>

                        <!-- Phone Field -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="phone" class="mb-2">Phone</label>
                                <input type="text" name="phone" id="phone" placeholder="Enter your phone"
                                    class="form-control form-control-sm" value="{{ old('phone') }}">
                            </div>
                        </div>

                        <!-- Message Field -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="message" class="mb-2">Message</label>
                                <textarea name="message" id="message" rows="4" placeholder="Your message"
                                    class="form-control form-control-sm editor">{{ old('message') }}</textarea>
                            </div>
                        </div>

                        <!-- Complete Template (Checkbox) -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="complete_template" class="mb-2">Complete Template</label>
                                <input type="checkbox" name="complete_template" id="complete_template"
                                    class="form-check-input" value="1"
                                    {{ old('complete_template') ? 'checked' : '' }}>
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
