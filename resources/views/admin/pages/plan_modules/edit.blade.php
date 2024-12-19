<x-admin-app-layout :title="'Plan Module Edit'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.plan-modules.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.plan-modules.update', $item->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card bg-secondary rounded-0 p-5">
                    <div class="row p-4">

                        <div class="col-3 mb-3">
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

                        <!-- Page Banner Selection -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="type" class="mb-2">Choose Option</label>
                                <select name="type" required class="form-select form-select-sm"
                                    data-control="select2">
                                    <option value="">Select an option</option>

                                    <option value="page" {{ old('type', $item->type) == 'page' ? 'selected' : '' }}>
                                        Page</option>
                                    <option value="frontend"
                                        {{ old('type', $item->type) == 'frontend' ? 'selected' : '' }}>Frontend Section
                                    </option>
                                    <option value="backend"
                                        {{ old('type', $item->type) == 'backend' ? 'selected' : '' }}>Backend Section
                                    </option>
                                    <option value="support"
                                        {{ old('type', $item->type) == 'support' ? 'selected' : '' }}>Support Page
                                    </option>
                                    <option value="graphics"
                                        {{ old('type', $item->type) == 'graphics' ? 'selected' : '' }}>Graphics Page
                                    </option>
                                    <option value="design" {{ old('type', $item->type) == 'design' ? 'selected' : '' }}>
                                        Design Page</option>
                                    <option value="content"
                                        {{ old('type', $item->type) == 'content' ? 'selected' : '' }}>Content Page
                                    </option>
                                    <option value="maintenance"
                                        {{ old('type', $item->type) == 'maintenance' ? 'selected' : '' }}>Maintenance
                                        Page</option>
                                </select>
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="title" class="mb-2">Title</label>
                                <input type="text" name="title" placeholder="Title"
                                    class="form-control form-control-sm" value="{{ old('title', $item->title) }}">
                            </div>
                        </div>

                        <!-- Value -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="value" class="mb-2">Value</label>
                                <input type="text" name="value" placeholder="Enter Value"
                                    class="form-control form-control-sm" value="{{ old('value', $item->value) }}">
                            </div>
                        </div>

                        <!-- Currency -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="currency" class="mb-2">Currency</label>
                                <select name="currency" class="form-select form-select-sm" data-control="select2">
                                    <option value="">Select Currency</option>
                                    <option value="taka"
                                        {{ old('currency', $item->currency) == 'taka' ? 'selected' : '' }}>Taka
                                    </option>
                                    <option value="euro"
                                        {{ old('currency', $item->currency) == 'euro' ? 'selected' : '' }}>EURO
                                    </option>
                                    <option value="pound"
                                        {{ old('currency', $item->currency) == 'pound' ? 'selected' : '' }}>Pound
                                    </option>
                                    <option value="dollar"
                                        {{ old('currency', $item->currency) == 'dollar' ? 'selected' : '' }}>Dollar
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="price" class="mb-2">Price</label>
                                <input type="number" name="price" step="0.01" placeholder="Enter Price"
                                    class="form-control form-control-sm" value="{{ old('price', $item->price) }}">
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
