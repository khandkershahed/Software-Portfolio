<x-frontend-app-layout :title="'Project'">
    <div class="container-fluid image-overlay-section">
        <div class="row">
            <div class="p-0 col-lg-12 position-relative">
                <img class="w-100 img-fluid"
                    src="{{ asset('frontend/assets/images/templates.jpg') }}" alt=""
                    style="object-fit: cover">

                <!-- Overlay Title -->
                <div class="text-center overlay-title-common">
                    <h1 class="text-white fw-bold">Web Templates</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="py-5">
                    <h1 class="mx-auto text-center w-50">Templates We Offer</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="d-flex justify-content-center">
                    <ul class="custom-tab-nav" id="myTab" role="tablist">
                        <li class="custom-tab-item" role="presentation">
                            <button class="custom-tab-btn active" id="ecommerce-tab" data-bs-toggle="tab"
                                data-bs-target="#ecommerce-tab-pane" type="button" role="tab"
                                aria-controls="ecommerce-tab-pane" aria-selected="true">Ecommerce</button>
                        </li>
                        <li class="custom-tab-item" role="presentation">
                            <button class="custom-tab-btn" id="lms-tab" data-bs-toggle="tab"
                                data-bs-target="#lms-tab-pane" type="button" role="tab"
                                aria-controls="lms-tab-pane" aria-selected="false">LMS System</button>
                        </li>
                        <li class="custom-tab-item" role="presentation">
                            <button class="custom-tab-btn" id="portfolio-tab" data-bs-toggle="tab"
                                data-bs-target="#portfolio-tab-pane" type="button" role="tab"
                                aria-controls="portfolio-tab-pane" aria-selected="false">Portfolio</button>
                        </li>
                        <li class="custom-tab-item" role="presentation">
                            <button class="custom-tab-btn" id="corporate-tab" data-bs-toggle="tab"
                                data-bs-target="#corporate-tab-pane" type="button" role="tab"
                                aria-controls="corporate-tab-pane" aria-selected="false">Corporate</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="ecommerce-tab-pane" role="tabpanel"
                        aria-labelledby="ecommerce-tab" tabindex="0">
                        <div class="container">
                            <div class="mb-5 row">
                                <div class="col-lg-3">
                                    <div class="mb-4 card">
                                        <img src="https://themeforest.kreativdev.com/bookapp/demo/assets/images/services/service-1.png"
                                            class="card-img-top" alt="template-one">
                                        <div class="card-body">
                                            <div class="pb-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-sm">
                                                    <small class="badge site-bg">Barber Shop</small>
                                                </p>
                                                <a class="btn btn-sm btn-primary btn-heart">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <h5 class="card-title">City Tower Barber Shop</h5>
                                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                                <img class="img-fluid company-logo"
                                                    src="https://www.ngenitltd.com/storage/LHhL5VKR2aoXEl2umO4UyKqj95qkKzvIPgZNfRNh.png"
                                                    alt="">
                                                <p class="mb-0 ps-2">Ngen IT Ltd</p>
                                            </div>
                                            <span class="font-sm icon-start">
                                                <i class="fas fa-map-marker-alt site-text"></i>
                                                City tower, Road : 1285, Usa
                                            </span>
                                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0">
                                                    <span class="fw-bold">$50000</span>
                                                    <del>$8000</del>
                                                </p>
                                                <a href="{{ route('template.details', ['slug' => 'barber-shop']) }}"
                                                    class="btn-common-three animated rounded-3">
                                                    Get Now <i class="fas fa-arrow-right ps-2"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-4 card">
                                        <img src="https://themeforest.kreativdev.com/bookapp/demo/assets/images/services/service-1.png"
                                            class="card-img-top" alt="template-one">
                                        <div class="card-body">
                                            <div class="pb-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-sm">
                                                    <small class="badge site-bg">Barber Shop</small>
                                                </p>
                                                <a class="btn btn-sm btn-primary btn-heart">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <h5 class="card-title">City Tower Barber Shop</h5>
                                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                                <img class="img-fluid company-logo"
                                                    src="https://www.ngenitltd.com/storage/LHhL5VKR2aoXEl2umO4UyKqj95qkKzvIPgZNfRNh.png"
                                                    alt="">
                                                <p class="mb-0 ps-2">Ngen IT Ltd</p>
                                            </div>
                                            <span class="font-sm icon-start">
                                                <i class="fas fa-map-marker-alt site-text"></i>
                                                City tower, Road : 1285, Usa
                                            </span>
                                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0">
                                                    <span class="fw-bold">$500</span>
                                                    <del>$800</del>
                                                </p>
                                                <a href="{{ route('template.details', ['slug' => 'barber-shop']) }}"
                                                    class="btn-common-three animated w-100 rounded-3">
                                                    Get Now <i class="fas fa-arrow-right ps-2"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-4 card">
                                        <img src="https://themeforest.kreativdev.com/bookapp/demo/assets/images/services/service-1.png"
                                            class="card-img-top" alt="template-one">
                                        <div class="card-body">
                                            <div class="pb-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-sm">
                                                    <small class="badge site-bg">Barber Shop</small>
                                                </p>
                                                <a class="btn btn-sm btn-primary btn-heart">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <h5 class="card-title">City Tower Barber Shop</h5>
                                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                                <img class="img-fluid company-logo"
                                                    src="https://www.ngenitltd.com/storage/LHhL5VKR2aoXEl2umO4UyKqj95qkKzvIPgZNfRNh.png"
                                                    alt="">
                                                <p class="mb-0 ps-2">Ngen IT Ltd</p>
                                            </div>
                                            <span class="font-sm icon-start">
                                                <i class="fas fa-map-marker-alt site-text"></i>
                                                City tower, Road : 1285, Usa
                                            </span>
                                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0">
                                                    <span class="fw-bold">$500</span>
                                                    <del>$800</del>
                                                </p>
                                                <a href="{{ route('template.details', ['slug' => 'barber-shop']) }}"
                                                    class="btn-common-three animated w-100 rounded-3">
                                                    Get Now <i class="fas fa-arrow-right ps-2"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-4 card">
                                        <img src="https://themeforest.kreativdev.com/bookapp/demo/assets/images/services/service-1.png"
                                            class="card-img-top" alt="template-one">
                                        <div class="card-body">
                                            <div class="pb-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-sm">
                                                    <small class="badge site-bg">Barber Shop</small>
                                                </p>
                                                <a class="btn btn-sm btn-primary btn-heart">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <h5 class="card-title">City Tower Barber Shop</h5>
                                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                                <img class="img-fluid company-logo"
                                                    src="https://www.ngenitltd.com/storage/LHhL5VKR2aoXEl2umO4UyKqj95qkKzvIPgZNfRNh.png"
                                                    alt="">
                                                <p class="mb-0 ps-2">Ngen IT Ltd</p>
                                            </div>
                                            <span class="font-sm icon-start">
                                                <i class="fas fa-map-marker-alt site-text"></i>
                                                City tower, Road : 1285, Usa
                                            </span>
                                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0">
                                                    <span class="fw-bold">$500</span>
                                                    <del>$800</del>
                                                </p>
                                                <a class="btn-common-three animated w-100 rounded-3">
                                                    Get Now <i class="fas fa-arrow-right ps-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-4 card">
                                        <img src="https://themeforest.kreativdev.com/bookapp/demo/assets/images/services/service-1.png"
                                            class="card-img-top" alt="template-one">
                                        <div class="card-body">
                                            <div class="pb-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-sm">
                                                    <small class="badge site-bg">Barber Shop</small>
                                                </p>
                                                <a class="btn btn-sm btn-primary btn-heart">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <h5 class="card-title">City Tower Barber Shop</h5>
                                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                                <img class="img-fluid company-logo"
                                                    src="https://www.ngenitltd.com/storage/LHhL5VKR2aoXEl2umO4UyKqj95qkKzvIPgZNfRNh.png"
                                                    alt="">
                                                <p class="mb-0 ps-2">Ngen IT Ltd</p>
                                            </div>
                                            <span class="font-sm icon-start">
                                                <i class="fas fa-map-marker-alt site-text"></i>
                                                City tower, Road : 1285, Usa
                                            </span>
                                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0">
                                                    <span class="fw-bold">$500</span>
                                                    <del>$800</del>
                                                </p>
                                                <a class="btn-common-three animated w-100 rounded-3">
                                                    Get Now <i class="fas fa-arrow-right ps-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-4 card">
                                        <img src="https://themeforest.kreativdev.com/bookapp/demo/assets/images/services/service-1.png"
                                            class="card-img-top" alt="template-one">
                                        <div class="card-body">
                                            <div class="pb-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-sm">
                                                    <small class="badge site-bg">Barber Shop</small>
                                                </p>
                                                <a class="btn btn-sm btn-primary btn-heart">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <h5 class="card-title">City Tower Barber Shop</h5>
                                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                                <img class="img-fluid company-logo"
                                                    src="https://www.ngenitltd.com/storage/LHhL5VKR2aoXEl2umO4UyKqj95qkKzvIPgZNfRNh.png"
                                                    alt="">
                                                <p class="mb-0 ps-2">Ngen IT Ltd</p>
                                            </div>
                                            <span class="font-sm icon-start">
                                                <i class="fas fa-map-marker-alt site-text"></i>
                                                City tower, Road : 1285, Usa
                                            </span>
                                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0">
                                                    <span class="fw-bold">$500</span>
                                                    <del>$800</del>
                                                </p>
                                                <a class="btn-common-three animated w-100 rounded-3">
                                                    Get Now <i class="fas fa-arrow-right ps-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-4 card">
                                        <img src="https://themeforest.kreativdev.com/bookapp/demo/assets/images/services/service-1.png"
                                            class="card-img-top" alt="template-one">
                                        <div class="card-body">
                                            <div class="pb-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-sm">
                                                    <small class="badge site-bg">Barber Shop</small>
                                                </p>
                                                <a class="btn btn-sm btn-primary btn-heart">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <h5 class="card-title">City Tower Barber Shop</h5>
                                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                                <img class="img-fluid company-logo"
                                                    src="https://www.ngenitltd.com/storage/LHhL5VKR2aoXEl2umO4UyKqj95qkKzvIPgZNfRNh.png"
                                                    alt="">
                                                <p class="mb-0 ps-2">Ngen IT Ltd</p>
                                            </div>
                                            <span class="font-sm icon-start">
                                                <i class="fas fa-map-marker-alt site-text"></i>
                                                City tower, Road : 1285, Usa
                                            </span>
                                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0">
                                                    <span class="fw-bold">$500</span>
                                                    <del>$800</del>
                                                </p>
                                                <a class="btn-common-three animated w-100 rounded-3">
                                                    Get Now <i class="fas fa-arrow-right ps-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-4 card">
                                        <img src="https://themeforest.kreativdev.com/bookapp/demo/assets/images/services/service-1.png"
                                            class="card-img-top" alt="template-one">
                                        <div class="card-body">
                                            <div class="pb-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0 text-sm">
                                                    <small class="badge site-bg">Barber Shop</small>
                                                </p>
                                                <a class="btn btn-sm btn-primary btn-heart">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <h5 class="card-title">City Tower Barber Shop</h5>
                                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                                <img class="img-fluid company-logo"
                                                    src="https://www.ngenitltd.com/storage/LHhL5VKR2aoXEl2umO4UyKqj95qkKzvIPgZNfRNh.png"
                                                    alt="">
                                                <p class="mb-0 ps-2">Ngen IT Ltd</p>
                                            </div>
                                            <span class="font-sm icon-start">
                                                <i class="fas fa-map-marker-alt site-text"></i>
                                                City tower, Road : 1285, Usa
                                            </span>
                                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                                <p class="mb-0">
                                                    <span class="fw-bold">$500</span>
                                                    <del>$800</del>
                                                </p>
                                                <a class="btn-common-three animated w-100 rounded-3">
                                                    Get Now <i class="fas fa-arrow-right ps-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lms-tab-pane" role="tabpanel" aria-labelledby="lms-tab"
                        tabindex="0">...</div>
                    <div class="tab-pane fade" id="portfolio-tab-pane" role="tabpanel"
                        aria-labelledby="portfolio-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="corporate-tab-pane" role="tabpanel"
                        aria-labelledby="corporate-tab" tabindex="0">...</div>
                </div>

            </div>
        </div>
    </div>

</x-frontend-app-layout>
