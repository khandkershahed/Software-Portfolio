<x-frontend-app-layout :title="'About'">

    <!-- Contact Section Start -->
    <section>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-section">
                        <div class="d-flex">
                            <img class="w-100 img-fluid"
                                src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/5f9d97124964309.610f693c40348.png"
                                alt="" />
                            <img class="w-100 img-fluid"
                                src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/5f9d97124964309.610f693c40348.png"
                                alt="" />
                        </div>
                        <div class="text-overlay">
                            <!-- <h3>Contact</h3> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Project Section Start --}}
    <section>
        <div class="container my-5">
            <ul class="nav nav-tabs projects-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ecommerce-tab" data-bs-toggle="tab" href="#ecommerce" role="tab"
                        aria-controls="ecommerce" aria-selected="true">Ecommerce</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="corporate-tab" data-bs-toggle="tab" href="#corporate" role="tab"
                        aria-controls="corporate" aria-selected="false">Corporate Website</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="cms-tab" data-bs-toggle="tab" href="#cms" role="tab"
                        aria-controls="cms" aria-selected="false">Wordpress (CMS)</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="admin-tab" data-bs-toggle="tab" href="#admin" role="tab"
                        aria-controls="admin" aria-selected="false">Admin (Template)</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="coupon-discount-tab" data-bs-toggle="tab" href="#coupon-discount"
                        role="tab" aria-controls="coupon-discount" aria-selected="false">Coupon & Discount</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="solutions-tab" data-bs-toggle="tab" href="#solutions" role="tab"
                        aria-controls="solutions" aria-selected="false">Solutions Services</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <a href="Dadavai.html">
                                <div class="card mb-3 border-0 shadow-sm">
                                    <div class="slick-slider-projects">
                                        <div class="image-container">
                                            <img src="./assets/images/DadaBhaai/dada3.png"
                                                class="card-img-top zoom-effect" alt="dadavaai template one" />
                                        </div>
                                        <div class="image-container">
                                            <img src="./assets/images/DadaBhaai/dada4.png"
                                                class="card-img-top zoom-effect" alt="dadavaai template one" />
                                        </div>
                                        <div class="image-container">
                                            <img src="./assets/images/DadaBhaai/Mockup_DadaBhaai.png"
                                                class="card-img-top zoom-effect" alt="dadavaai template one" />
                                        </div>
                                    </div>
                                    <div class="card-body bg-light">
                                        <h5 class="card-title">Dada Bhaai E-commerce.</h5>
                                        <p class="card-text">
                                            With a commitment to customer satisfaction, it
                                            caters to diverse needs, from daily essentials to
                                            premium products, ensuring quality at every step.
                                            The platform empowers small businesses by
                                            providing them a robust digital presence
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="DiscountShop.html">
                                <div class="card mb-3">
                                    <div class="slick-slider-projects">
                                        <div class="image-container">
                                            <img src="./assets/images/discountzshop/discount02.png"
                                                class="card-img-top zoom-effect" alt="DiscountShop" />
                                        </div>
                                        <div class="image-container">
                                            <img src="./assets/images/discountzshop/discount03.png"
                                                class="card-img-top zoom-effect" alt="DiscountShop" />
                                        </div>
                                        <div class="image-container">
                                            <img src="./assets/images/discountzshop/Discountzshop-banner.jpg"
                                                class="card-img-top zoom-effect" alt="DiscountShop" />
                                        </div>
                                    </div>
                                    <div class="card-body bg-light">
                                        <h5 class="card-title">
                                            Discount Z Shop (Coupon And Discount).
                                        </h5>
                                        <p class="card-text">
                                            Focused on maximizing value for customers, the
                                            platform offers a wide range of coupons and
                                            discounts across various categories, from daily
                                            essentials to luxury products. By making premium
                                            quality affordable, Discount Z Shop ensures every
                                            shopper finds the best bargains tailored to their
                                            needs.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="corporate" role="tabpanel" aria-labelledby="corporate-tab">
                    <a href="DiscountShop.html">
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="slick-slider-projects">
                                        <img src="./assets/images/project-sliders/dadavaai-one.png"
                                            class="card-img-top" alt="dadavaai template one" />
                                        <img src="./assets/images/project-sliders/dadavaai-two.png"
                                            class="card-img-top" alt="dadavaai template one" />
                                        <img src="./assets/images/project-sliders/dadavaai-three.png"
                                            class="card-img-top" alt="dadavaai template one" />
                                    </div>
                                    <div class="card-body bg-light">
                                        <h5 class="card-title">Dada Bhaai E-commerce.</h5>
                                        <p class="card-text">
                                            With a commitment to customer satisfaction, it
                                            caters to diverse needs, from daily essentials to
                                            premium products, ensuring quality at every step.
                                            The platform empowers small businesses by
                                            providing them a robust digital presence
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="slick-slider-projects">
                                        <img src="./assets/images/project-sliders/discountZsop-one.png"
                                            class="card-img-top" alt="Architecting HIPAA Compliant Cloud On AWS" />
                                        <img src="./assets/images/project-sliders/discountZsop-two"
                                            class="card-img-top" alt="Architecting HIPAA Compliant Cloud On AWS" />
                                        <img src="./assets/images/project-sliders/dadavaai-three.png"
                                            class="card-img-top" alt="Architecting HIPAA Compliant Cloud On AWS" />
                                    </div>
                                    <div class="card-body bg-light">
                                        <h5 class="card-title">
                                            Discount Z Shop (Coupon And Discount).
                                        </h5>
                                        <p class="card-text">
                                            Focused on maximizing value for customers, the
                                            platform offers a wide range of coupons and
                                            discounts across various categories, from daily
                                            essentials to luxury products. By making premium
                                            quality affordable, Discount Z Shop ensures every
                                            shopper finds the best bargains tailored to their
                                            needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="tab-pane fade" id="cms" role="tabpanel" aria-labelledby="cms-tab">
                    Websites content goes here...
                </div>
                <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                    Applications content goes here...
                </div>
                <div class="tab-pane fade" id="coupon-discount" role="tabpanel"
                    aria-labelledby="coupon-discount-tab">
                    Web 3.0 content goes here...
                </div>
                <div class="tab-pane fade" id="solutions" role="tabpanel" aria-labelledby="solutions-tab">
                    UI/UX content goes here...
                </div>
            </div>
        </div>
    </section>
    {{-- Project Section End --}}


    @include('frontend.pages.partner')

    @include('frontend.pages.client')
    <!-- Partner Section End -->

</x-frontend-app-layout>
