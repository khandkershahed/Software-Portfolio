<x-frontend-app-layout :title="'Project'">
    <!-- Contact Section Start -->
    <style>
        .site-text p {
            color: #001624 !important;
        }

        /* Dots container */
        .slick-dots {
            position: absolute;
            bottom: 5px;
            display: flex !important;
            justify-content: center;
            gap: 5px;
        }

        /* Default (inactive) dot */
        .slick-dots li {
            width: 20px;
            height: 8px;
            border-radius: 8px;
            background: #1e2129;
            transition: all 0.3s ease;
        }

        /* Active dot gets larger and colored */
        .slick-dots li.slick-active {
            width: 50px;
            height: 10px;
            background: linear-gradient(220deg, rgb(234, 64, 111) 19%, rgb(253, 93, 71) 85%);
        }

        /* Remove button default styles */
        .slick-dots li button {
            opacity: 0;
            width: 100%;
            height: 100%;
            padding: 0;
            border: none;
            background: transparent;
            cursor: pointer;
        }

        /* Optional: remove bottom margin */
        .slick-dotted.slick-slider {
            margin-bottom: 0;
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
        <div class="container my-5 mb-5">
            <!-- Tab navigation for categorys -->
            <ul class="nav nav-tabs projects-tabs" id="myTab" role="tablist">
                @php $activeSet = false; @endphp
                @foreach ($categorys as $category)
                    @php $hasProjects = $category->projects->isNotEmpty(); @endphp
                    @if ($hasProjects)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ !$activeSet ? 'active' : '' }}" id="category-{{ $category->id }}-tab"
                                data-bs-toggle="tab" href="#category-{{ $category->id }}" role="tab"
                                aria-controls="category-{{ $category->id }}"
                                aria-selected="{{ !$activeSet ? 'true' : 'false' }}">
                                {{ $category->name }}
                            </a>
                        </li>
                        @php $activeSet = true; @endphp
                    @endif
                @endforeach

            </ul>

            <!-- Tab content for each category -->
            <div class="tab-content" id="myTabContent">
                @php $tabactiveSet = false; @endphp
                @foreach ($categorys as $index => $category)
                    @php $hasProjects = $category->projects->isNotEmpty(); @endphp
                    @if ($hasProjects)
                        <div class="tab-pane fade {{ !$tabactiveSet ? 'show active' : '' }}"
                            id="category-{{ $category->id }}" role="tabpanel"
                            aria-labelledby="category-{{ $category->id }}-tab">
                            <div class="mt-5 row">
                                @foreach ($category->projects as $project)
                                    <div class="col-lg-12">
                                        <div class="section-stack">
                                            <ul class="mb-4 card">
                                                <li class="card-body">
                                                    <a class="site-text"
                                                        href="{{ route('projects.details', $project->slug) }}">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-6">
                                                                <!-- Slick RTL Slider -->
                                                                <div class="slick-slider-projects">
                                                                    @if (!empty($project->image_one))
                                                                        <div><img class="img-fluid rounded-2"
                                                                                src="{{ url('storage/' . $project->image_one) }}"
                                                                                alt=""></div>
                                                                    @endif
                                                                    @if (!empty($project->image_two))
                                                                        <div><img class="img-fluid rounded-2"
                                                                                src="{{ url('storage/' . $project->image_two) }}"
                                                                                alt=""></div>
                                                                    @endif
                                                                    @if (!empty($project->image_three))
                                                                        <div><img class="img-fluid rounded-2"
                                                                                src="{{ url('storage/' . $project->image_three) }}"
                                                                                alt=""></div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <h1 class="site-text">{{ $project->name }}</h1>
                                                                <p class="site-text"
                                                                    style="text-align: justify;font-size:18px; color:#001624 !important;">
                                                                    {!! $project->row_one_description !!}
                                                                </p>
                                                                <button type="submit"
                                                                    class="btn-common-three animated rounded-3"
                                                                    data-animation-in="fadeInUp">
                                                                    View Details <i class="fas fa-arrow-right-long ps-3"
                                                                        aria-hidden="true"></i>
                                                                </button>
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
                        @php $tabactiveSet = true; @endphp
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
                    speed: 2000,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: true,
                    dots: true,
                    draggable: true,
                    swipe: true,
                    touchMove: true,
                    infinite: true,
                });
            });
        </script>
    @endpush

</x-frontend-app-layout>
