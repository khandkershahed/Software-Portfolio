<x-frontend-app-layout :title="'Project Details'">

    <!-- Banner Section Start -->
    <section>
        <div class="banner banner3"
            style="background-image: url('{{ !empty($project->row_one_image) ? url('storage/' . $project->row_one_image) : '' }}');">
            <div class="container project-banner-container">
                <div class="row gx-5 align-items-center">
                    <div class="col-sm-8">
                        <div class="slide__content--headings text-left">
                            <p class="animated top-title" data-animation-in="fadeInLeft" data-delay-in="0.2">
                                {{ $project->row_one_badge }}
                            </p>
                            <h2 class="animated title" data-animation-in="fadeInLeft">
                                {{ $project->row_one_title }}
                            </h2>
                            <p class="animated top-title pt-4 pe-5 w-75" style="text-align: justify">
                                {!! $project->row_one_description !!}
                            </p>
                            <div class="d-flex align-items-center pt-5">
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

                    <div class="col-sm-4">
                        <div class="slide__content--headings text-left projects-menus">

                            <h3 class="animated text-center site-text fw-bold" data-animation-in="fadeInLeft"
                                data-delay-in="0.2">
                                Others Releted Projects
                            </h3>

                            <div class="row justify-content-between align-items-center pt-3">

                                @foreach ($allprojects as $allproject)
                                    <div class="col-lg-12">
                                        <a href="{{ route('projects.details', $allproject->slug) }}" class="">
                                            <h4 class="animated mb-3 p-3 sub-title text-center site-text"
                                                data-animation-in="fadeInLeft">
                                                {{ $allproject->name }}
                                            </h4>
                                        </a>
                                    </div>
                                @endforeach


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
                            <button class="down-btn">
                                <i class="fa-solid fa-arrow-down-long"></i>
                                <div class="sonar-wave"></div>
                                <!-- Sonar wave element -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    {{-- Row Two Section  --}}
    <section class="py-5 pt-0">
        <div class="container py-5 pt-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div>
                        <img class="img-fluid"
                            src="{{ !empty($project->row_two_image) ? url('storage/' . $project->row_two_image) : '' }}"
                            alt="" />
                    </div>
                    <p class="text-center">
                        <strong>{{ $project->row_two_image_title }}</strong>
                        <br />

                        {!! $project->row_two_image_description !!} <br />

                        {{-- <strong>Explore now:</strong> --}}

                        {{-- <a href="https://www.discountzshop.com/" class="text-primary"></a> --}}

                    </p>
                </div>
                <div class="col-lg-6">

                    <div class="">
                        <img class="img-fluid" width="200"
                            src="{{ !empty($project->logo) ? url('storage/' . $project->logo) : '' }}"
                            alt="" />
                    </div>

                    <div class="d-flex align-items-center pt-4">
                        <h6 class="mb-0">Used Platform:</h6>

                        <div class="ps-2">
                            @php
                                $platforms[] = json_decode($project->platform, true); // Decode to array
                            @endphp

                            @if ($platforms)
                                <!-- Check if it is an array -->
                                @foreach ($platforms as $id => $platform)
                                    <span class="badge p-badge rounded-pill text-black">{{ $platform }}</span>
                                @endforeach
                            @else
                                <span>No platforms available</span>
                            @endif
                        </div>

                    </div>

                    <div class="d-flex align-items-center pt-4">
                        <h1 class="design-title text-black">{{ $project->row_two_title }}</h1>
                        <span class="line ms-2"></span>
                    </div>

                    <p class="pt-4">

                        {!! $project->row_two_description !!}
                    </p>

                    <div class="text-start pt-3">

                        <h6 class="mb-2">
                            Technology: <strong class="pe-2">Chat Bot,</strong><strong class="pe-2">Chat
                                Bot,</strong><strong class="pe-2">Chat Bot,</strong><strong>Chat Bot</strong>,
                        </h6>

                        <h6 class="mb-0">
                            Plugins Used: <strong class="pe-2">Scurm,</strong><strong class="pe-2">Bridge
                                Etc.</strong>
                        </h6>

                    </div>
                    <hr />
                    <div class="pb-3">

                        <h6 class="mb-2">
                            Project Duration: <strong>{{ $project->duration }}</strong>
                        </h6>

                        <h6 class="mb-0">
                            Executed Teams:
                            <a href="javascript:;"><strong class="text-black" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="See Our Legends">{{ $project->team }}</strong></a>
                        </h6>

                    </div>

                    <div class="">
                        <a href="{{ $project->row_two_button_link }}" class="btn-common-three animated mt-3"
                            data-animation-in="fadeInUp">
                            {{ $project->row_two_button_name }}
                        </a>
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
                    <div class="text-center pt-3 ps-5">
                        <a href="" style="border-bottom: 1px solid #fff" class="explore-now-btn"
                            data-animation-in="fadeInUp">
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
                    <div class="section__title">
                        <div class="d-flex align-items-center pt-4">
                            <h1 class="design-title text-black">{{ $project->gallery_title }}</h1>
                            <span class="line ms-2"></span>
                        </div>
                        <p class="py-3">{!! $project->gallery_description !!}</p>
                    </div>
                </div>
            </div>

            <div class="row gallery-box-area">
                <div class="col-lg-2 px-0 gallery-box-sidebar">
                    <div class="portfolio__filter filter__home p-0">
                        <button class="filter-button" data-filter="all" data-text="All Site Images">
                            All Pages
                        </button>
                        <button class="filter-button" data-filter="home-page" data-text="Home Page">
                            Home Page
                        </button>
                        {{-- <button class="filter-button" data-filter="astel-page" data-text="Astel Page">
                            Astell Page
                        </button> --}}
                        <button class="filter-button" data-filter="authentication" data-text="Authentication">
                            Authentication
                        </button>
                        <button class="filter-button" data-filter="back-office" data-text="Admin Pages">
                            Back Admin
                        </button>
                    </div>
                </div>

                <div class="col-lg-10 px-0">
                    <div class="d-flex justify-content-between align-items-center bg-light mb-2">
                        <h5 class="py-3 ps-4 text-center mb-0" id="dynamic-title">
                            All Pages
                        </h5>
                        {{-- <h5 class="py-3 pe-4 text-center mb-0">
                            <i class="fa-regular fa-clock"></i> 25-11-2024
                        </h5> --}}
                    </div>

                    <div class="portfolio__img row ps-4">
                        <!-- Home Page Start -->
                        @foreach ($galleryHomePages as $galleryHomePage)
                            <div class="col-lg-3 col-md-3 px-1">
                                <div class="filter p0 mb-2 home-page">
                                    <a href="{{ !empty($galleryHomePage->image) ? url('storage/' . $galleryHomePage->image) : '' }}"
                                        data-fancybox="gallery">
                                        <img src="{{ !empty($galleryHomePage->image) ? url('storage/' . $galleryHomePage->image) : '' }}"
                                            alt="Home Page Image" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <!-- Home Page End -->

                        <!-- Astel Pages Start -->
                        {{-- <div class="col-lg-3 col-md-3 px-1">
                            <div class="filter p0 mb-2 astel-page">
                                <a href="./assets/images/New folder/Pages/astel-Home-hero.png"
                                    data-fancybox="gallery">
                                    <img src="./assets/images/New folder/Pages/astel-Home-hero.png"
                                        alt="Astel Page Image" />
                                </a>
                            </div>
                        </div> --}}
                        <!-- Astel Pages End -->

                        <!-- Authentication Start -->
                        @foreach ($galleryAuthentications as $galleryAuthentication)
                            <div class="col-lg-3 col-md-3 px-1">
                                <div class="filter p0 mb-2 authentication">
                                    <a href="{{ !empty($galleryAuthentication->image) ? url('storage/' . $galleryAuthentication->image) : '' }}"
                                        data-fancybox="galleryAuthentication">
                                        <img src="{{ !empty($galleryAuthentication->image) ? url('storage/' . $galleryAuthentication->image) : '' }}"
                                            alt="Authentication Image" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <!-- Authentication End -->

                        <!-- Admin Gallery Start -->
                        @foreach ($galleryAdmins as $galleryAdmin)
                            <div class="col-lg-3 col-md-3 px-1">
                                <div class="filter p0 mb-2 back-office">
                                    <a href="{{ !empty($galleryAdmin->image) ? url('storage/' . $galleryAdmin->image) : '' }}"
                                        data-fancybox="gallery">
                                        <img src="{{ !empty($galleryAdmin->image) ? url('storage/' . $galleryAdmin->image) : '' }}"
                                            alt="Back Office Image" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <!-- Admin Gallery End -->

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
                        <p class="build-badge">{{ $project->row_four_badge }}</p>
                        <h1 class="pt-4">{{ $project->row_four_title }}</h1>
                        <p class="pt-4">
                            {!! $project->row_four_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-end">
                        <a href="javascript:void(0)" class="explore-now-btn mt-5"
                            style="border-bottom: 1px solid #fff" id="toggleFormBtn" data-animation-in="fadeInUp">
                            I Want This DiscountZshop
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
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-white">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                id="exampleFormControlInput1" placeholder="Jonson Hebit" />
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-white">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleFormControlInput1" placeholder="Jonson@example.com" />
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-white">Phone</label>
                                            <input type="text" name="phone" class="form-control"
                                                id="exampleFormControlInput1" placeholder="+880 1585864658" />
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="exampleFormControlInput1" class="form-label text-white">Your
                                                Message</label>
                                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3 pt-3 col-lg-12">
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
                                            <button type="submit" class="btn-common-two w-100 mt-4">
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
    <section style="background-color: #eee">
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center">
                            <h1 class="design-title text-black">{{ $project->row_five_title }}</h1>
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
    </section>
    {{-- Row Five  --}}

    @include('frontend.pages.client')
    <!-- Partner Section End -->

    @push('scripts')
        <script>
            // JavaScript to toggle the form and button visibility
            document
                .getElementById("toggleFormBtn")
                .addEventListener("click", function() {
                    const formContainer = document.getElementById("formContainer");
                    const toggleFormBtn = document.getElementById("toggleFormBtn");

                    // Show the form and hide the button
                    formContainer.style.display = "block";
                    toggleFormBtn.style.display = "none";
                });
        </script>

        <script>
            // 1. querySelector
            var containerEl = document.querySelector("ul.container");
            var mixer = mixitup(containerEl, {
                animation: {
                    effects: "fade translateZ(-100px)",
                    effectsIn: "fade translateY(-100%)",
                    easing: "cubic-bezier(0.645, 0.045, 0.355, 1)",
                },
            });

            // fancybox insilaze & options //
            $("[data-fancybox]").fancybox({
                /* "TRICK" selector - group only visible items */
                selector: ".mix:visible a",
                loop: true,
                hash: true,
                transitionEffect: "slide",
                /* zoom VS next////////////////////
                clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
                clickContent: function(current, event) {
                    return current.type === "image" ? "next" : false;
                },
            });
        </script>

        <script>
            $(document).ready(function() {
                // Initially show only the first 4 items and set "all" as active
                $(".filter").hide(); // Hide all items initially
                $(".filter").show(); // Show only the first 4 items
                $(".filter-button[data-filter='all']").addClass("active");

                $(".filter-button").click(function() {
                    var value = $(this).attr("data-filter");

                    if (value === "all") {
                        // Show only the first 4 items for "all"
                        $(".filter").hide("1000");
                        $(".filter").show("1000");
                    } else {
                        // Show items matching the selected filter
                        $(".filter")
                            .not("." + value)
                            .hide("3000");
                        $(".filter")
                            .filter("." + value)
                            .show("3000");
                    }

                    // Update active button class
                    $(".filter-button").removeClass("active");
                    $(this).addClass("active");
                });
            });
            document.addEventListener("DOMContentLoaded", function() {
                const buttons = document.querySelectorAll(".filter-button");
                const dynamicTitle = document.getElementById("dynamic-title");

                buttons.forEach((button) => {
                    button.addEventListener("click", function() {
                        const newText = button.getAttribute("data-text");
                        dynamicTitle.textContent = newText;
                    });
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $(".carousel").slick({
                    slidesToShow: 3,
                    margin: 10,
                    gap: 10,
                    dots: true,
                    centerMode: true,
                });
            });

            // Slick version 1.5.8
        </script>
        <script>
            $(document).ready(function() {
                $(".explore-now-btn").click(function() {
                    $(".hidden-section").fadeToggle(1000); // Toggles the visibility of the section
                });
            });
        </script>

        {{-- <script>
            $(".partners-carousel").slick({
                speed: 5000, // Control the speed of continuous scrolling
                autoplay: true, // Enable autoplay
                autoplaySpeed: 0, // Make it seamless
                cssEase: "linear", // Smooth linear animation
                slidesToShow: 8, // Number of slides visible
                slidesToScroll: 1, // Number of slides to scroll at once
                infinite: true, // Enable infinite scrolling
                swipeToSlide: true, // Allow swiping directly to a slide
                centerMode: true, // Center the current slide
                focusOnSelect: true, // Select slide on focus
                pauseOnHover: false, // Prevent pausing on hover
                pauseOnFocus: false, // Prevent pausing on focus
                arrows: false, // Disable navigation arrows
                draggable: true, // Enable dragging with mouse
                responsive: [{
                        breakpoint: 750,
                        settings: {
                            slidesToShow: 3, // Adjust slides for small screens
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2, // Adjust slides for very small screens
                        },
                    },
                ],
            });
        </script> --}}

        <!-- JavaScript (Bootstrap) -->
        {{-- <script>
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(
                document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipTriggerList.forEach(function(tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
        </script> --}}
    @endpush

</x-frontend-app-layout>
