<x-frontend-app-layout :title="'Project'">
    <!-- Contact Section Start -->
    <style>
        .site-text p {
            color: #001624 !important;
        }
    </style>
    <section>
        <div class="px-0 container-fluid">
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

    <section>
        <div class="container my-5 mb-0">
            <!-- Tab navigation for categorys -->
            <ul class="nav nav-tabs projects-tabs" id="myTab" role="tablist">
                @foreach ($categorys as $index => $category)
                    @php $hasProjects = $category->projects->isNotEmpty(); @endphp
                    @if ($hasProjects)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $index === 0 ? 'active' : '' }}" id="category-{{ $category->id }}-tab"
                                data-bs-toggle="tab" href="#category-{{ $category->id }}" role="tab"
                                aria-controls="category-{{ $category->id }}"
                                aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>

            <!-- Tab content for each category -->
            <div class="tab-content" id="myTabContent">
                @foreach ($categorys as $index => $category)
                    @php $hasProjects = $category->projects->isNotEmpty(); @endphp
                    @if ($hasProjects)
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                            id="category-{{ $category->id }}" role="tabpanel"
                            aria-labelledby="category-{{ $category->id }}-tab">
                            <div class="mt-5 row">
                                @foreach ($category->projects as $project)
                                    <div class="col-lg-12">
                                        <div class="section-stack">
                                            <ul class="stack-cards js-stack-cards">
                                                <li class="stack-cards__item js-stack-cards__item">
                                                    <a class="site-text"
                                                        href="{{ route('projects.details', $project->slug) }}">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img class="img-fluid"
                                                                        src="{{ !empty($project->image_one) ? url('storage/' . $project->image_one) : '' }}"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <h1 class="site-text">{{ $project->name }}</h1>
                                                                <p class="site-text"
                                                                    style="text-align: justify;font-size:18px; color:#001624 !important;">
                                                                    {!! $project->row_one_description !!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
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
