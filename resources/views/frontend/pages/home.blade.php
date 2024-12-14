<x-frontend-app-layout :title="'HomePage'">
    <!-- Banner Section Start -->
    <section class="banner__slider">
        <div class="slider stick-dots">
            <div class="slide slide-home">
                <div class="slide__img">
                    <img src="{{ asset('frontend/assets/images/banner-2.jpg') }}" alt="" data-lazy="{{ asset('frontend/assets/images/banner-2.jpg') }}" class="full-image animated"
                        data-animation-in="zoomOutImage" />
                </div>
                <div class="slide__content slide__content__left">
                    <div class="slide__content--headings text-center text-lg-start">
                        <p class="animated top-title" data-animation-in="fadeInLeft" data-delay-in="0.2">
                            We create premium designs and technology
                        </p>
                        <h2 class="animated title" data-animation-in="fadeInLeft">
                            Minimal Design
                        </h2>
                        <a href="contact.html" class="btn-common-two animated mt-5" data-animation-in="fadeInUp">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="slide slide-home">
                <div class="slide__img">
                    <img src="{{ asset('frontend/assets/images/banner-1.jpg') }}" alt="" data-lazy="{{ asset('frontend/assets/images/banner-1.jpg') }}"
                        class="full-image animated" data-animation-in="zoomInImage" />
                </div>
                <div class="slide__content">
                    <div class="slide__content--headings text-center">
                        <p class="animated top-title" data-animation-in="fadeInUp" data-delay-in="0.3">
                            Powerful theme for creatives designer
                        </p>
                        <h1 class="animated title" data-animation-in="fadeInUp">
                            Digital Agency
                        </h1>
                        <a href="contact.html" class="btn-common-two animated mt-5" data-animation-in="fadeInUp">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="slide slide-home">
                <div class="slide__img">
                    <img src="{{ asset('frontend/assets/images/banner-3.jpg') }}" alt="" data-lazy="{{ asset('frontend/assets/images/banner-3.jpg') }}"
                        class="full-image animated" data-animation-in="zoomInImage" />
                </div>
                <div class="slide__content slide__content__right">
                    <div class="slide__content--headings text-center text-lg-end">
                        <p class="animated top-title" data-animation-in="fadeInUp" data-delay-in="0.3">
                            Powerful theme for creatives designer
                        </p>
                        <h1 class="animated title" data-animation-in="fadeInUp">
                            Digital Agency
                        </h1>
                        <a href="contact.html" class="btn-common-two animated mt-5" data-animation-in="fadeInUp">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG Circle for Navigation (Optional) -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
                fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="test" />
            </symbol>
        </svg>
    </section>
    <!-- Banner Section End -->
    <!-- A creative agency -->
    <section>
        <div class="container agency_container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="agency_box">
                        <div class="row align-items-center agency_box_row">
                            <div class="col-lg-6">
                                <p class="mb-0 agency_badge">About NGen IT</p>
                                <div class="agency_title">
                                    <h1 class="pt-3">
                                        NGen IT A Leading Creative Agency Delivering
                                        <span class="word wisteria ps-2">Innovative</span>
                                        <span class="word belize ps-2">Branding</span>
                                        <span class="word pomegranate ps-2">Strategies</span>
                                    </h1>
                                    <h1>that Drive Success.</h1>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p class="mb-0 agency_details">
                                    At NGen IT, we craft innovative and high-quality web
                                    and app solutions tailored to your business needs. Our
                                    team specializes in responsive designs, user-friendly
                                    interfaces, and seamless digital experiences, ensuring
                                    your business stands out and engages customers
                                    effectively.
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
                                <i class="fa-regular fa-copyright pe-2"></i> digital
                                branding
                            </p>
                            <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                                <i class="fa-solid fa-mug-hot pe-2"></i> brand strategy
                            </p>
                            <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                                <i class="fa-solid fa-bezier-curve pe-2"></i> Website
                                designing
                            </p>
                            <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                                <i class="fa-solid fa-cart-shopping pe-2"></i> Ecommerce
                                tool
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- A creative agency -->
    <section style="background-color: #2c3e50">
        <div class="container-fluid pb-0 pb-lg-5">
            <div class="marquee_container">
                <div class="marquee left-to-right">
                    <div class="marquee_group">
                        <span>Software</span>
                        <span>Development,</span>
                        <span>Graphic</span>
                        <span>Design,</span>
                        <!-- Duplicate content for seamless scrolling -->
                        <span>Software</span>
                        <span>Development,</span>
                        <span>Graphic</span>
                        <span>Design,</span>
                    </div>
                </div>
                <div class="marquee right-to-left">
                    <div class="marquee_group">
                        <span>Digital</span>
                        <span>Marketing,</span>
                        <span>Data</span>
                        <span>Analysis,</span>
                        <!-- Duplicate content for seamless scrolling -->
                        <span>Digital</span>
                        <span>Marketing,</span>
                        <span>Data</span>
                        <span>Analysis,</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <section>
        <div id="projectFacts" class="sectionClass">
            <div class="fullWidth eight columns">
                <div class="projectFactsWrap">
                    <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible">
                        <i class="fa fa-briefcase"></i>
                        <p id="number1" class="number">12</p>
                        <span></span>
                        <p>Projects Done</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible">
                        <i class="fa-solid fa-user-tie"></i>
                        <p id="number2" class="number">55</p>
                        <span></span>
                        <p>Happy clients</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="08" style="visibility: visible">
                        <i class="fa-solid fa-building"></i>
                        <p id="number3" class="number">08</p>
                        <span></span>
                        <p>Experience</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="10" style="visibility: visible">
                        <i class="fa-solid fa-trophy"></i>
                        <p id="number4" class="number">10</p>
                        <span></span>
                        <p>Award Winning</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            style="
        border: 0px solid lightgray;
        width: 100%;
        height: 800px;
        background-color: white;
      "
                            src="https://heyzine.com/flip-book/d6a1999da1.html"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Query Section Here -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h1>Let's Query/Brief Project</h1>
                        <span class="line ms-2"></span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <form class="mt-5">
                        <div class="row">
                            <p>Platforms <span class="line-2 ms-2"></span></p>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-46" type="checkbox"
                                        value="Web Development" />
                                    <label class="platform_label" for="platform_label-46">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Web Development</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-47" type="checkbox"
                                        value="Software Development" />
                                    <label class="platform_label" for="platform_label-47">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Software Development</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-48" type="checkbox"
                                        value="Graphics Design" />
                                    <label class="platform_label" for="platform_label-48">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Graphics Design</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-49" type="checkbox"
                                        value="UI/UX Design" />
                                    <label class="platform_label" for="platform_label-49">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>UI/UX Design</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-50" type="checkbox"
                                        value="Ecommerce Development" />
                                    <label class="platform_label" for="platform_label-50">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Ecommerce Development</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-51" type="checkbox"
                                        value="App Development" />
                                    <label class="platform_label" for="platform_label-51">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>App Development</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-52" type="checkbox"
                                        value="App Development" />
                                    <label class="platform_label" for="platform_label-52">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Software Solution</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-53" type="checkbox"
                                        value="App Development" />
                                    <label class="platform_label" for="platform_label-52">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Post System</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-54" type="checkbox"
                                        value="App Development" />
                                    <label class="platform_label" for="platform_label-52">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>AMS System</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-55" type="checkbox"
                                        value="App Development" />
                                    <label class="platform_label" for="platform_label-52">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Learning Management System</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-56" type="checkbox"
                                        value="App Development" />
                                    <label class="platform_label" for="platform_label-52">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Corporate Website</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-56" type="checkbox"
                                        value="App Development" />
                                    <label class="platform_label" for="platform_label-52">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Wordpress Theme Customization</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="palatform_checkbox mb-2">
                                    <input class="platform_input" id="platform_label-57" type="checkbox"
                                        value="App Development" />
                                    <label class="platform_label" for="platform_label-52">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>CMS Template Setup</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="">
                        <a href="query.html" class="btn-common-one animated mt-3" data-animation-in="fadeInUp">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="mt-5 query-inputs-box rounded-2">
                        <p>
                            Add Technology & Others Information
                            <span class="line-2 ms-2"></span>
                        </p>
                        <div id="selected-platforms">
                            <div>
                                <img class="img-fluid w-100 rounded-2" style="height: 440px"
                                    src="./assets/images/Platform &/first.png" alt="" />
                            </div>
                        </div>
                        <div id="toggle-div" style="display: none">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="mb-2" for="frontend">Frontend</label>
                                            <select class="form-select w-100" id="frontend" aria-label="frontend">
                                                <option selected>
                                                    Select Frontend Technology
                                                </option>
                                                <option value="html">HTML</option>
                                                <option value="css">CSS</option>
                                                <option value="javascript">JavaScript</option>
                                                <option value="typescript">TypeScript</option>
                                                <option value="react">React</option>
                                                <option value="angular">Angular</option>
                                                <option value="vue">Vue</option>
                                                <option value="svelte">Svelte</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="mb-2" for="backend">Backend</label>
                                            <select class="form-select w-100" id="backend" aria-label="backend">
                                                <option selected>
                                                    Select Backend Technology
                                                </option>
                                                <option value="nodejs">Node.js</option>
                                                <option value="php">PHP</option>
                                                <option value="python">Python</option>
                                                <option value="java">Java</option>
                                                <option value="c-sharp">C#</option>
                                                <option value="c-plus-plus">C++</option>
                                                <option value="ruby">Ruby</option>
                                                <option value="go">Go</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="mb-2" for="database">Database</label>
                                            <select class="form-select w-100" id="database" aria-label="database">
                                                <option selected>Select Database</option>
                                                <option value="sql">SQL</option>
                                                <option value="nosql">NoSQL</option>
                                                <option value="mongodb">MongoDB</option>
                                                <option value="mysql">MySQL</option>
                                                <option value="postgresql">PostgreSQL</option>
                                                <option value="sqlite">SQLite</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="demo_site">Demo Site Link</label>
                                            <input type="url" class="form-control" id="demo_site"
                                                placeholder="Demo Link" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="demo_site">Demo File/Image</label>
                                            <input type="file" class="form-control" id="demo_file"
                                                placeholder="your file" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="demo_site">Name</label>
                                            <input type="text" class="form-control" id="client_name"
                                                placeholder="Jonson Heilson" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="demo_site">Phone</label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="015******" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="email">Email</label>
                                            <input type="text" class="form-control" id="email"
                                                placeholder="client@mail.com" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="duration">Duration:</label>
                                            <select id="duration" class="form-select w-100">
                                                <option value="">Select Duration</option>
                                                <option value="2 months">2 months</option>
                                                <option value="3 months">3 months</option>
                                                <option value="1 year">1 year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row mt-5">
                        <div id="query-platforms">
                            <div>
                                <img class="img-fluid w-100 rounded-2" src="./assets/images/Platform &/last.png"
                                    alt="" />
                            </div>
                        </div>
                        <!-- Display the selected checkbox and dropdown options -->
                        <div class="col-lg-12" id="show-selection">
                            <div id="selected-options">
                                <!-- Default text will be shown here -->
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button class="btn-common-one animated mt-3 w-100" data-animation-in="fadeInUp">
                            Submit Project Query
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partner Section start -->
    <section style="background-color: #eee">
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center">
                            <h1 class="design-title text-black">Our Partners</h1>
                            <span class="line ms-2"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="pt-3">
                            We take immense pride in collaborating with a diverse
                            network of trusted partners, working together to drive
                            innovation and growth. Our partnerships are built on
                            mutual respect, shared goals, and a commitment to
                            excellence. Each partner brings their unique expertise,
                            enabling us to provide exceptional value to our clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container-fluid px-0 py-3">
            <div class="row align-items-center">
                <div>
                    <!-- Partners Logo -->
                    <section class="partners-carousel">
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="./assets/images/partners-logo/Dadabhai-Logo.png"
                                alt="" />
                        </div>
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="./assets/images/partners-logo/discountzshop-logo.png"
                                alt="" />
                        </div>
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="./assets/images/partners-logo/jaragroups-logo.png"
                                alt="" />
                        </div>
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="./assets/images/partners-logo/ngenit-logo.png"
                                alt="" />
                        </div>
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="./assets/images/partners-logo/techfocus-logo.png"
                                alt="" />
                        </div>
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="./assets/images/partners-logo/jarait-logo.jpg"
                                alt="" />
                        </div>
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="./assets/images/partners-logo/jaraconsumer-logo.png"
                                alt="" />
                        </div>
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="./assets/images/partners-logo/jarataders-logo.png"
                                alt="" />
                        </div>
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="./assets/images/partners-logo/consultanthouse-logo.png"
                                alt="" />
                        </div>
                    </section>

                    <!-- Partners Logo End-->
                </div>
            </div>
        </div>
    </section>
    <!-- Partner Section End -->
</x-frontend-app-layout>
