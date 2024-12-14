<x-frontend-app-layout :title="'HomePage'">

    <!-- Banner Section Start -->
    @include('frontend.pages.banner')
    <!-- Banner Section End -->

    <!-- A creative agency -->
    <section>
        <div class="container agency_container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="agency_box">
                        <div class="row align-items-center agency_box_row">
                            <div class="col-lg-6">
                                <p class="mb-0 agency_badge">{{ $item->row_one_badge }}</p>
                                <div class="agency_title">
                                    <h1 class="pt-3">
                                        {{ $item->row_one_title }}

                                        {{-- <span class="word wisteria ps-2">Innovative</span>
                                        <span class="word belize ps-2">Branding</span>
                                        <span class="word pomegranate ps-2">Strategies</span> --}}

                                    </h1>
                                    <h1>that Drive Success.</h1>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p class="mb-0 agency_details">
                                    {!! $item->row_one_description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center action-btn-box">
                        <a href="" class="action-btn">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center py-5 home-feature">
                            <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                                <i class="{{ $item->row_two_icon_one }} pe-2"></i> {{ $item->row_two_icon_one_title }}
                            </p>
                            <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                                <i class="{{ $item->row_two_icon_two }} pe-2"></i> {{ $item->row_two_icon_two_title }}
                            </p>
                            <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                                <i class="{{ $item->row_two_icon_three }} pe-2"></i>
                                {{ $item->row_two_icon_three_title }}
                            </p>
                            <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                                <i class="{{ $item->row_two_icon_four }} pe-2"></i> {{ $item->row_two_icon_four_title }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service start -->
    @include('frontend.pages.service')

    <!-- service end -->


    <div class="shape-container" id="section1">
        <!-- Feature Section Start -->
        <section>
            <div class="container py-0 py-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="py-5">
                            <div class="d-flex align-items-center">
                                <h1 class="design-title text-black">
                                    Development Services
                                </h1>
                                <span class="line ms-2"></span>
                            </div>
                            <p class="pt-3 text-black">
                                At NGen IT, we specialize in creating high-quality
                                software solutions and custom websites tailored to your
                                business needs. From building robust e-commerce
                                platforms to developing user-friendly web applications,
                                our team ensures a seamless digital experience that
                                drives results.
                            </p>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            E-commerce Sites
                                        </a>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            Corporate Websites
                                        </a>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            Learning Mgmt (LMS)
                                        </a>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            Consultancy Sites
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            Coupon & Discounts Sites
                                        </a>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            Admin Template
                                        </a>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            Solution Services
                                        </a>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            Wordpress (CMS)
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img class="mobile-imgs" src="./assets/images/webdevelopment.png"
                                alt="Development Services" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Section End -->
        <!-- Feature Section Start -->
        <section>
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <img class="img-fluid"
                                src="https://cdnpgfx.presentationgfx.com/wp-content/uploads/2023/05/animated-explainer-video-services.svg"
                                alt="Graphics Services" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <div class="d-flex align-items-center">
                                <h1 class="grp-title">Graphics Services</h1>
                                <span class="line ms-2"></span>
                            </div>
                            <p class="pt-3 grp-para">
                                Our graphic design services at NGen IT bring your brand
                                vision to life. From logo creation to complete branding
                                solutions, we craft visually compelling designs that
                                resonate with your audience. Whether it's custom
                                illustrations, marketing materials, or website graphics,
                                our creative team ensures your brand stands out.
                            </p>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Logo Design
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Brand Identity Design
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Illustration
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Print Design
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Social Media Graphics
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Site Banner
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Packaging Design
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Web Graphics & Banners
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Motion Graphics
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            Infographics Design
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            E-book & PDF Design
                                        </button>
                                    </div>
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            UI/UX Design Services
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Section End -->
    </div>

    <!-- Counter -->
    @include('frontend.pages.company_data')
    <!-- Counter End -->

    <!-- Mobile Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <img class="img-fluid slideshow-image" src="./assets/images/mobile1.webp" alt=""
                            style="display: block" />
                        <img class="img-fluid slideshow-image" src="./assets/images/mobile3.webp" alt=""
                            style="display: none" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <div class="d-flex align-items-center">
                            <h1>App Development</h1>
                            <span class="line ms-2"></span>
                        </div>
                        <p class="py-3">
                            At NGen IT, we specialize in developing custom mobile
                            applications that are intuitive, user-friendly, and built
                            to scale. Whether it's an iOS or Android app, we ensure
                            your app meets the highest performance standards while
                            delivering an exceptional user experience. Let us help you
                            bring your app idea to life.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        Native App Development
                                    </button>
                                </div>
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        Cross-Platform App
                                    </button>
                                </div>
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        App UI/UX Design
                                    </button>
                                </div>
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        Maintenance & Support
                                    </button>
                                </div>
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        Flutter Development.
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        App Store Deployment
                                    </button>
                                </div>
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        API Integration for Apps
                                    </button>
                                </div>
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        App Marketing Strategy
                                    </button>
                                </div>
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        App Analytics & Reporting
                                    </button>
                                </div>
                                <div class="mb-3 shape_side_box">
                                    <button class="btn btn-white shadow-sm arrow-btns">
                                        <i class="fa-solid fa-chevron-right pe-2"></i>
                                    </button>
                                    <button class="btn btn-white shadow-sm services-btn w-75 text-start">
                                        Custom App Features
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Us  --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h1>About Us</h1>
                        <span class="line ms-2"></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div>
                        <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe"
                            style="border: 0px solid lightgray;width: 100%;height: 800px;background-color: white;"
                            src="https://heyzine.com/flip-book/d6a1999da1.html"></iframe>

                        {{-- <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe"
                            style="border: 0px solid lightgray;width: 100%;height: 800px;background-color: white;"
                            src="{{ !empty($item->row_three_pdf) ? url('storage/' . $item->row_three_pdf) : '' }}"></iframe> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Query Section Here -->
    @include('frontend.pages.query')

    <!-- Partner Section start -->
    @include('frontend.pages.partner')
    <!-- Partner Section End -->

    {{-- Clinet --}}
    @include('frontend.pages.client')

</x-frontend-app-layout>
