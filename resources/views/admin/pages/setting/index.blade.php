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
                                    <li class="nav-item w-100 me-0">
                                        <a class="nav-link" data-bs-toggle="tab"
                                            href="#kt_ecommerce_settings_store">Maintenance</a>
                                    </li>
                                    <li class="nav-item w-100">
                                        <a class="nav-link" data-bs-toggle="tab"
                                            href="#kt_ecommerce_settings_localization">Images</a>
                                    </li>
                                    <li class="nav-item w-100">
                                        <a class="nav-link" data-bs-toggle="tab"
                                            href="#kt_ecommerce_settings_products">Products</a>
                                    </li>
                                    <li class="nav-item w-100">
                                        <a class="nav-link" data-bs-toggle="tab"
                                            href="#kt_ecommerce_settings_customers">Customers</a>
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
                                Seo Setting
                            </button>
                        </h2>
                        <div id="kt_accordion_1_body_2" class="accordion-collapse collapse"
                            aria-labelledby="kt_accordion_1_header_2" data-bs-parent="#kt_accordion_1">
                            <div class="accordion-body">
                                ...
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
                                ...
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-9">
            <div class="card card-flash">
                <div class="flex-lg-row-fluid ms-lg-15">

                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">

                            <div class="card card-flush">

                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                    <div class="card-title">

                                        <h2>General</h2>

                                    </div>

                                </div>


                                <div class="card-body pt-0">

                                    <form id="kt_ecommerce_settings_general_form"
                                        class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">

                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Meta Title</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set the title of the store for SEO."
                                                        aria-label="Set the title of the store for SEO."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="meta_title" value="">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Meta Tag Description</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set the description of the store for SEO."
                                                        aria-label="Set the description of the store for SEO."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <textarea class="form-control form-control-solid" name="meta_description"></textarea>

                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Meta Keywords</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set keywords for the store separated by a comma."
                                                        aria-label="Set keywords for the store separated by a comma."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <tags
                                                    class="tagify form-control form-control-solid tagify--noTags tagify--empty"
                                                    tabindex="-1">
                                                    <span contenteditable="" tabindex="0" data-placeholder="​"
                                                        aria-placeholder="" class="tagify__input" role="textbox"
                                                        aria-autocomplete="both" aria-multiline="false"></span>
                                                    ​
                                                </tags><input type="text" class="form-control form-control-solid"
                                                    name="meta_keywords" value=""
                                                    data-kt-ecommerce-settings-type="tagify">

                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Theme</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set theme style for the store."
                                                        aria-label="Set theme style for the store."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">

                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        name="theme" data-control="select2" data-hide-search="true"
                                                        data-placeholder="Select a layout"
                                                        data-select2-id="select2-data-10-vutl" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option></option>
                                                        <option value="Default" selected="selected"
                                                            data-select2-id="select2-data-12-me5c">Default</option>
                                                        <option value="Minimalist">Minimalist</option>
                                                        <option value="Dark">Dark</option>
                                                        <option value="High_Contrast">High Contrast</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-11-f9ab"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-theme-l6-container"
                                                                aria-controls="select2-theme-l6-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-theme-l6-container" role="textbox"
                                                                    aria-readonly="true"
                                                                    title="Default">Default</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Default Layout</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set default layout style for the store."
                                                        aria-label="Set default layout style for the store."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">

                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        name="layout" data-control="select2" data-hide-search="true"
                                                        data-placeholder="Select a layout"
                                                        data-select2-id="select2-data-13-2ydv" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option></option>
                                                        <option value="Default" selected="selected"
                                                            data-select2-id="select2-data-15-hoza">Default</option>
                                                        <option value="Electronics">Electronics</option>
                                                        <option value="Fashion">Fashion</option>
                                                        <option value="Home">Home</option>
                                                        <option value="Dining">Dining</option>
                                                        <option value="Interior">Interior</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-14-w7sg"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-layout-9w-container"
                                                                aria-controls="select2-layout-9w-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-layout-9w-container" role="textbox"
                                                                    aria-readonly="true"
                                                                    title="Default">Default</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>

                                                </div>
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
                                    </form>

                                </div>

                            </div>

                        </div>


                        <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">

                            <div class="card card-flush">

                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                    <div class="card-title">

                                        <h2>Store</h2>

                                    </div>

                                </div>


                                <div class="card-body pt-0">

                                    <form id="kt_ecommerce_settings_general_store"
                                        class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">

                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Store Name</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set the name of the store"
                                                        aria-label="Set the name of the store"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="store_name" value="">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Store Owner</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set the store owner's name"
                                                        aria-label="Set the store owner's name"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="store_owner" value="">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Address</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set the store's full address."
                                                        aria-label="Set the store's full address."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <textarea class="form-control form-control-solid" name="store_address"></textarea>

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Geocode</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Enter the store geocode manually (optional)"
                                                        aria-label="Enter the store geocode manually (optional)"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="store_geocode" value="">

                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Email</span>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="email" class="form-control form-control-solid"
                                                    name="store_email" value="">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Phone</span>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="store_phone" value="">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Fax</span>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="store_fax" value="">

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
                                    </form>

                                </div>

                            </div>

                        </div>


                        <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">

                            <div class="card card-flush">

                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                    <div class="card-title">

                                        <h2>Localization</h2>

                                    </div>

                                </div>


                                <div class="card-body pt-0">

                                    <form id="kt_ecommerce_settings_general_localization"
                                        class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">

                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Country</span>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">

                                                    <div class="form-floating border rounded">
                                                        <select id="kt_ecommerce_localization_country"
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            name="localization_country"
                                                            data-kt-ecommerce-settings-type="select2_flags"
                                                            data-placeholder="Select a country"
                                                            data-select2-id="select2-data-kt_ecommerce_localization_country"
                                                            tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="select2-data-137-6nuz"></option>
                                                            <option value="AF"
                                                                data-kt-select2-country="assets/media/flags/afghanistan.svg">
                                                                Afghanistan</option>
                                                            <option value="AX"
                                                                data-kt-select2-country="assets/media/flags/aland-islands.svg">
                                                                Aland Islands</option>
                                                            <option value="AL"
                                                                data-kt-select2-country="assets/media/flags/albania.svg">
                                                                Albania</option>
                                                            <option value="DZ"
                                                                data-kt-select2-country="assets/media/flags/algeria.svg">
                                                                Algeria</option>
                                                            <option value="AS"
                                                                data-kt-select2-country="assets/media/flags/american-samoa.svg">
                                                                American Samoa</option>
                                                            <option value="AD"
                                                                data-kt-select2-country="assets/media/flags/andorra.svg">
                                                                Andorra</option>
                                                            <option value="AO"
                                                                data-kt-select2-country="assets/media/flags/angola.svg">
                                                                Angola</option>
                                                            <option value="AI"
                                                                data-kt-select2-country="assets/media/flags/anguilla.svg">
                                                                Anguilla</option>
                                                            <option value="AG"
                                                                data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">
                                                                Antigua and Barbuda</option>
                                                            <option value="AR"
                                                                data-kt-select2-country="assets/media/flags/argentina.svg">
                                                                Argentina</option>
                                                            <option value="AM"
                                                                data-kt-select2-country="assets/media/flags/armenia.svg">
                                                                Armenia</option>
                                                            <option value="AW"
                                                                data-kt-select2-country="assets/media/flags/aruba.svg">
                                                                Aruba</option>
                                                            <option value="AU"
                                                                data-kt-select2-country="assets/media/flags/australia.svg">
                                                                Australia</option>
                                                            <option value="AT"
                                                                data-kt-select2-country="assets/media/flags/austria.svg">
                                                                Austria</option>
                                                            <option value="AZ"
                                                                data-kt-select2-country="assets/media/flags/azerbaijan.svg">
                                                                Azerbaijan</option>
                                                            <option value="BS"
                                                                data-kt-select2-country="assets/media/flags/bahamas.svg">
                                                                Bahamas</option>
                                                            <option value="BH"
                                                                data-kt-select2-country="assets/media/flags/bahrain.svg">
                                                                Bahrain</option>
                                                            <option value="BD"
                                                                data-kt-select2-country="assets/media/flags/bangladesh.svg">
                                                                Bangladesh</option>
                                                            <option value="BB"
                                                                data-kt-select2-country="assets/media/flags/barbados.svg">
                                                                Barbados</option>
                                                            <option value="BY"
                                                                data-kt-select2-country="assets/media/flags/belarus.svg">
                                                                Belarus</option>
                                                            <option value="BE"
                                                                data-kt-select2-country="assets/media/flags/belgium.svg">
                                                                Belgium</option>
                                                            <option value="BZ"
                                                                data-kt-select2-country="assets/media/flags/belize.svg">
                                                                Belize</option>
                                                            <option value="BJ"
                                                                data-kt-select2-country="assets/media/flags/benin.svg">
                                                                Benin</option>
                                                            <option value="BM"
                                                                data-kt-select2-country="assets/media/flags/bermuda.svg">
                                                                Bermuda</option>
                                                            <option value="BT"
                                                                data-kt-select2-country="assets/media/flags/bhutan.svg">
                                                                Bhutan</option>
                                                            <option value="BO"
                                                                data-kt-select2-country="assets/media/flags/bolivia.svg">
                                                                Bolivia, Plurinational State of</option>
                                                            <option value="BQ"
                                                                data-kt-select2-country="assets/media/flags/bonaire.svg">
                                                                Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA"
                                                                data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg">
                                                                Bosnia and Herzegovina</option>
                                                            <option value="BW"
                                                                data-kt-select2-country="assets/media/flags/botswana.svg">
                                                                Botswana</option>
                                                            <option value="BR"
                                                                data-kt-select2-country="assets/media/flags/brazil.svg">
                                                                Brazil</option>
                                                            <option value="IO"
                                                                data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg">
                                                                British Indian Ocean Territory</option>
                                                            <option value="BN"
                                                                data-kt-select2-country="assets/media/flags/brunei.svg">
                                                                Brunei Darussalam</option>
                                                            <option value="BG"
                                                                data-kt-select2-country="assets/media/flags/bulgaria.svg">
                                                                Bulgaria</option>
                                                            <option value="BF"
                                                                data-kt-select2-country="assets/media/flags/burkina-faso.svg">
                                                                Burkina Faso</option>
                                                            <option value="BI"
                                                                data-kt-select2-country="assets/media/flags/burundi.svg">
                                                                Burundi</option>
                                                            <option value="KH"
                                                                data-kt-select2-country="assets/media/flags/cambodia.svg">
                                                                Cambodia</option>
                                                            <option value="CM"
                                                                data-kt-select2-country="assets/media/flags/cameroon.svg">
                                                                Cameroon</option>
                                                            <option value="CA"
                                                                data-kt-select2-country="assets/media/flags/canada.svg">
                                                                Canada</option>
                                                            <option value="CV"
                                                                data-kt-select2-country="assets/media/flags/cape-verde.svg">
                                                                Cape Verde</option>
                                                            <option value="KY"
                                                                data-kt-select2-country="assets/media/flags/cayman-islands.svg">
                                                                Cayman Islands</option>
                                                            <option value="CF"
                                                                data-kt-select2-country="assets/media/flags/central-african-republic.svg">
                                                                Central African Republic</option>
                                                            <option value="TD"
                                                                data-kt-select2-country="assets/media/flags/chad.svg">
                                                                Chad</option>
                                                            <option value="CL"
                                                                data-kt-select2-country="assets/media/flags/chile.svg">
                                                                Chile</option>
                                                            <option value="CN"
                                                                data-kt-select2-country="assets/media/flags/china.svg">
                                                                China</option>
                                                            <option value="CX"
                                                                data-kt-select2-country="assets/media/flags/christmas-island.svg">
                                                                Christmas Island</option>
                                                            <option value="CC"
                                                                data-kt-select2-country="assets/media/flags/cocos-island.svg">
                                                                Cocos (Keeling) Islands</option>
                                                            <option value="CO"
                                                                data-kt-select2-country="assets/media/flags/colombia.svg">
                                                                Colombia</option>
                                                            <option value="KM"
                                                                data-kt-select2-country="assets/media/flags/comoros.svg">
                                                                Comoros</option>
                                                            <option value="CK"
                                                                data-kt-select2-country="assets/media/flags/cook-islands.svg">
                                                                Cook Islands</option>
                                                            <option value="CR"
                                                                data-kt-select2-country="assets/media/flags/costa-rica.svg">
                                                                Costa Rica</option>
                                                            <option value="CI"
                                                                data-kt-select2-country="assets/media/flags/ivory-coast.svg">
                                                                Côte d'Ivoire</option>
                                                            <option value="HR"
                                                                data-kt-select2-country="assets/media/flags/croatia.svg">
                                                                Croatia</option>
                                                            <option value="CU"
                                                                data-kt-select2-country="assets/media/flags/cuba.svg">
                                                                Cuba</option>
                                                            <option value="CW"
                                                                data-kt-select2-country="assets/media/flags/curacao.svg">
                                                                Curaçao</option>
                                                            <option value="CZ"
                                                                data-kt-select2-country="assets/media/flags/czech-republic.svg">
                                                                Czech Republic</option>
                                                            <option value="DK"
                                                                data-kt-select2-country="assets/media/flags/denmark.svg">
                                                                Denmark</option>
                                                            <option value="DJ"
                                                                data-kt-select2-country="assets/media/flags/djibouti.svg">
                                                                Djibouti</option>
                                                            <option value="DM"
                                                                data-kt-select2-country="assets/media/flags/dominica.svg">
                                                                Dominica</option>
                                                            <option value="DO"
                                                                data-kt-select2-country="assets/media/flags/dominican-republic.svg">
                                                                Dominican Republic</option>
                                                            <option value="EC"
                                                                data-kt-select2-country="assets/media/flags/ecuador.svg">
                                                                Ecuador</option>
                                                            <option value="EG"
                                                                data-kt-select2-country="assets/media/flags/egypt.svg">
                                                                Egypt</option>
                                                            <option value="SV"
                                                                data-kt-select2-country="assets/media/flags/el-salvador.svg">
                                                                El Salvador</option>
                                                            <option value="GQ"
                                                                data-kt-select2-country="assets/media/flags/equatorial-guinea.svg">
                                                                Equatorial Guinea</option>
                                                            <option value="ER"
                                                                data-kt-select2-country="assets/media/flags/eritrea.svg">
                                                                Eritrea</option>
                                                            <option value="EE"
                                                                data-kt-select2-country="assets/media/flags/estonia.svg">
                                                                Estonia</option>
                                                            <option value="ET"
                                                                data-kt-select2-country="assets/media/flags/ethiopia.svg">
                                                                Ethiopia</option>
                                                            <option value="FK"
                                                                data-kt-select2-country="assets/media/flags/falkland-islands.svg">
                                                                Falkland Islands (Malvinas)</option>
                                                            <option value="FJ"
                                                                data-kt-select2-country="assets/media/flags/fiji.svg">
                                                                Fiji</option>
                                                            <option value="FI"
                                                                data-kt-select2-country="assets/media/flags/finland.svg">
                                                                Finland</option>
                                                            <option value="FR"
                                                                data-kt-select2-country="assets/media/flags/france.svg">
                                                                France</option>
                                                            <option value="PF"
                                                                data-kt-select2-country="assets/media/flags/french-polynesia.svg">
                                                                French Polynesia</option>
                                                            <option value="GA"
                                                                data-kt-select2-country="assets/media/flags/gabon.svg">
                                                                Gabon</option>
                                                            <option value="GM"
                                                                data-kt-select2-country="assets/media/flags/gambia.svg">
                                                                Gambia</option>
                                                            <option value="GE"
                                                                data-kt-select2-country="assets/media/flags/georgia.svg">
                                                                Georgia</option>
                                                            <option value="DE"
                                                                data-kt-select2-country="assets/media/flags/germany.svg">
                                                                Germany</option>
                                                            <option value="GH"
                                                                data-kt-select2-country="assets/media/flags/ghana.svg">
                                                                Ghana</option>
                                                            <option value="GI"
                                                                data-kt-select2-country="assets/media/flags/gibraltar.svg">
                                                                Gibraltar</option>
                                                            <option value="GR"
                                                                data-kt-select2-country="assets/media/flags/greece.svg">
                                                                Greece</option>
                                                            <option value="GL"
                                                                data-kt-select2-country="assets/media/flags/greenland.svg">
                                                                Greenland</option>
                                                            <option value="GD"
                                                                data-kt-select2-country="assets/media/flags/grenada.svg">
                                                                Grenada</option>
                                                            <option value="GU"
                                                                data-kt-select2-country="assets/media/flags/guam.svg">
                                                                Guam</option>
                                                            <option value="GT"
                                                                data-kt-select2-country="assets/media/flags/guatemala.svg">
                                                                Guatemala</option>
                                                            <option value="GG"
                                                                data-kt-select2-country="assets/media/flags/guernsey.svg">
                                                                Guernsey</option>
                                                            <option value="GN"
                                                                data-kt-select2-country="assets/media/flags/guinea.svg">
                                                                Guinea</option>
                                                            <option value="GW"
                                                                data-kt-select2-country="assets/media/flags/guinea-bissau.svg">
                                                                Guinea-Bissau</option>
                                                            <option value="HT"
                                                                data-kt-select2-country="assets/media/flags/haiti.svg">
                                                                Haiti</option>
                                                            <option value="VA"
                                                                data-kt-select2-country="assets/media/flags/vatican-city.svg">
                                                                Holy See (Vatican City State)</option>
                                                            <option value="HN"
                                                                data-kt-select2-country="assets/media/flags/honduras.svg">
                                                                Honduras</option>
                                                            <option value="HK"
                                                                data-kt-select2-country="assets/media/flags/hong-kong.svg">
                                                                Hong Kong</option>
                                                            <option value="HU"
                                                                data-kt-select2-country="assets/media/flags/hungary.svg">
                                                                Hungary</option>
                                                            <option value="IS"
                                                                data-kt-select2-country="assets/media/flags/iceland.svg">
                                                                Iceland</option>
                                                            <option value="IN"
                                                                data-kt-select2-country="assets/media/flags/india.svg">
                                                                India</option>
                                                            <option value="ID"
                                                                data-kt-select2-country="assets/media/flags/indonesia.svg">
                                                                Indonesia</option>
                                                            <option value="IR"
                                                                data-kt-select2-country="assets/media/flags/iran.svg">
                                                                Iran, Islamic Republic of</option>
                                                            <option value="IQ"
                                                                data-kt-select2-country="assets/media/flags/iraq.svg">
                                                                Iraq</option>
                                                            <option value="IE"
                                                                data-kt-select2-country="assets/media/flags/ireland.svg">
                                                                Ireland</option>
                                                            <option value="IM"
                                                                data-kt-select2-country="assets/media/flags/isle-of-man.svg">
                                                                Isle of Man</option>
                                                            <option value="IL"
                                                                data-kt-select2-country="assets/media/flags/israel.svg">
                                                                Israel</option>
                                                            <option value="IT"
                                                                data-kt-select2-country="assets/media/flags/italy.svg">
                                                                Italy</option>
                                                            <option value="JM"
                                                                data-kt-select2-country="assets/media/flags/jamaica.svg">
                                                                Jamaica</option>
                                                            <option value="JP"
                                                                data-kt-select2-country="assets/media/flags/japan.svg">
                                                                Japan</option>
                                                            <option value="JE"
                                                                data-kt-select2-country="assets/media/flags/jersey.svg">
                                                                Jersey</option>
                                                            <option value="JO"
                                                                data-kt-select2-country="assets/media/flags/jordan.svg">
                                                                Jordan</option>
                                                            <option value="KZ"
                                                                data-kt-select2-country="assets/media/flags/kazakhstan.svg">
                                                                Kazakhstan</option>
                                                            <option value="KE"
                                                                data-kt-select2-country="assets/media/flags/kenya.svg">
                                                                Kenya</option>
                                                            <option value="KI"
                                                                data-kt-select2-country="assets/media/flags/kiribati.svg">
                                                                Kiribati</option>
                                                            <option value="KP"
                                                                data-kt-select2-country="assets/media/flags/north-korea.svg">
                                                                Korea, Democratic People's Republic of</option>
                                                            <option value="KW"
                                                                data-kt-select2-country="assets/media/flags/kuwait.svg">
                                                                Kuwait</option>
                                                            <option value="KG"
                                                                data-kt-select2-country="assets/media/flags/kyrgyzstan.svg">
                                                                Kyrgyzstan</option>
                                                            <option value="LA"
                                                                data-kt-select2-country="assets/media/flags/laos.svg">
                                                                Lao People's Democratic Republic</option>
                                                            <option value="LV"
                                                                data-kt-select2-country="assets/media/flags/latvia.svg">
                                                                Latvia</option>
                                                            <option value="LB"
                                                                data-kt-select2-country="assets/media/flags/lebanon.svg">
                                                                Lebanon</option>
                                                            <option value="LS"
                                                                data-kt-select2-country="assets/media/flags/lesotho.svg">
                                                                Lesotho</option>
                                                            <option value="LR"
                                                                data-kt-select2-country="assets/media/flags/liberia.svg">
                                                                Liberia</option>
                                                            <option value="LY"
                                                                data-kt-select2-country="assets/media/flags/libya.svg">
                                                                Libya</option>
                                                            <option value="LI"
                                                                data-kt-select2-country="assets/media/flags/liechtenstein.svg">
                                                                Liechtenstein</option>
                                                            <option value="LT"
                                                                data-kt-select2-country="assets/media/flags/lithuania.svg">
                                                                Lithuania</option>
                                                            <option value="LU"
                                                                data-kt-select2-country="assets/media/flags/luxembourg.svg">
                                                                Luxembourg</option>
                                                            <option value="MO"
                                                                data-kt-select2-country="assets/media/flags/macao.svg">
                                                                Macao</option>
                                                            <option value="MG"
                                                                data-kt-select2-country="assets/media/flags/madagascar.svg">
                                                                Madagascar</option>
                                                            <option value="MW"
                                                                data-kt-select2-country="assets/media/flags/malawi.svg">
                                                                Malawi</option>
                                                            <option value="MY"
                                                                data-kt-select2-country="assets/media/flags/malaysia.svg">
                                                                Malaysia</option>
                                                            <option value="MV"
                                                                data-kt-select2-country="assets/media/flags/maldives.svg">
                                                                Maldives</option>
                                                            <option value="ML"
                                                                data-kt-select2-country="assets/media/flags/mali.svg">
                                                                Mali</option>
                                                            <option value="MT"
                                                                data-kt-select2-country="assets/media/flags/malta.svg">
                                                                Malta</option>
                                                            <option value="MH"
                                                                data-kt-select2-country="assets/media/flags/marshall-island.svg">
                                                                Marshall Islands</option>
                                                            <option value="MQ"
                                                                data-kt-select2-country="assets/media/flags/martinique.svg">
                                                                Martinique</option>
                                                            <option value="MR"
                                                                data-kt-select2-country="assets/media/flags/mauritania.svg">
                                                                Mauritania</option>
                                                            <option value="MU"
                                                                data-kt-select2-country="assets/media/flags/mauritius.svg">
                                                                Mauritius</option>
                                                            <option value="MX"
                                                                data-kt-select2-country="assets/media/flags/mexico.svg">
                                                                Mexico</option>
                                                            <option value="FM"
                                                                data-kt-select2-country="assets/media/flags/micronesia.svg">
                                                                Micronesia, Federated States of</option>
                                                            <option value="MD"
                                                                data-kt-select2-country="assets/media/flags/moldova.svg">
                                                                Moldova, Republic of</option>
                                                            <option value="MC"
                                                                data-kt-select2-country="assets/media/flags/monaco.svg">
                                                                Monaco</option>
                                                            <option value="MN"
                                                                data-kt-select2-country="assets/media/flags/mongolia.svg">
                                                                Mongolia</option>
                                                            <option value="ME"
                                                                data-kt-select2-country="assets/media/flags/montenegro.svg">
                                                                Montenegro</option>
                                                            <option value="MS"
                                                                data-kt-select2-country="assets/media/flags/montserrat.svg">
                                                                Montserrat</option>
                                                            <option value="MA"
                                                                data-kt-select2-country="assets/media/flags/morocco.svg">
                                                                Morocco</option>
                                                            <option value="MZ"
                                                                data-kt-select2-country="assets/media/flags/mozambique.svg">
                                                                Mozambique</option>
                                                            <option value="MM"
                                                                data-kt-select2-country="assets/media/flags/myanmar.svg">
                                                                Myanmar</option>
                                                            <option value="NA"
                                                                data-kt-select2-country="assets/media/flags/namibia.svg">
                                                                Namibia</option>
                                                            <option value="NR"
                                                                data-kt-select2-country="assets/media/flags/nauru.svg">
                                                                Nauru</option>
                                                            <option value="NP"
                                                                data-kt-select2-country="assets/media/flags/nepal.svg">
                                                                Nepal</option>
                                                            <option value="NL"
                                                                data-kt-select2-country="assets/media/flags/netherlands.svg">
                                                                Netherlands</option>
                                                            <option value="NZ"
                                                                data-kt-select2-country="assets/media/flags/new-zealand.svg">
                                                                New Zealand</option>
                                                            <option value="NI"
                                                                data-kt-select2-country="assets/media/flags/nicaragua.svg">
                                                                Nicaragua</option>
                                                            <option value="NE"
                                                                data-kt-select2-country="assets/media/flags/niger.svg">
                                                                Niger</option>
                                                            <option value="NG"
                                                                data-kt-select2-country="assets/media/flags/nigeria.svg">
                                                                Nigeria</option>
                                                            <option value="NU"
                                                                data-kt-select2-country="assets/media/flags/niue.svg">
                                                                Niue</option>
                                                            <option value="NF"
                                                                data-kt-select2-country="assets/media/flags/norfolk-island.svg">
                                                                Norfolk Island</option>
                                                            <option value="MP"
                                                                data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg">
                                                                Northern Mariana Islands</option>
                                                            <option value="NO"
                                                                data-kt-select2-country="assets/media/flags/norway.svg">
                                                                Norway</option>
                                                            <option value="OM"
                                                                data-kt-select2-country="assets/media/flags/oman.svg">
                                                                Oman</option>
                                                            <option value="PK"
                                                                data-kt-select2-country="assets/media/flags/pakistan.svg">
                                                                Pakistan</option>
                                                            <option value="PW"
                                                                data-kt-select2-country="assets/media/flags/palau.svg">
                                                                Palau</option>
                                                            <option value="PS"
                                                                data-kt-select2-country="assets/media/flags/palestine.svg">
                                                                Palestinian Territory, Occupied</option>
                                                            <option value="PA"
                                                                data-kt-select2-country="assets/media/flags/panama.svg">
                                                                Panama</option>
                                                            <option value="PG"
                                                                data-kt-select2-country="assets/media/flags/papua-new-guinea.svg">
                                                                Papua New Guinea</option>
                                                            <option value="PY"
                                                                data-kt-select2-country="assets/media/flags/paraguay.svg">
                                                                Paraguay</option>
                                                            <option value="PE"
                                                                data-kt-select2-country="assets/media/flags/peru.svg">
                                                                Peru</option>
                                                            <option value="PH"
                                                                data-kt-select2-country="assets/media/flags/philippines.svg">
                                                                Philippines</option>
                                                            <option value="PL"
                                                                data-kt-select2-country="assets/media/flags/poland.svg">
                                                                Poland</option>
                                                            <option value="PT"
                                                                data-kt-select2-country="assets/media/flags/portugal.svg">
                                                                Portugal</option>
                                                            <option value="PR"
                                                                data-kt-select2-country="assets/media/flags/puerto-rico.svg">
                                                                Puerto Rico</option>
                                                            <option value="QA"
                                                                data-kt-select2-country="assets/media/flags/qatar.svg">
                                                                Qatar</option>
                                                            <option value="RO"
                                                                data-kt-select2-country="assets/media/flags/romania.svg">
                                                                Romania</option>
                                                            <option value="RU"
                                                                data-kt-select2-country="assets/media/flags/russia.svg">
                                                                Russian Federation</option>
                                                            <option value="RW"
                                                                data-kt-select2-country="assets/media/flags/rwanda.svg">
                                                                Rwanda</option>
                                                            <option value="BL"
                                                                data-kt-select2-country="assets/media/flags/st-barts.svg">
                                                                Saint Barthélemy</option>
                                                            <option value="KN"
                                                                data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg">
                                                                Saint Kitts and Nevis</option>
                                                            <option value="LC"
                                                                data-kt-select2-country="assets/media/flags/st-lucia.svg">
                                                                Saint Lucia</option>
                                                            <option value="MF"
                                                                data-kt-select2-country="assets/media/flags/sint-maarten.svg">
                                                                Saint Martin (French part)</option>
                                                            <option value="VC"
                                                                data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg">
                                                                Saint Vincent and the Grenadines</option>
                                                            <option value="WS"
                                                                data-kt-select2-country="assets/media/flags/samoa.svg">
                                                                Samoa</option>
                                                            <option value="SM"
                                                                data-kt-select2-country="assets/media/flags/san-marino.svg">
                                                                San Marino</option>
                                                            <option value="ST"
                                                                data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg">
                                                                Sao Tome and Principe</option>
                                                            <option value="SA"
                                                                data-kt-select2-country="assets/media/flags/saudi-arabia.svg">
                                                                Saudi Arabia</option>
                                                            <option value="SN"
                                                                data-kt-select2-country="assets/media/flags/senegal.svg">
                                                                Senegal</option>
                                                            <option value="RS"
                                                                data-kt-select2-country="assets/media/flags/serbia.svg">
                                                                Serbia</option>
                                                            <option value="SC"
                                                                data-kt-select2-country="assets/media/flags/seychelles.svg">
                                                                Seychelles</option>
                                                            <option value="SL"
                                                                data-kt-select2-country="assets/media/flags/sierra-leone.svg">
                                                                Sierra Leone</option>
                                                            <option value="SG"
                                                                data-kt-select2-country="assets/media/flags/singapore.svg">
                                                                Singapore</option>
                                                            <option value="SX"
                                                                data-kt-select2-country="assets/media/flags/sint-maarten.svg">
                                                                Sint Maarten (Dutch part)</option>
                                                            <option value="SK"
                                                                data-kt-select2-country="assets/media/flags/slovakia.svg">
                                                                Slovakia</option>
                                                            <option value="SI"
                                                                data-kt-select2-country="assets/media/flags/slovenia.svg">
                                                                Slovenia</option>
                                                            <option value="SB"
                                                                data-kt-select2-country="assets/media/flags/solomon-islands.svg">
                                                                Solomon Islands</option>
                                                            <option value="SO"
                                                                data-kt-select2-country="assets/media/flags/somalia.svg">
                                                                Somalia</option>
                                                            <option value="ZA"
                                                                data-kt-select2-country="assets/media/flags/south-africa.svg">
                                                                South Africa</option>
                                                            <option value="KR"
                                                                data-kt-select2-country="assets/media/flags/south-korea.svg">
                                                                South Korea</option>
                                                            <option value="SS"
                                                                data-kt-select2-country="assets/media/flags/south-sudan.svg">
                                                                South Sudan</option>
                                                            <option value="ES"
                                                                data-kt-select2-country="assets/media/flags/spain.svg">
                                                                Spain</option>
                                                            <option value="LK"
                                                                data-kt-select2-country="assets/media/flags/sri-lanka.svg">
                                                                Sri Lanka</option>
                                                            <option value="SD"
                                                                data-kt-select2-country="assets/media/flags/sudan.svg">
                                                                Sudan</option>
                                                            <option value="SR"
                                                                data-kt-select2-country="assets/media/flags/suriname.svg">
                                                                Suriname</option>
                                                            <option value="SZ"
                                                                data-kt-select2-country="assets/media/flags/swaziland.svg">
                                                                Swaziland</option>
                                                            <option value="SE"
                                                                data-kt-select2-country="assets/media/flags/sweden.svg">
                                                                Sweden</option>
                                                            <option value="CH"
                                                                data-kt-select2-country="assets/media/flags/switzerland.svg">
                                                                Switzerland</option>
                                                            <option value="SY"
                                                                data-kt-select2-country="assets/media/flags/syria.svg">
                                                                Syrian Arab Republic</option>
                                                            <option value="TW"
                                                                data-kt-select2-country="assets/media/flags/taiwan.svg">
                                                                Taiwan, Province of China</option>
                                                            <option value="TJ"
                                                                data-kt-select2-country="assets/media/flags/tajikistan.svg">
                                                                Tajikistan</option>
                                                            <option value="TZ"
                                                                data-kt-select2-country="assets/media/flags/tanzania.svg">
                                                                Tanzania, United Republic of</option>
                                                            <option value="TH"
                                                                data-kt-select2-country="assets/media/flags/thailand.svg">
                                                                Thailand</option>
                                                            <option value="TG"
                                                                data-kt-select2-country="assets/media/flags/togo.svg">
                                                                Togo</option>
                                                            <option value="TK"
                                                                data-kt-select2-country="assets/media/flags/tokelau.svg">
                                                                Tokelau</option>
                                                            <option value="TO"
                                                                data-kt-select2-country="assets/media/flags/tonga.svg">
                                                                Tonga</option>
                                                            <option value="TT"
                                                                data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg">
                                                                Trinidad and Tobago</option>
                                                            <option value="TN"
                                                                data-kt-select2-country="assets/media/flags/tunisia.svg">
                                                                Tunisia</option>
                                                            <option value="TR"
                                                                data-kt-select2-country="assets/media/flags/turkey.svg">
                                                                Turkey</option>
                                                            <option value="TM"
                                                                data-kt-select2-country="assets/media/flags/turkmenistan.svg">
                                                                Turkmenistan</option>
                                                            <option value="TC"
                                                                data-kt-select2-country="assets/media/flags/turks-and-caicos.svg">
                                                                Turks and Caicos Islands</option>
                                                            <option value="TV"
                                                                data-kt-select2-country="assets/media/flags/tuvalu.svg">
                                                                Tuvalu</option>
                                                            <option value="UG"
                                                                data-kt-select2-country="assets/media/flags/uganda.svg">
                                                                Uganda</option>
                                                            <option value="UA"
                                                                data-kt-select2-country="assets/media/flags/ukraine.svg">
                                                                Ukraine</option>
                                                            <option value="AE"
                                                                data-kt-select2-country="assets/media/flags/united-arab-emirates.svg">
                                                                United Arab Emirates</option>
                                                            <option value="GB"
                                                                data-kt-select2-country="assets/media/flags/united-kingdom.svg">
                                                                United Kingdom</option>
                                                            <option value="US"
                                                                data-kt-select2-country="assets/media/flags/united-states.svg">
                                                                United States</option>
                                                            <option value="UY"
                                                                data-kt-select2-country="assets/media/flags/uruguay.svg">
                                                                Uruguay</option>
                                                            <option value="UZ"
                                                                data-kt-select2-country="assets/media/flags/uzbekistan.svg">
                                                                Uzbekistan</option>
                                                            <option value="VU"
                                                                data-kt-select2-country="assets/media/flags/vanuatu.svg">
                                                                Vanuatu</option>
                                                            <option value="VE"
                                                                data-kt-select2-country="assets/media/flags/venezuela.svg">
                                                                Venezuela, Bolivarian Republic of</option>
                                                            <option value="VN"
                                                                data-kt-select2-country="assets/media/flags/vietnam.svg">
                                                                Vietnam</option>
                                                            <option value="VI"
                                                                data-kt-select2-country="assets/media/flags/virgin-islands.svg">
                                                                Virgin Islands</option>
                                                            <option value="YE"
                                                                data-kt-select2-country="assets/media/flags/yemen.svg">
                                                                Yemen</option>
                                                            <option value="ZM"
                                                                data-kt-select2-country="assets/media/flags/zambia.svg">
                                                                Zambia</option>
                                                            <option value="ZW"
                                                                data-kt-select2-country="assets/media/flags/zimbabwe.svg">
                                                                Zimbabwe</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-136-cism"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-kt_ecommerce_localization_country-container"
                                                                    aria-controls="select2-kt_ecommerce_localization_country-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-kt_ecommerce_localization_country-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Select a country"><span
                                                                            class="select2-selection__placeholder">Select
                                                                            a country</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                        <label for="kt_ecommerce_localization_country">Select a
                                                            country</label>
                                                    </div>

                                                </div>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Language</span>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">

                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        name="localization_language" data-control="select2"
                                                        data-placeholder="Select a language"
                                                        data-select2-id="select2-data-16-lixp" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option data-select2-id="select2-data-18-ir24"></option>
                                                        <option value="id">Bahasa Indonesia - Indonesian</option>
                                                        <option value="msa">Bahasa Melayu - Malay</option>
                                                        <option value="ca">Català - Catalan</option>
                                                        <option value="cs">Čeština - Czech</option>
                                                        <option value="da">Dansk - Danish</option>
                                                        <option value="de">Deutsch - German</option>
                                                        <option value="en">English</option>
                                                        <option value="en-gb">English UK - British English</option>
                                                        <option value="es">Español - Spanish</option>
                                                        <option value="fil">Filipino</option>
                                                        <option value="fr">Français - French</option>
                                                        <option value="ga">Gaeilge - Irish (beta)</option>
                                                        <option value="gl">Galego - Galician (beta)</option>
                                                        <option value="hr">Hrvatski - Croatian</option>
                                                        <option value="it">Italiano - Italian</option>
                                                        <option value="hu">Magyar - Hungarian</option>
                                                        <option value="nl">Nederlands - Dutch</option>
                                                        <option value="no">Norsk - Norwegian</option>
                                                        <option value="pl">Polski - Polish</option>
                                                        <option value="pt">Português - Portuguese</option>
                                                        <option value="ro">Română - Romanian</option>
                                                        <option value="sk">Slovenčina - Slovak</option>
                                                        <option value="fi">Suomi - Finnish</option>
                                                        <option value="sv">Svenska - Swedish</option>
                                                        <option value="vi">Tiếng Việt - Vietnamese</option>
                                                        <option value="tr">Türkçe - Turkish</option>
                                                        <option value="el">Ελληνικά - Greek</option>
                                                        <option value="bg">Български език - Bulgarian</option>
                                                        <option value="ru">Русский - Russian</option>
                                                        <option value="sr">Српски - Serbian</option>
                                                        <option value="uk">Українська мова - Ukrainian</option>
                                                        <option value="he">עִבְרִית - Hebrew</option>
                                                        <option value="ur">اردو - Urdu (beta)</option>
                                                        <option value="ar">العربية - Arabic</option>
                                                        <option value="fa">فارسی - Persian</option>
                                                        <option value="mr">मराठी - Marathi</option>
                                                        <option value="hi">हिन्दी - Hindi</option>
                                                        <option value="bn">বাংলা - Bangla</option>
                                                        <option value="gu">ગુજરાતી - Gujarati</option>
                                                        <option value="ta">தமிழ் - Tamil</option>
                                                        <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                        <option value="th">ภาษาไทย - Thai</option>
                                                        <option value="ko">한국어 - Korean</option>
                                                        <option value="ja">日本語 - Japanese</option>
                                                        <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                                        <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-17-0jok"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-localization_language-qr-container"
                                                                aria-controls="select2-localization_language-qr-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-localization_language-qr-container"
                                                                    role="textbox" aria-readonly="true"
                                                                    title="Select a language"><span
                                                                        class="select2-selection__placeholder">Select
                                                                        a
                                                                        language</span></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>

                                                </div>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Currency</span>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">

                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        name="localization_currency" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Select a currency"
                                                        data-select2-id="select2-data-19-6fxy" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option data-select2-id="select2-data-21-xftc"></option>
                                                        <option value="USD">US Dollar</option>
                                                        <option value="Euro">Euro</option>
                                                        <option value="Pound">Pound</option>
                                                        <option value="AUD">Australian Dollar</option>
                                                        <option value="JPY">Japanese Yen</option>
                                                        <option value="KRW">Korean Won</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-20-8agd"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-localization_currency-c8-container"
                                                                aria-controls="select2-localization_currency-c8-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-localization_currency-c8-container"
                                                                    role="textbox" aria-readonly="true"
                                                                    title="Select a currency"><span
                                                                        class="select2-selection__placeholder">Select
                                                                        a
                                                                        currency</span></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>

                                                </div>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Length Class</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set the unit measurement for length."
                                                        aria-label="Set the unit measurement for length."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">

                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        name="localization_currency" data-control="select2"
                                                        data-hide-search="true"
                                                        data-placeholder="Select a length class"
                                                        data-select2-id="select2-data-22-lwjg" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option></option>
                                                        <option value="cm" selected="selected"
                                                            data-select2-id="select2-data-24-232i">Centimeter</option>
                                                        <option value="mm">Milimeter</option>
                                                        <option value="in">Inch</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-23-stoe"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-localization_currency-ll-container"
                                                                aria-controls="select2-localization_currency-ll-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-localization_currency-ll-container"
                                                                    role="textbox" aria-readonly="true"
                                                                    title="Centimeter">Centimeter</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span>

                                                </div>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Weight Class</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set the unit measurement for weight."
                                                        aria-label="Set the unit measurement for weight."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="w-100">

                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        name="localization_currency" data-control="select2"
                                                        data-hide-search="true"
                                                        data-placeholder="Select a weight class"
                                                        data-select2-id="select2-data-25-urbb" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option></option>
                                                        <option value="kg" selected="selected"
                                                            data-select2-id="select2-data-27-bn70">Kilogram</option>
                                                        <option value="g">Gram</option>
                                                        <option value="lb">Pound</option>
                                                        <option value="oz">Ounce</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-26-ujng"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-localization_currency-fy-container"
                                                                aria-controls="select2-localization_currency-fy-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-localization_currency-fy-container"
                                                                    role="textbox" aria-readonly="true"
                                                                    title="Kilogram">Kilogram</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span>

                                                </div>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
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
                                    </form>

                                </div>

                            </div>

                        </div>


                        <div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">

                            <div class="card card-flush mb-5 mb-xl-8">

                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                    <div class="card-title">

                                        <h2>Cateogries</h2>

                                    </div>

                                </div>


                                <div class="card-body pt-0">

                                    <form id="kt_ecommerce_settings_general_products"
                                        class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">

                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Category Product Count</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Show the number of products inside the subcategories in the storefront header category menu. Be warned, this will cause an extreme performance hit for stores with a lot of subcategories!"
                                                        aria-label="Show the number of products inside the subcategories in the storefront header category menu. Be warned, this will cause an extreme performance hit for stores with a lot of subcategories!"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex mt-3">

                                                    <div class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="category_product_count"
                                                            id="category_product_count_yes" checked="checked">
                                                        <label class="form-check-label"
                                                            for="category_product_count_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="category_product_count"
                                                            id="category_product_count_no">
                                                        <label class="form-check-label"
                                                            for="category_product_count_no">No</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Default Items Per Page</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Determines how many items are shown per page"
                                                        aria-label="Determines how many items are shown per page"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="products_items_per_page" value="10">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>

                                        <div class="separator my-5"></div>
                                        <h2 class="mb-5">Reviews</h2>

                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Allow Reviews</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Enable/disable review entries for registered customers"
                                                        aria-label="Enable/disable review entries for registered customers"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex mt-3">

                                                    <div class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="allow_reviews"
                                                            id="allow_reviews_yes" checked="checked">
                                                        <label class="form-check-label"
                                                            for="allow_reviews_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="allow_reviews"
                                                            id="allow_reviews_no">
                                                        <label class="form-check-label"
                                                            for="allow_reviews_no">No</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Allow Guest Reviews</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Enable/disable review entries for public guest customers"
                                                        aria-label="Enable/disable review entries for public guest customers"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex mt-3">

                                                    <div class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="allow_guest_reviews"
                                                            id="allow_guest_reviews_yes">
                                                        <label class="form-check-label"
                                                            for="allow_guest_reviews_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="allow_guest_reviews"
                                                            id="allow_guest_reviews_no" checked="checked">
                                                        <label class="form-check-label"
                                                            for="allow_guest_reviews_no">No</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="separator my-5"></div>
                                        <h2 class="mb-5">Vouchers</h2>

                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Minimum Vouchers</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Minimum number of vouchers customers can attach to an order"
                                                        aria-label="Minimum number of vouchers customers can attach to an order"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="products_min_voucher" value="1">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Maximum Vouchers</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Maximum number of vouchers customers can attach to an order"
                                                        aria-label="Maximum number of vouchers customers can attach to an order"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="products_max_voucher" value="10">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>

                                        <div class="separator my-5"></div>
                                        <h2 class="mb-5">Tax</h2>

                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Display Prices with Tax</span>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex mt-3">

                                                    <div class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="product_tax" id="product_tax_yes"
                                                            checked="checked">
                                                        <label class="form-check-label"
                                                            for="product_tax_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="product_tax" id="product_tax_no">
                                                        <label class="form-check-label"
                                                            for="product_tax_no">No</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Default Tax Rate</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Determines the tax percentage (%) applied to orders"
                                                        aria-label="Determines the tax percentage (%) applied to orders"></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="products_tax_rate" value="15%">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
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
                                    </form>

                                </div>

                            </div>

                        </div>


                        <div class="tab-pane fade" id="kt_ecommerce_settings_customers" role="tabpanel">

                            <div class="card card-flush">

                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                    <div class="card-title">

                                        <h2>Customers</h2>

                                    </div>

                                </div>


                                <div class="card-body pt-0">

                                    <form id="kt_ecommerce_settings_general_customers"
                                        class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">

                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Customers Online</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Enable/disable tracking customers online status."
                                                        aria-label="Enable/disable tracking customers online status."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex mt-3">

                                                    <div class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_online"
                                                            id="customers_online_yes" checked="checked">
                                                        <label class="form-check-label"
                                                            for="customers_online_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_online"
                                                            id="customers_online_no">
                                                        <label class="form-check-label"
                                                            for="customers_online_no">No</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Customers Activity</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Enable/disable tracking customers activity."
                                                        aria-label="Enable/disable tracking customers activity."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex mt-3">

                                                    <div class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_activity"
                                                            id="customers_activity_yes" checked="checked">
                                                        <label class="form-check-label"
                                                            for="customers_activity_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_activity"
                                                            id="customers_activity_no">
                                                        <label class="form-check-label"
                                                            for="customers_activity_no">No</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Customer Searches</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Enable/disable logging customers search keywords."
                                                        aria-label="Enable/disable logging customers search keywords."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex mt-3">

                                                    <div class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_searches"
                                                            id="customers_searches_yes" checked="checked">
                                                        <label class="form-check-label"
                                                            for="customers_searches_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_searches"
                                                            id="customers_searches_no">
                                                        <label class="form-check-label"
                                                            for="customers_searches_no">No</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Allow Guest Checkout</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Enable/disable guest customers to checkout."
                                                        aria-label="Enable/disable guest customers to checkout."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex mt-3">

                                                    <div class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_guest_checkout"
                                                            id="customers_guest_checkout_yes">
                                                        <label class="form-check-label"
                                                            for="customers_guest_checkout_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_guest_checkout"
                                                            id="customers_guest_checkout_no" checked="checked">
                                                        <label class="form-check-label"
                                                            for="customers_guest_checkout_no">No</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Login Display Prices</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Only show prices when customers log in."
                                                        aria-label="Only show prices when customers log in."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex mt-3">

                                                    <div class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_login_prices"
                                                            id="customers_login_prices_yes">
                                                        <label class="form-check-label"
                                                            for="customers_login_prices_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            value="" name="customers_login_prices"
                                                            id="customers_login_prices_no" checked="checked">
                                                        <label class="form-check-label"
                                                            for="customers_login_prices_no">No</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                                            <div class="col-md-3 text-md-end">

                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span class="required">Max Login Attempts</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Set the max number of login attempts before the customer account is locked for 1 hour."
                                                        aria-label="Set the max number of login attempts before the customer account is locked for 1 hour."></i>
                                                </label>

                                            </div>
                                            <div class="col-md-9">

                                                <input type="text" class="form-control form-control-solid"
                                                    name="customer_login_attempts" value="">

                                                <div class="fv-plugins-message-container invalid-feedback"></div>
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
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</x-admin-app-layout>
<!--
<form class="form" action="{{ route('admin.settings.updateOrCreate') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="card-body">

        @if (session('success'))
<div class="alert alert-success">
                {{ session('success') }}
            </div>
@endif

        @if (session('error'))
<div class="alert alert-danger">
                {{ session('error') }}
            </div>
@endif


        <div class="row">
            <div class="col-lg-4 mb-7">
                <x-metronic.label for="site_name" class="col-form-label fw-bold fs-6 ">{{ __('Site Name') }}
                </x-metronic.label>

                <x-metronic.input id="site_name" type="text" name="site_name" :value="old('site_name', optional($setting->first())->site_name)"
                    placeholder="Enter the Site Name"></x-metronic.input>
            </div>

            <div class="col-lg-4 mb-7">
                <x-metronic.label for="site_logo" class="col-form-label fw-bold fs-6 ">{{ __('Site Logo') }}
                </x-metronic.label>

                <x-metronic.input id="site_logo" type="file" name="site_logo"
                    :value="old('site_logo', optional($setting->first())->site_logo)"></x-metronic.input>
            </div>
            <div class="col-lg-4 mb-7">
                <x-metronic.label for="site_favicon" class="col-form-label fw-bold fs-6 ">{{ __('Site Logo') }}
                </x-metronic.label>

                <x-metronic.input id="site_favicon" type="file" name="site_favicon"
                    :value="old('site_favicon', optional($setting->first())->site_favicon)"></x-metronic.input>
            </div>

            <div class="col-lg-3 mb-7">
                <x-metronic.label for="email" class="col-form-label fw-bold fs-6 ">{{ __('Email') }}
                </x-metronic.label>

                <x-metronic.input id="email" type="email" name="email" :value="old('email', optional($setting->first())->email)"
                    placeholder="Enter the email address"></x-metronic.input>
            </div>

            <div class="col-lg-3 mb-7">
                <x-metronic.label for="phone" class="col-form-label fw-bold fs-6 ">{{ __('Phone') }}
                </x-metronic.label>

                <x-metronic.input id="phone" type="number" name="phone" :value="old('phone', optional($setting->first())->phone)"
                    placeholder="Enter the Phone"></x-metronic.input>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-7">
                <x-metronic.label for="address" class="col-form-label fw-bold fs-6 ">{{ __('Address') }}
                </x-metronic.label>

                <x-metronic.input id="address" type="text" name="address" :value="old('address', optional($setting->first())->address)"
                    placeholder="Enter the Phone"></x-metronic.input>
            </div>

            <div class="col-lg-5 mb-7">
                <x-metronic.label for="seo_keywords" class="col-form-label fw-bold fs-6 ">{{ __('Seo Keyword') }}
                </x-metronic.label>

                <x-metronic.input id="seo_keywords" type="text" name="seo_keywords" :value="old('seo_keywords', optional($setting->first())->seo_keywords)"
                    placeholder="Enter the Seo Keyword"></x-metronic.input>
            </div>

            <div class="col-lg-3 mb-7">
                <x-metronic.label for="maintenance_mode" class="col-form-label fw-bold fs-6">
                    {{ __('Select a maintenance mode ') }}</x-metronic.label>
                <x-metronic.select-option id="maintenance_mode" name="maintenance_mode" data-hide-search="true"
                    data-placeholder="Select an option">
                    <option></option>
                    <option value="1"
                        {{ optional($setting->first())->maintenance_mode == 1 ? 'selected' : '' }}>Active
                    </option>
                    <option value="0"
                        {{ optional($setting->first())->maintenance_mode == 0 ? 'selected' : '' }}>
                        Inactive</option>
                </x-metronic.select-option>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-7">
                <x-metronic.label for="seo_description"
                    class="col-form-label fw-bold fs-6 ">{{ __('Seo Description') }}
                </x-metronic.label>

                <x-metronic.input id="seo_description" type="text" name="seo_description" :value="old('seo_description', optional($setting->first())->seo_description)"
                    placeholder="Enter the Seo Description"></x-metronic.input>
            </div>

            <div class="col-lg-4 mb-7">
                <x-metronic.label for="social_facebook"
                    class="col-form-label fw-bold fs-6 ">{{ __('Social Facebook') }}
                </x-metronic.label>

                <x-metronic.input id="social_facebook" type="text" name="social_facebook" :value="old('social_facebook', optional($setting->first())->social_facebook)"
                    placeholder="Enter the Facebook Url"></x-metronic.input>
            </div>
            <div class="col-lg-4 mb-7">
                <x-metronic.label for="social_twitter"
                    class="col-form-label fw-bold fs-6 ">{{ __('Social Twitter') }}
                </x-metronic.label>

                <x-metronic.input id="social_twitter" type="text" name="social_twitter" :value="old('social_twitter', optional($setting->first())->social_twitter)"
                    placeholder="Enter the Twitter Url"></x-metronic.input>
            </div>
            <div class="col-lg-4 mb-7">
                <x-metronic.label for="social_instagram"
                    class="col-form-label fw-bold fs-6 ">{{ __('Social Instagram') }}
                </x-metronic.label>

                <x-metronic.input id="social_instagram" type="text" name="social_instagram" :value="old('social_instagram', optional($setting->first())->social_instagram)"
                    placeholder="Enter the Instagram Url"></x-metronic.input>
            </div>
            <div class="col-lg-4 mb-7">
                <x-metronic.label for="social_linkedin"
                    class="col-form-label fw-bold fs-6 ">{{ __('Social Linkedin') }}
                </x-metronic.label>

                <x-metronic.input id="social_linkedin" type="text" name="social_linkedin" :value="old('social_linkedin', optional($setting->first())->social_linkedin)"
                    placeholder="Enter the Linkedin Url"></x-metronic.input>
            </div>
            <div class="col-lg-4 mb-7">
                <x-metronic.label for="social_youtube"
                    class="col-form-label fw-bold fs-6 ">{{ __('Social Youtube') }}
                </x-metronic.label>

                <x-metronic.input id="social_youtube" type="text" name="social_youtube" :value="old('social_youtube', optional($setting->first())->social_youtube)"
                    placeholder="Enter the Youtube Url"></x-metronic.input>
            </div>
        </div>

    </div>
    <div class="card-footer">
        <div class="text-end">
            <x-metronic.button type="submit" class="primary">
                {{ __('Submit') }}
            </x-metronic.button>
        </div>

    </div>
</form>
-->
