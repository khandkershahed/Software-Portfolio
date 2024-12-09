<x-admin-app-layout :title="'Website Setting'">
    <style>
        .accordion-button:not(.collapsed) {
            color: #232324;
            background-color: #f6f6f7;
            box-shadow: inset 0 -1px 0 #eff2f5;
            font-weight: 500;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #818080;
            background-color: #f5f8fa;
            border-left: 2px solid #0a9765;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .nav-pills .nav-item {
            padding-top: 7px;
            padding-bottom: 7px;
        }

        .nav-tabs .nav-link {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .nav-link {
            color: #4f4f4f;
        }
    </style>
    <div class="row">

        <div class="col-lg-3">
            <div class="card card-flash">

                <div class="accordion" id="kt_accordion_1">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="kt_accordion_1_header_1">
                            <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#kt_accordion_1_body_1" aria-expanded="true"
                                aria-controls="kt_accordion_1_body_1">
                                General Setting
                            </button>
                        </h2>
                        <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show"
                            aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
                            <div class="accordion-body pe-0">
                                <ul
                                    class="nav nav-tabs nav-pills border-0 flex-row flex-md-column me-0 mb-3 mb-md-0 fs-6">

                                    <li class="nav-item w-100 me-0">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            href="#kt_ecommerce_settings_general">General</a>
                                    </li>

                                    <li class="nav-item w-100">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_ecommerce_settings_logo">Logo
                                            & Favicon</a>
                                    </li>

                                    <li class="nav-item w-100">
                                        <a class="nav-link" data-bs-toggle="tab"
                                            href="#kt_ecommerce_settings_contact">Contact Information</a>
                                    </li>

                                    <li class="nav-item w-100 me-0">
                                        <a class="nav-link" data-bs-toggle="tab"
                                            href="#kt_ecommerce_settings_maintenance">Maintenance</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="kt_accordion_1_header_2">
                            <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_2" aria-expanded="false"
                                aria-controls="kt_accordion_1_body_2">
                                Seo Section
                            </button>
                        </h2>
                        <div id="kt_accordion_1_body_2" class="accordion-collapse collapse"
                            aria-labelledby="kt_accordion_1_header_2" data-bs-parent="#kt_accordion_1">
                            <div class="accordion-body">
                                <ul
                                    class="nav nav-tabs nav-pills border-0 flex-row flex-md-column me-0 mb-3 mb-md-0 fs-6">

                                    <li class="nav-item w-100 me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_ecommerce_settings_seo">Seo
                                            Setting</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="kt_accordion_1_header_3">
                            <button class="accordion-button fs-4 fw-bold collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3" aria-expanded="false"
                                aria-controls="kt_accordion_1_body_3">
                                Email Settings
                            </button>
                        </h2>
                        <div id="kt_accordion_1_body_3" class="accordion-collapse collapse"
                            aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
                            <div class="accordion-body">

                                <ul
                                    class="nav nav-tabs nav-pills border-0 flex-row flex-md-column me-0 mb-3 mb-md-0 fs-6">

                                    <li class="nav-item w-100 me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_ecommerce_settings_advanced">
                                            Advanced Settings</a>
                                    </li>

                                    <li class="nav-item w-100 me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_ecommerce_settings_api">
                                            API Integration</a>
                                    </li>

                                    <li class="nav-item w-100 me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_ecommerce_settings_business">
                                            Business Information</a>
                                    </li>

                                    <li class="nav-item w-100 me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_ecommerce_settings_service">
                                            Service Information</a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-lg-9">
            <div class="card card-flash">
                <div class="flex-lg-row-fluid ms-lg-15">

                    <form class="form" action="{{ route('admin.settings.updateOrCreate') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">

                                <div class="card card-flush">

                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>

                                    </div>


                                    <div class="card-body pt-0">



                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Site Name</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="site_name"
                                                    value="{{ old('site_name', optional($setting->first())->site_name) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Site Motto</label>
                                                <textarea class="form-control form-control-solid" name="site_motto">{{ old('site_motto', optional($setting->first())->site_motto) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Site URL</label>
                                                <textarea class="form-control form-control-solid" name="site_url">{{ old('site_url', optional($setting->first())->site_url) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Address Line One</label>
                                                <textarea class="form-control form-control-solid" name="address_line_one">{{ old('address_line_one', optional($setting->first())->address_line_one) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Address Line Two</label>
                                                <textarea class="form-control form-control-solid" name="address_line_two">{{ old('address_line_two', optional($setting->first())->address_line_two) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Default Language</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="default_language"
                                                    value="{{ old('default_language', optional($setting->first())->default_language) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Default Currency</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="default_currency"
                                                    value="{{ old('default_currency', optional($setting->first())->default_currency) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Currency Symbol</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="currency_symbol"
                                                    value="{{ old('currency_symbol', optional($setting->first())->currency_symbol) }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Date Format</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="date_format"
                                                    value="{{ old('date_format', optional($setting->first())->date_format) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Time Format</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="time_format"
                                                    value="{{ old('time_format', optional($setting->first())->time_format) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Facebook URL</label>
                                                <textarea class="form-control form-control-solid" name="facebook_url">{{ old('facebook_url', optional($setting->first())->facebook_url) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Twitter URL</label>
                                                <textarea class="form-control form-control-solid" name="twitter_url">{{ old('twitter_url', optional($setting->first())->twitter_url) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Instagram URL</label>
                                                <textarea class="form-control form-control-solid" name="instagram_url">{{ old('instagram_url', optional($setting->first())->instagram_url) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">LinkedIn URL</label>
                                                <textarea class="form-control form-control-solid" name="linkedin_url">{{ old('linkedin_url', optional($setting->first())->linkedin_url) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">YouTube URL</label>
                                                <textarea class="form-control form-control-solid" name="youtube_url">{{ old('youtube_url', optional($setting->first())->youtube_url) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">GitHub URL</label>
                                                <textarea class="form-control form-control-solid" name="github_url">{{ old('github_url', optional($setting->first())->github_url) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Portfolio URL</label>
                                                <textarea class="form-control form-control-solid" name="portfolio_url">{{ old('portfolio_url', optional($setting->first())->portfolio_url) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Fiverr URL</label>
                                                <textarea class="form-control form-control-solid" name="fiverr_url">{{ old('fiverr_url', optional($setting->first())->fiverr_url) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Upwork URL</label>
                                                <textarea class="form-control form-control-solid" name="upwork_url">{{ old('upwork_url', optional($setting->first())->upwork_url) }}</textarea>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">

                                                <div class="separator mb-6"></div>

                                                <div class="d-flex justify-content-end">

                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>


                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div></div>



                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="kt_ecommerce_settings_logo" role="tabpanel">

                                <div class="card card-flush">

                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                        <div class="card-title">

                                            <h2>Logo & Favicon</h2>

                                        </div>

                                    </div>


                                    <div class="card-body pt-0">



                                        <div class="row">

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Site White Logo</label>
                                                <input type="file" class="form-control" name="site_white_logo">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Site Black Logo</label>
                                                <input type="file" class="form-control" name="site_black_logo">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Site Favicon</label>
                                                <input type="file" class="form-control" name="site_favicon">
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">

                                                <div class="separator mb-6"></div>

                                                <div class="d-flex justify-content-end">

                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>


                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div></div>


                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="kt_ecommerce_settings_contact" role="tabpanel">

                                <div class="card card-flush">

                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                        <div class="card-title">

                                            <h2>Contact Information</h2>

                                        </div>

                                    </div>


                                    <div class="card-body pt-0">



                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Contact Email</label>
                                                <input type="email" class="form-control form-control-solid"
                                                    name="contact_email"
                                                    value="{{ old('contact_email', optional($setting->first())->contact_email) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Support Email</label>
                                                <input type="email" class="form-control form-control-solid"
                                                    name="support_email"
                                                    value="{{ old('support_email', optional($setting->first())->support_email) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Info Email</label>
                                                <input type="email" class="form-control form-control-solid"
                                                    name="info_email"
                                                    value="{{ old('info_email', optional($setting->first())->info_email) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Sales Email</label>
                                                <input type="email" class="form-control form-control-solid"
                                                    name="sales_email"
                                                    value="{{ old('sales_email', optional($setting->first())->sales_email) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Phone One</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="phone_one"
                                                    value="{{ old('phone_one', optional($setting->first())->phone_one) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Phone Two</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="phone_two"
                                                    value="{{ old('phone_two', optional($setting->first())->phone_two) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">WhatsApp Number</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="whatsapp_number"
                                                    value="{{ old('whatsapp_number', optional($setting->first())->whatsapp_number) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Contact Hours</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="contact_hours"
                                                    value="{{ old('contact_hours', optional($setting->first())->contact_hours) }}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">

                                                <div class="separator mb-6"></div>

                                                <div class="d-flex justify-content-end">

                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>


                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div></div>


                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="kt_ecommerce_settings_maintenance" role="tabpanel">

                                <div class="card card-flush">

                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                        <div class="card-title">

                                            <h2>Maintenance</h2>

                                        </div>

                                    </div>

                                    <div class="card-body pt-0">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Maintenance Mode</label>
                                                <select class="form-control form-control-solid"
                                                    name="maintenance_mode">
                                                    <option value="1"
                                                        {{ old('maintenance_mode', optional($setting->first())->maintenance_mode) == 1 ? 'selected' : '' }}>
                                                        Enabled</option>
                                                    <option value="0"
                                                        {{ old('maintenance_mode', optional($setting->first())->maintenance_mode) == 0 ? 'selected' : '' }}>
                                                        Disabled</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">System Timezone</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="system_timezone"
                                                    value="{{ old('system_timezone', optional($setting->first())->system_timezone) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Maintenance Message</label>
                                                <textarea class="form-control form-control-solid" name="maintenance_message">{{ old('maintenance_message', optional($setting->first())->maintenance_message) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Additional Script</label>
                                                <textarea class="form-control form-control-solid" name="additional_script">{{ old('additional_script', optional($setting->first())->additional_script) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Google Adsense</label>
                                                <textarea class="form-control form-control-solid" name="google_adsense">{{ old('google_adsense', optional($setting->first())->google_adsense) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Google Tag Manager</label>
                                                <textarea class="form-control form-control-solid" name="google_tag_manager">{{ old('google_tag_manager', optional($setting->first())->google_tag_manager) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Google Script</label>
                                                <textarea class="form-control form-control-solid" name="google_script">{{ old('google_script', optional($setting->first())->google_script) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Google Business</label>
                                                <textarea class="form-control form-control-solid" name="google_business">{{ old('google_business', optional($setting->first())->google_business) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">

                                                <div class="separator mb-6"></div>

                                                <div class="d-flex justify-content-end">

                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>


                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div></div>


                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="kt_ecommerce_settings_seo" role="tabpanel">

                                <div class="card card-flush">

                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                        <div class="card-title">

                                            <h2>Seo Setting</h2>

                                        </div>

                                    </div>

                                    <div class="card-body pt-0">

                                        <div class="row">


                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Seo Title</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="seo_title"
                                                    value="{{ old('seo_title', optional($setting->first())->seo_title) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Seo Keywords</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="seo_keywords"
                                                    value="{{ old('seo_keywords', optional($setting->first())->seo_keywords) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Seo Meta Tags</label>
                                                <textarea class="form-control form-control-solid" name="seo_meta_tags">{{ old('seo_meta_tags', optional($setting->first())->seo_meta_tags) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Seo Description</label>
                                                <textarea class="form-control form-control-solid" name="seo_description">{{ old('seo_description', optional($setting->first())->seo_description) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">OG Image</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="og_image"
                                                    value="{{ old('og_image', optional($setting->first())->og_image) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">OG Title</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="og_title"
                                                    value="{{ old('og_title', optional($setting->first())->og_title) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">OG Description</label>
                                                <textarea class="form-control form-control-solid" name="og_description">{{ old('og_description', optional($setting->first())->og_description) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Canonical URL</label>
                                                <textarea class="form-control form-control-solid" name="canonical_url">{{ old('canonical_url', optional($setting->first())->canonical_url) }}</textarea>
                                            </div>



                                        </div>

                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">

                                                <div class="separator mb-6"></div>

                                                <div class="d-flex justify-content-end">

                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>


                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div></div>


                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="kt_ecommerce_settings_advanced" role="tabpanel">

                                <div class="card card-flush">

                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                        <div class="card-title">

                                            <h2>Advanced Setting</h2>

                                        </div>

                                    </div>


                                    <div class="card-body pt-0">

                                        <div class="row">


                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Theme Color</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="theme_color"
                                                    value="{{ old('theme_color', optional($setting->first())->theme_color) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Dark Mode</label>
                                                <input type="checkbox" value="1" class="form-check-input" name="dark_mode"
                                                    {{ old('dark_mode', optional($setting->first())->dark_mode) ? 'checked' : '' }}>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Custom CSS</label>
                                                <textarea class="form-control form-control-solid" name="custom_css">{{ old('custom_css', optional($setting->first())->custom_css) }}</textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Custom JS</label>
                                                <textarea class="form-control form-control-solid" name="custom_js">{{ old('custom_js', optional($setting->first())->custom_js) }}</textarea>
                                            </div>



                                        </div>

                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">

                                                <div class="separator mb-6"></div>

                                                <div class="d-flex justify-content-end">

                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>


                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div></div>


                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="kt_ecommerce_settings_api" role="tabpanel">

                                <div class="card card-flush">

                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                        <div class="card-title">

                                            <h2>Api Setting</h2>

                                        </div>

                                    </div>


                                    <div class="card-body pt-0">

                                        <div class="row">


                                            <div class="col-md-12">
                                                <label class="fs-6 fw-bold mb-2">Map Api Key</label>
                                                <textarea class="form-control form-control-solid" name="map_api_key">{{ old('map_api_key', optional($setting->first())->map_api_key) }}</textarea>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="fs-6 fw-bold mb-2">Payment Gateway Key</label>
                                                <textarea class="form-control form-control-solid" name="payment_gateway_key">{{ old('payment_gateway_key', optional($setting->first())->payment_gateway_key) }}</textarea>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">

                                                <div class="separator mb-6"></div>

                                                <div class="d-flex justify-content-end">

                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>


                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div></div>


                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="kt_ecommerce_settings_business" role="tabpanel">

                                <div class="card card-flush">

                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                        <div class="card-title">

                                            <h2>Business Setting</h2>

                                        </div>

                                    </div>


                                    <div class="card-body pt-0">


                                        <div class="row">


                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Company Name</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="company_name"
                                                    value="{{ old('company_name', optional($setting->first())->company_name) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Tax Number</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="tax_number"
                                                    value="{{ old('tax_number', optional($setting->first())->tax_number) }}">
                                            </div>

                                            <div class="col-md-12">
                                                <label class="fs-6 fw-bold mb-2">Billing Address</label>
                                                <textarea class="form-control form-control-solid" name="billing_address">{{ old('billing_address', optional($setting->first())->billing_address) }}</textarea>
                                            </div>



                                        </div>

                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">

                                                <div class="separator mb-6"></div>

                                                <div class="d-flex justify-content-end">

                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>


                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div></div>


                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="kt_ecommerce_settings_service" role="tabpanel">

                                <div class="card card-flush">

                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                        <div class="card-title">

                                            <h2>Service Setting</h2>

                                        </div>

                                    </div>


                                    <div class="card-body pt-0">

                                        <div class="row">

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Service Days</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="service_days"
                                                    value="{{ old('service_days', optional($setting->first())->service_days) }}">
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fs-6 fw-bold mb-2">Service Time</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="service_time"
                                                    value="{{ old('service_time', optional($setting->first())->service_time) }}">
                                            </div>




                                        </div>

                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">

                                                <div class="separator mb-6"></div>

                                                <div class="d-flex justify-content-end">

                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>


                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                        <div></div>

                                    </div>

                                </div>

                            </div>



                        </div>

                    </form>

                </div>
            </div>
        </div>


    </div>
</x-admin-app-layout>

