<x-frontend-app-layout :title="'Project'">
    <!-- Contact Section Start -->
    <section>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-section">
                        <div class="d-flex">
                            <img class="w-100 img-fluid"
                                src="{{ !empty($banner->image) && file_exists('storage/' . $banner->image) ? url('storage/' . $banner->image) : asset('images/no-banner.jpg') }}"
                                alt="" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Project Section Start --}}
    <section>
        <div class="container my-5">

            <!-- Tab navigation for categories -->
            <ul class="nav nav-tabs projects-tabs" id="myTab" role="tablist">
                @foreach ($categorys as $index => $category)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link {{ $index === 0 ? 'active' : '' }}" id="category-{{ $category->id }}-tab"
                            data-bs-toggle="tab" href="#category-{{ $category->id }}" role="tab"
                            aria-controls="category-{{ $category->id }}"
                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <!-- Tab content for each category -->
            <div class="tab-content" id="myTabContent">
                @foreach ($categorys as $index => $category)
                    <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="category-{{ $category->id }}"
                        role="tabpanel" aria-labelledby="category-{{ $category->id }}-tab">
                        <div class="row mt-5">
                            @foreach ($category->projects as $project)
                                <div class="col-md-6">
                                    <a href="{{ route('projects.details', $project->slug) }}">
                                        <div class="card mb-3 border-0 shadow-sm">

                                            <div class="slick-slider-projects" style="height: 300px; overflow:hidden;">
                                                <div class="image-container">
                                                    <img src="{{ !empty($project->image_one) ? url('storage/' . $project->image_one) : '' }}"
                                                        class="card-img-top zoom-effect" alt="dadavaai template one" />
                                                </div>
                                                <div class="image-container">
                                                    <img src="{{ !empty($project->image_two) ? url('storage/' . $project->image_two) : '' }}"
                                                        class="card-img-top zoom-effect" alt="dadavaai template one" />
                                                </div>
                                                <div class="image-container">
                                                    <img src="{{ !empty($project->image_three) ? url('storage/' . $project->image_three) : '' }}"
                                                        class="card-img-top zoom-effect" alt="dadavaai template one" />
                                                </div>
                                            </div>

                                            <div class="card-body bg-light">
                                                <h5 class="card-title">{{ $project->name }}</h5>
                                                <p class="card-text">{{ $project->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- Project Section End --}}

    @include('frontend.pages.partner')

    @include('frontend.pages.client')
    <!-- Partner Section End -->

    @push('scripts')
        <script>
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
        </script>

        <script>
            $(document).ready(function() {
                $(".slick-slider-projects").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 2000, // Adjust speed for smooth transitions
                    autoplay: true, // Enable autoplay
                    autoplaySpeed: 2000, // Set a value to allow seamless autoplay
                    arrows: false,
                    dots: false,
                    draggable: true, // Enable mouse dragging
                    swipe: true, // Ensure swipe is enabled
                    touchMove: true, // Ensure touch movements work
                    infinite: true, // Allow continuous scrolling
                });
            });
        </script>
    @endpush

</x-frontend-app-layout>
