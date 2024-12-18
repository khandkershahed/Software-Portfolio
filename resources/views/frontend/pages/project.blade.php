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
                            <!-- Loop through each project for the current category -->
                            @foreach ($category->projects as $project)
                                <div class="col-md-6">
                                    <a href="">
                                        <div class="card mb-3 border-0 shadow-sm">

                                            <div class="slick-slider-projects">

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


</x-frontend-app-layout>
