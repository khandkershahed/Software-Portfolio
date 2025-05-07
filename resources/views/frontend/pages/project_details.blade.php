<x-frontend-app-layout :title="'Project Details'">
    <style>
        /* Apply horizontal spacing between slick slides */
        .slick-slider .porject-img {
            margin: 0 10px;
        }

        /* Adjust the outer container to account for negative margins */
        .slick-slider .slick-list {
            margin: 0 -10px;
        }

        /* Custom Button Styles */

        .slick-prev-custom-related,
        .slick-next-custom-related {
            color: #03263e;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border: 2px solid #03263e;
            transition: background-color 0.3s ease;
        }

        .slick-prev-custom-related:hover,
        .slick-next-custom-related:hover {
            background-color: #03263e;
            color: white
        }

        /* Positioning the buttons */
        .slick-prev-custom-related {
            position: absolute;
            border-radius: 100%;
            height: 50px;
            width: 50px;
            left: 10px;
            top: 60%;
            transform: translateY(-50%);
        }

        .slick-next-custom-related {
            position: absolute;
            border-radius: 100%;
            height: 50px;
            width: 50px;
            right: 10px;
            top: 60%;
            transform: translateY(-50%);
        }

        .slick-prev-custom,
        .slick-next-custom {
            color: #03263e;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border: 2px solid #03263e;
            transition: background-color 0.3s ease;
        }

        .slick-prev-custom:hover,
        .slick-next-custom:hover {
            background-color: #03263e;
            color: white
        }

        /* Positioning the buttons */
        .slick-prev-custom {
            position: absolute;
            border-radius: 100%;
            height: 50px;
            width: 50px;
            left: 10px;
            top: 60%;
            transform: translateY(-50%);
        }

        .slick-next-custom {
            position: absolute;
            border-radius: 100%;
            height: 50px;
            width: 50px;
            right: 10px;
            top: 60%;
            transform: translateY(-50%);
        }

        .gallery-img-nav {
            position: absolute;
            right: 122px;
        }

        .img-one {
            margin-bottom: 5px;
        }

        .img-two {
            margin-bottom: 5px;
            position: relative;
            top: -90px;
            left: 75px;
        }

        .img-three {
            margin-bottom: 5px;
            position: relative;
            top: -180px;
            left: 140px;
        }

        .img-one,
        .img-two,
        .img-three,
        .img-four {
            margin-bottom: 5px;
            position: relative;
            z-index: 1;
            display: inline-block;
            transition: transform 0.3s ease, z-index 0.3s ease;
        }

        /* On hover: bring to front and zoom */
        .img-one:hover,
        .img-two:hover,
        .img-three:hover,
        .img-four:hover {
            z-index: 10;
            transform: scale(1.05);
        }



        .releted-img-box {
            height: 400px;
            padding: 10px
        }

        .slick-slider-related .slick-list {
            margin: 0 -20px;
        }

        .slick-slider-related .releted-items {
            margin: 0 10px;
        }

        .porject-img {
            height: 585px;
            position: relative;
            overflow: hidden;
        }

        .porject-img img {
            border: 4px solid #03263e;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease, z-index 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .porject-img:hover img {
            transform: scale(1.05);
            z-index: 10;
        }
    </style>
    <!-- Banner Section Start -->
    {{-- @dd($project) --}}
    <section>
        <div class="banner banner3"
            style="background-image: url('{{ !empty($project->row_one_image) ? url('storage/' . $project->row_one_image) : '' }}');">
            <div class="container project-banner-container">
                <div class="pt-5 mt-5 row gx-5 align-items-center mt-lg-1 pt-lg-1">
                    <div class="col-lg-8 col-12">
                        <div class="mb-5 text-left slide__content--headings mb-lg-1">
                            <div class="">
                                <h2 class="animated top-title" data-animation-in="fadeInLeft" data-delay-in="0.2"
                                    style="font-size:26px; color:#03263e;">
                                    {{ $project->row_one_badge }}
                                </h2>
                                <h4 class="animated title" data-animation-in="fadeInLeft"
                                    style="font-size:2.2rem;line-height:1.1; color:#03263e;">
                                    {{ $project->row_one_title }}
                                </h4>
                                <h6 class="pt-4 animated top-title pe-lg-5"
                                    style="text-align: justify;font-size:18px; color:#03263e;">
                                    {!! $project->row_one_description !!}
                                </h6>
                            </div>
                            <div class="pt-5 d-flex align-items-center">
                                <div class="pe-5">
                                    <a href="{{ $project->row_one_button_link }}" class="btn-common-two animated"
                                        data-animation-in="fadeInUp">
                                        {{ $project->row_one_button_name }}
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">

                                    <div class="pe-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Visit Website">
                                        <a href="{{ $project->live_link }}" class="project-links" target="_blank">
                                            <i class="fa-solid fa-laptop"></i>
                                        </a>
                                    </div>

                                    <div class="pe-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Facebook">
                                        <a href="{{ $project->facebook_link }}" class="project-links">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </div>

                                    <div class="pe-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="LinkedIn">
                                        <a href="{{ $project->linkedin_link }}" class="project-links">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="text-left slide__content--headings projects-menus">

                            <h3 class="text-center animated site-text fw-bold" data-animation-in="fadeInLeft"
                                data-delay-in="0.2">
                                Project Features
                            </h3>

                            <div class="pt-3 row justify-content-between align-items-center">

                                {{-- @foreach ($allprojects as $allproject)
                                    <div class="col-lg-12">
                                        <a href="{{ route('projects.details', $allproject->slug) }}" class="">
                                            <h4 class="p-3 mb-3 text-center animated sub-title site-text"
                                                data-animation-in="fadeInLeft">
                                                {{ $allproject->name }}
                                            </h4>
                                        </a>
                                    </div>
                                @endforeach --}}
                                <div class="col-lg-12">
                                    <h5 class="p-3 mb-3 text-start animated sub-title site-text"
                                        data-animation-in="fadeInLeft">
                                        📱Mobile Ready
                                    </h5>
                                    <h5 class="p-3 mb-3 text-start animated sub-title site-text"
                                        data-animation-in="fadeInLeft">
                                        ⚡Blazing Fast Site
                                    </h5>
                                    <h5 class="p-3 mb-3 text-start animated sub-title site-text"
                                        data-animation-in="fadeInLeft">
                                        🔍SEO Optimized
                                    </h5>
                                    <h5 class="p-3 mb-3 text-start animated sub-title site-text"
                                        data-animation-in="fadeInLeft">
                                        🖥️Secure & Ready To Use
                                    </h5>
                                    <h5 class="p-3 mb-3 text-start animated sub-title site-text"
                                        data-animation-in="fadeInLeft">
                                        🌐Clean Code & Structured
                                    </h5>
                                    <h5 class="p-3 mb-3 text-start animated sub-title site-text"
                                        data-animation-in="fadeInLeft">
                                        ♿Accessibility Ready
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="animated-scroll-btn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="animated-scroll-btn">
                            <a href="#gallerySection" class="down-btn">
                                <i class="fa-solid fa-arrow-down-long"></i>
                                <div class="sonar-wave"></div>
                                <!-- Sonar wave element -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    {{-- Row Two Section  --}}
    <section class="py-5 pt-0">
        <div class="container py-5 pt-0 pb-0">
            <div class="mt-5 row align-items-center">
                <div class="col-lg-6">
                    <div>
                        <img class="rounded-3 img-fluid"
                            src="{{ !empty($project->row_two_image) ? url('storage/' . $project->row_two_image) : '' }}"
                            alt="" />
                    </div>
                    <p class="text-center">
                        <strong>{{ $project->row_two_image_title }}</strong>
                        <br />
                        {!! $project->row_two_image_description !!} <br />

                    </p>
                </div>
                <div class="col-lg-6">

                    <div class="">
                        <img class="img-fluid" width="200"
                            src="{{ !empty($project->logo) ? url('storage/' . $project->logo) : '' }}"
                            alt="" />
                    </div>

                    <div class="pt-4 d-flex align-items-center">
                        <h6 class="mb-0">Used Platform:</h6>

                        <div class="ps-2">
                            @php
                                $platforms = json_decode($project->platform, true); // Decode to array
                                $technologys = json_decode($project->technology, true); // Decode to array
                                $plugins = json_decode($project->plugin, true); // Decode to array
                            @endphp
                            {{-- @dd($platforms) --}}
                            @if (!empty($platforms) && is_array($platforms))
                                @foreach ($platforms as $id => $platform)
                                    <span class="text-black badge p-badge rounded-pill">
                                        {{ $platform['value'] }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    </span>
                                @endforeach
                            @endif
                        </div>

                    </div>

                    <div class="pt-4 d-flex align-items-center">
                        <h1 class="text-black design-title">{{ $project->row_two_title }}</h1>
                        <span class="line ms-2"></span>
                    </div>

                    <p class="pt-4">

                        {!! $project->row_two_description !!}
                    </p>

                    <div class="pt-3 text-start">

                        @if (!empty($technologys) && is_array($technologys))
                            <h6 class="mb-2">
                                Technology:
                                @foreach ($technologys as $id => $technology)
                                    <strong class="pe-2">{{ $technology['value'] }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    </strong>
                                @endforeach
                            </h6>
                        @endif

                        @if (!empty($plugins) && is_array($plugins))

                            <h6 class="mb-0">
                                Plugins Used:
                                @foreach ($plugins as $id => $plugin)
                                    <strong class="pe-2">{{ $plugin['value'] }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    </strong>
                                @endforeach
                            </h6>
                        @endif
                    </div>
                    <div class="py-3 d-flex align-items-center">
                        <span class="line "></span>
                    </div>
                    <div class="">

                        <h6 class="mb-2">
                            Project Duration: <strong>{{ $project->duration }}</strong>
                        </h6>

                        <h6 class="mb-0">
                            Executed Teams:
                            <a href="javascript:;"><strong class="text-black" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="See Our Legends">{{ $project->team }}</strong></a>
                        </h6>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Row Two Section  --}}

    <!-- Row Three Section -->
    <section class="py-5 contact-box-section">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-white">
                        <p class="">{{ $project->row_three_badge }}</p>
                        <h1 class="pt-2">
                            {{ $project->row_three_title }}
                        </h1>
                        <p class="pt-2">
                            {!! $project->row_three_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pt-3 text-center ps-5">
                        <a href="{{ route('pricing') }}" style="border-bottom: 1px solid #fff;"
                            class="explore-now-btn" data-animation-in="fadeInUp">
                            Our General Pricing
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Row Three Section  -->

    {{-- Gallery --}}
    <section>
        <div class="container pt-5">
            <div class="row">
                <div class="col-xs-12 text-start ps-lg-0 ps-2">
                    <div class="section__title" id="gallerySection">
                        <div class="pt-4 d-flex align-items-center">
                            <h1 class="text-black design-title">{{ $project->gallery_title }}</h1>
                            <span class="line ms-2"></span>
                        </div>
                        <p class="py-3">{!! $project->gallery_description !!}</p>
                    </div>
                </div>
            </div>

            <div class="row gallery-box-area">
                <div class="px-0 col-lg-12">
                    <div class="mb-3 d-flex">
                        <button class="tab-button active" data-target="all">All Pages</button>
                        <button class="tab-button" data-target="slider">Gallery</button>
                    </div>
                </div>

                <div class="ps-0 col-lg-12">
                    <!-- All Pages Tab -->
                    <div class="tab-content" id="all">
                        <div class="portfolio__img row gx-2">
                            @foreach ($galleryItems as $item)
                                <div class="col-lg-3 col-md-3">
                                    <div class="mb-2">
                                        <img class="h-auto w-100" style="object-fit: contain"
                                            src="{{ !empty($item['image']) ? url('storage/' . $item['image']) : '' }}"
                                            alt="{{ $item['alt'] }}" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Slider Tab -->
                    <div class="tab-content d-none ps-3" id="slider">
                        <div class="text-center slick-slider">
                            @foreach ($galleryItems as $item)
                                <div class="slick-slide">
                                    <div class="p-0 card porject-img">
                                        <div class="p-0 card-body">
                                            <img src="{{ !empty($item['image']) ? url('storage/' . $item['image']) : '' }}"
                                                alt="{{ $item['alt'] }}" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Custom Navigation Buttons -->
                        <div class="">
                            <button class="slick-prev-custom">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="slick-next-custom">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Gallery End -->

    <!-- Row Four -->
    <section class="py-5 cta-banners">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-white">
                        {{-- <p class="build-badge">{{ $project->row_four_badge }}</p> --}}
                        <p class="build-badge">About Project</p>
                        <h1 class="pt-4">{{ $project->row_four_title }}</h1>
                        <p class="pt-4">
                            {!! $project->row_four_description !!}
                        </p>
                        <div class="mb-3">
                            <a href="{{ $project->row_two_button_link }}" class=""
                                style="border-bottom: 1px solid white; position: absolute;right: 66%;margin-top: -40px;"
                                data-animation-in="fadeInUp">
                                {{ $project->row_two_button_name }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-end">
                        <a href="javascript:void(0)" class="mt-5 explore-now-btn" onclick="toggleForm()"
                            style="border-bottom: 1px solid #fff" id="toggleFormBtn" data-animation-in="fadeInUp">
                            I Want This {{ $project->name }}
                        </a>
                    </div>

                    <!-- The Form -->
                    <div id="formContainer" style="display: none">

                        <form action="{{ route('user.project-query.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="project_id" value="{{ $project->id }}">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="text-white form-label">Name
                                                <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control"
                                                id="exampleFormControlInput1" placeholder="Jonson Hebit" required />
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="text-white form-label">Email
                                                <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleFormControlInput1" placeholder="Jonson@example.com"
                                                required />
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1"
                                                class="text-white form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control"
                                                id="exampleFormControlInput1" placeholder="+880 1585864658" />
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="text-white form-label">Your
                                                Message <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                        </div>
                                        <div class="pt-3 mb-3 col-lg-12">
                                            <div class="checkbox-wrapper-want-this">

                                                <input class="inp-cbx" value="1" name="complete_template"
                                                    id="cbx-46" type="checkbox" />

                                                <label class="cbx" for="cbx-46"><span>
                                                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                        </svg></span><span class="text-white">I Want Complete
                                                        <strong
                                                            style="text-decoration: underline">{{ $project->name }}</strong>
                                                        Project Template.</span>
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="mt-4 btn-common-two w-100">
                                                Send This Request
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End the form -->
                </div>
            </div>
        </div>
    </section>
    <!-- Row Four -->

    {{-- Row Five  --}}
    {{-- <section style="background-color: #eee">
        <div class="py-5 container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center">
                            <h1 class="text-black design-title">{{ $project->row_five_title }}</h1>
                            <span class="line ms-2"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="pt-3">
                            {!! $project->row_five_description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- Row Five --}}
    <section style="background-color: #eee">
        <div class="container py-5">
            <div class="py-4 d-flex align-items-center">
                <h1 class="text-black design-title">Our Others Project</h1>
                <span class="line ms-2"></span>
            </div>
            <div class="text-center slick-slider-related">
                <div class="slick-slide">
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-12">
                            <div class="border row align-items-center releted-items">
                                <div class="px-0 col-lg-3 releted-img-box ps-3">
                                    <div class="img-one">
                                        <img src="http://127.0.0.1:8000/storage/project/row_two_image/r3wk3q3dFk1739680053.jpg"
                                            class="img-fluid rounded-3" alt="">
                                    </div>
                                    <div class="img-two">
                                        <img src="https://elements-resized.envatousercontent.com/elements-cover-images/6a24307b-4afd-47f9-8a2c-9f77f5ac0072?w=433&cf_fit=scale-down&q=85&format=auto&s=e3ae27548eac2c15bc250dbeecd63d3e8b34acd26642b9fd97c04d8a868817aa"
                                            class="img-fluid rounded-3" alt="">
                                    </div>
                                    <div class="img-three">
                                        <img src="https://img.freepik.com/free-vector/realistic-glassmorphism-mobile-app-template_23-2149441713.jpg"
                                            class="img-fluid rounded-3" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-8">
                                            <div class="">
                                                <img class="img-fluid" width="200"
                                                    src="http://127.0.0.1:8000/storage/project/logo/75deAxaUdu1739303934.png"
                                                    alt="">
                                            </div>
                                            <div class="pt-3">
                                                <h3 class="text-start animated site-text fw-bold"
                                                    data-animation-in="fadeInLeft" data-delay-in="0.2">
                                                    Tech Focus
                                                </h3>
                                                <p class="text-start">Tech Focus, developed by NGen IT that offers
                                                    a
                                                    comprehensive product search experience, enabling buyers to
                                                    connect
                                                    with top manufacturers across
                                                    six key industrial sectors.</p>
                                            </div>
                                            <div class="pt-3 text-start">
                                                <a href="#" class=" btn-common-three animated"
                                                    data-animation-in="fadeInUp">
                                                    View <i class="fas fa-arrow-right-long ps-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Custom Navigation Buttons -->
            <div class="">
                <button class="slick-prev-custom-related ">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slick-next-custom-related ">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    @include('frontend.pages.client')
    <!-- Partner Section End -->

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const toggleFormBtn = document.getElementById("toggleFormBtn");

                toggleFormBtn.addEventListener("click", function() {
                    const formContainer = document.getElementById("formContainer");
                    formContainer.style.display = "block";
                    toggleFormBtn.style.display = "none";
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.tab-button').on('click', function() {
                    const target = $(this).data('target');

                    // Toggle active button
                    $('.tab-button').removeClass('active');
                    $(this).addClass('active');

                    // Show selected tab and hide others
                    $('.tab-content').addClass('d-none');
                    $('#' + target).removeClass('d-none');
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".explore-now-btn").click(function() {
                    $(".hidden-section").fadeToggle(1000); // Toggles the visibility of the section
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // Initialize slick slider
                const $slider = $('.slick-slider');

                if (!$slider.hasClass('slick-initialized')) {
                    $slider.slick({
                        centerMode: true,
                        centerPadding: '60px',
                        slidesToShow: 1,
                        arrows: false, // Disable default arrows
                        dots: true,
                        autoplay: true, // Enable autoplay
                        autoplaySpeed: 2000, // 2 seconds per slide
                    });
                }

                // Custom "Previous" button functionality
                $(document).on('click', '.slick-prev-custom', function() {
                    $slider.slick('slickPrev');
                });

                $(document).on('click', '.slick-next-custom', function() {
                    $slider.slick('slickNext');
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // Initialize slick slider
                const $slider = $('.slick-slider-related');

                if (!$slider.hasClass('slick-initialized')) {
                    $slider.slick({
                        centerMode: true,
                        slidesToShow: 1,
                        arrows: false, // Disable default arrows
                        dots: true,
                        autoplay: true, // Enable autoplay
                        autoplaySpeed: 2000, // 2 seconds per slide
                    });
                }

                // Custom "Previous" button functionality
                $(document).on('click', '.slick-prev-custom-related', function() {
                    $slider.slick('slickPrev');
                });

                $(document).on('click', '.slick-next-custom-related', function() {
                    $slider.slick('slickNext');
                });
            });
        </script>
    @endpush

</x-frontend-app-layout>
