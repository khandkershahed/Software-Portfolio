<x-frontend-app-layout :title="'Template Details'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@1.2.0/dist/css/splide.min.css">
    <div class="container-fluid image-overlay-section">
        <div class="row">
            <div class="p-0 col-lg-12 position-relative">
                <img class="w-100 img-fluid"
                    src="https://themeforest.kreativdev.com/bookapp/demo/assets/images/work-bg-1.png" alt=""
                    style="object-fit: cover">

                <!-- Overlay Title -->
                <div class="text-center overlay-title-common">
                    <h1 class="text-white fw-bold">Template Details</h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mt-5 thumbnail_slider">
                        <!-- Primary Slider Start-->
                        <div id="primary_slider">
                            <div class="splide__track">
                                <ul class="splide__list w-100">
                                    <li class="splide__slide">
                                        <img class="rounded-lg img-fluid"
                                            src="https://images.pexels.com/photos/1539225/pexels-photo-1539225.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="rounded-lg img-fluid"
                                            src="https://images.pexels.com/photos/858115/pexels-photo-858115.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="rounded-lg img-fluid"
                                            src="https://images.pexels.com/photos/13295150/pexels-photo-13295150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>

                                    <li class="splide__slide">
                                        <img class="rounded-lg img-fluid"
                                            src="https://images.pexels.com/photos/4275890/pexels-photo-4275890.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="rounded-lg img-fluid"
                                            src="https://images.pexels.com/photos/3511104/pexels-photo-3511104.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="rounded-lg img-fluid"
                                            src="https://images.pexels.com/photos/276484/pexels-photo-276484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="rounded-lg img-fluid"
                                            src="https://images.pexels.com/photos/33545/sunrise-phu-quoc-island-ocean.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="rounded-lg img-fluid"
                                            src="https://images.pexels.com/photos/2026452/pexels-photo-2026452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Thumbnal Slider Start-->
                        <div id="thumbnail_slider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img
                                            src="https://images.pexels.com/photos/1539225/pexels-photo-1539225.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img
                                            src="https://images.pexels.com/photos/858115/pexels-photo-858115.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img
                                            src="https://images.pexels.com/photos/13295150/pexels-photo-13295150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>

                                    <li class="splide__slide">
                                        <img
                                            src="https://images.pexels.com/photos/4275890/pexels-photo-4275890.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img
                                            src="https://images.pexels.com/photos/3511104/pexels-photo-3511104.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img
                                            src="https://images.pexels.com/photos/276484/pexels-photo-276484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img
                                            src="https://images.pexels.com/photos/33545/sunrise-phu-quoc-island-ocean.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                    <li class="splide__slide">
                                        <img
                                            src="https://images.pexels.com/photos/2026452/pexels-photo-2026452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1=1260">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Thumbnal Slider End-->
                    </div>
                    <div class="mt-5">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="border-0 nav-link template-details-tabs active" id="description-tab"
                                    data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab"
                                    aria-controls="description" aria-selected="true">
                                    Description
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="border-0 nav-link template-details-tabs" id="review-tab"
                                    data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab"
                                    aria-controls="review" aria-selected="false">
                                    Review
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="border-0 nav-link template-details-tabs" id="faqs-tab"
                                    data-bs-toggle="tab" data-bs-target="#faqs" type="button" role="tab"
                                    aria-controls="faqs" aria-selected="false">
                                    Faqs
                                </button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="pt-3 mb-5 tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6>About My Service</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci accusantium
                                            quas ullam pariatur veniam nobis vero dolore maxime ea eius voluptatum
                                            eveniet dolor voluptatem, hic commodi architecto repudiandae possimus
                                            voluptate. Alias esse fugiat quasi, magnam eos illo ipsa porro
                                            necessitatibus suscipit natus. Ratione officia consequuntur dolorem enim
                                            sit, doloremque labore, earum ipsam praesentium illo nemo, tenetur tempore
                                            reiciendis obcaecati repudiandae .</p>
                                        <h6>My Landing Page Ui Services</h6>
                                        <ul class="mt-3 ms-4" style="list-style-type: disc">
                                            <li>3 Sections Included</li>
                                            <li>Responsive Design</li>
                                            <li>Content Upload</li>
                                            <li>Opt-In Form</li>
                                            <li>Social Media Icons</li>
                                        </ul>
                                        <p class="pt-3">Brandy Digital Marketing Agency Website UI Kit will help your Digital Marketing Agency services. Came with clean and professional style, you can easily edit and customize all elements with design component which can speed up your design process.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                profile
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                messages
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-5">
                        <div class="d-flex justify-content-center">
                            <!-- Nav tabs -->
                            <ul class="border-0 nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item me-2" role="presentation">
                                    <button class="btn btn-singel rounded-0 active" id="home-tab"
                                        data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                                        aria-controls="home" aria-selected="true">
                                        Basic
                                    </button>
                                </li>
                                <li class="nav-item me-2" role="presentation">
                                    <button class="btn btn-singel rounded-0" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">
                                        Standard
                                    </button>
                                </li>
                                <li class="nav-item me-2" role="presentation">
                                    <button class="btn btn-singel rounded-0" id="messages-tab" data-bs-toggle="tab"
                                        data-bs-target="#messages" type="button" role="tab"
                                        aria-controls="messages" aria-selected="false">
                                        Premium
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="p-3 tab-content bg-light">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>General</h4>
                                    <h4>$20</h4>
                                </div>
                                <div>
                                    <p>2 logo design + basic brand guide which includes typography and color details</p>
                                </div>
                                <div class="pt-3 d-flex align-items-center">
                                    <h6 class="pe-3"><i class="fas fa-clock"></i> 2 Days Delivery</h6>
                                    <h6><i class="fas fa-repeat"></i> 2 Revisions</h6>
                                </div>
                                <div>
                                    <ul class="mt-3 ms-4" style="list-style-type: disc">
                                        <li>3 Sections Included</li>
                                        <li>Responsive Design</li>
                                        <li>Content Upload</li>
                                        <li>Opt-In Form</li>
                                        <li>Social Media Icons</li>
                                    </ul>
                                </div>
                                <div class="">
                                    <button type="submit" class="mt-5 btn-common-three animated w-100 rounded-3"
                                        data-animation-in="fadeInUp">
                                        Continue ($20) <i class="fas fa-arrow-right-long ps-3" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="mt-5 card">
                                    <div class="card-body">
                                        <h6>About The Seller</h6>
                                        <div class="mt-4 d-flex">
                                            <img class="border img-fluid me-3 rounded-3" width="100px"
                                                height="70px" style="object-fit: contain"
                                                src="https://www.ngenitltd.com/storage/LHhL5VKR2aoXEl2umO4UyKqj95qkKzvIPgZNfRNh.png"
                                                alt="">
                                            <div>
                                                <p class="mb-0">Robert Murray</p>
                                                <div>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star-half-stroke text-warning"></i>
                                                </div>
                                                <p class="mb-0">Top Rated Seller</p>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="justify-content-between d-flex align-items-center">
                                                <p class="mb-0">Total Order:</p>
                                                <p class="mb-0">200</p>
                                            </div>
                                            <div class="justify-content-between d-flex align-items-center">
                                                <p class="mb-0">Last Delivery:</p>
                                                <p class="mb-0">10 days ago</p>
                                            </div>
                                            <div class="justify-content-between d-flex align-items-center">
                                                <p class="mb-0">Member Since:</p>
                                                <p class="mb-0">2019</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <button type="submit" class="mt-5 btn-common-three animated w-100 rounded-3"
                                        data-animation-in="fadeInUp">
                                        Contact Now <i class="fas fa-arrow-right-long ps-3" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                profile
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                messages
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@1.2.0/dist/js/splide.min.js"></script>
        <script>
            // Primary slider.
            var primarySlider = new Splide('#primary_slider', {
                type: 'fade',
                heightRatio: 0.5,
                pagination: false,
                arrows: false,
                cover: true,
            });

            // Thumbnails slider.
            var thumbnailSlider = new Splide('#thumbnail_slider', {
                rewind: true,
                fixedWidth: 100,
                fixedHeight: 64,
                isNavigation: true,
                gap: 10,
                focus: 'center',
                pagination: false,
                cover: true,
                breakpoints: {
                    '600': {
                        fixedWidth: 66,
                        fixedHeight: 40,
                    }
                }
            }).mount();

            // sync the thumbnails slider as a target of primary slider.
            primarySlider.sync(thumbnailSlider).mount();
        </script>
    @endpush
</x-frontend-app-layout>
