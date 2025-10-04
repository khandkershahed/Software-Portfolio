<x-frontend-app-layout :title="'Project'">
    <div class="container-fluid image-overlay-section">
        <div class="row">
            <div class="p-0 col-lg-12 position-relative">
                <img class="w-100 img-fluid"
                    src="{{ asset('frontend/assets/images/templates.jpg') }}" alt=""
                    style="object-fit: cover">

                <!-- Overlay Title -->
                <div class="text-center overlay-title-common">
                    <h1 class="text-white fw-bold">Web Templates</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="py-5">
                    <h1 class="mx-auto text-center w-50">Templates We Offer</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="d-flex justify-content-center">
                    <ul class="custom-tab-nav" id="myTab" role="tablist">
                        <li class="custom-tab-item" role="presentation">
                            <button class="custom-tab-btn active" id="socialMediaPost" data-bs-toggle="tab"
                                data-bs-target="#socialMediaPost-pane" type="button" role="tab"
                                aria-controls="socialMediaPost-pane" aria-selected="true">Social Media Post</button>
                        </li>
                        <li class="custom-tab-item" role="presentation">
                            <button class="custom-tab-btn" id="flayertab" data-bs-toggle="tab"
                                data-bs-target="#flayertab-pane" type="button" role="tab"
                                aria-controls="flayertab-pane" aria-selected="false">Flyer</button>
                        </li>
                        <li class="custom-tab-item" role="presentation">
                            <button class="custom-tab-btn" id="visitingCardtab" data-bs-toggle="tab"
                                data-bs-target="#visitingCardtab-pane" type="button" role="tab"
                                aria-controls="visitingCardtab-pane" aria-selected="false">Visitin Card</button>
                        </li>
                        <li class="custom-tab-item" role="presentation">
                            <button class="custom-tab-btn" id="menustab" data-bs-toggle="tab"
                                data-bs-target="#menustab-pane" type="button" role="tab"
                                aria-controls="menustab-pane" aria-selected="false">Menus</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="socialMediaPost-pane" role="tabpanel"
                        aria-labelledby="socialMediaPost" tabindex="0">
                        <div class="container py-4">
                            <h3 class="mb-4">Graphic Design Showcase</h3>
                            <div class="row g-4">
                                <!-- Card item -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-danger position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Most Selling
                                            </span>
                                            <img src="{{ asset('/images/graphic/social-1.jpg') }}" class="card-img-top" alt="Design Preview">
                                            <div class="card-body">
                                                <h5 class="card-title">Creative Design Template</h5>
                                                <p class="card-text">A professional layout ideal for marketing and social campaigns.</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-success position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                New
                                            </span>
                                            <img src="{{ asset('/images/graphic/social-2.jpg') }}" class="card-img-top" alt="Design Preview">
                                            <div class="card-body">
                                                <h5 class="card-title">Modern Graphic Layout</h5>
                                                <p class="card-text">Clean and minimal design for promotional use.</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-warning text-dark position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Trending
                                            </span>
                                            <img src="{{ asset('/images/graphic/social-3.jpg') }}" class="card-img-top" alt="Design Preview">
                                            <div class="card-body">
                                                <h5 class="card-title">Elegant Design Pack</h5>
                                                <p class="card-text">Aesthetic layout suitable for digital or print purposes.</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-primary position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Featured
                                            </span>
                                            <img src="{{ asset('/images/graphic/social-4.jpg') }}" class="card-img-top" alt="Design Preview">
                                            <div class="card-body">
                                                <h5 class="card-title">Creative Poster Design</h5>
                                                <p class="card-text">High-quality poster template for campaigns and promotions.</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-info text-dark position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Popular
                                            </span>
                                            <img src="{{ asset('/images/graphic/social-5.jpg') }}" class="card-img-top" alt="Design Preview">
                                            <div class="card-body">
                                                <h5 class="card-title">Minimal Branding Concept</h5>
                                                <p class="card-text">Simple yet effective template for brand identity visuals.</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-success position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                New
                                            </span>
                                            <img src="{{ asset('/images/graphic/social-6.jpg') }}" class="card-img-top" alt="Design Preview">
                                            <div class="card-body">
                                                <h5 class="card-title">Professional Design Set</h5>
                                                <p class="card-text">Versatile graphic set ideal for multiple design purposes.</p>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="flayertab-pane" role="tabpanel" aria-labelledby="flayertab-tab" tabindex="0">
                        <div class="container py-4">
                            <h3 class="mb-4">Flyer / Leaflet Designs</h3>
                            <div class="row g-4">
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-danger position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Top
                                            </span>
                                            <img src="{{ asset('/images/graphic/flyer-1.jpg') }}" class="card-img-top" alt="Flyer Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Creative Flyer Template</h5>
                                                <p class="card-text">Eye-catching layout perfect for promotions and events.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-primary position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Featured
                                            </span>
                                            <img src="{{ asset('/images/graphic/flyer-2.jpg') }}" class="card-img-top" alt="Flyer Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Modern Business Flyer</h5>
                                                <p class="card-text">Professional layout ideal for corporate and startup branding.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-warning text-dark position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Trending
                                            </span>
                                            <img src="{{ asset('/images/graphic/flyer-3.jpg') }}" class="card-img-top" alt="Flyer Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Minimal Event Leaflet</h5>
                                                <p class="card-text">Simple yet elegant design suitable for any event.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-success position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                New
                                            </span>
                                            <img src="{{ asset('/images/graphic/flyer-4.jpg') }}" class="card-img-top" alt="Flyer Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Corporate Marketing Flyer</h5>
                                                <p class="card-text">Perfect for professional marketing and advertising use.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-info text-dark position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Popular
                                            </span>
                                            <img src="{{ asset('/images/graphic/flyer-5.jpg') }}" class="card-img-top" alt="Flyer Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Creative Promotion Flyer</h5>
                                                <p class="card-text">Vibrant and colorful layout for brand promotions.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-secondary position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Limited
                                            </span>
                                            <img src="{{ asset('/images/graphic/flyer-6.jpg') }}" class="card-img-top" alt="Flyer Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Exclusive Flyer Design</h5>
                                                <p class="card-text">Unique design crafted for premium marketing campaigns.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-success position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                New
                                            </span>
                                            <img src="{{ asset('/images/graphic/flyer-7.jpg') }}" class="card-img-top" alt="Flyer Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Stylish Event Leaflet</h5>
                                                <p class="card-text">Modern template for music, festivals, or community events.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-danger position-absolute" style="top: 10px; left: 10px; z-index: 10;">
                                                Top
                                            </span>
                                            <img src="{{ asset('/images/graphic/flyer-8.jpg') }}" class="card-img-top" alt="Flyer Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Promotional Flyer Pack</h5>
                                                <p class="card-text">A complete set for quick and easy campaign promotion.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="visitingCardtab-pane" role="tabpanel"
                        aria-labelledby="visitingCardtab" tabindex="0">
                        <div class="container py-4">
                            <h3 class="mb-4">Visiting Card / Business Card Designs</h3>
                            <div class="row g-4">

                                <!-- Card 1 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-danger position-absolute" style="top:10px;left:10px;z-index:10;">Top</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-2.jpg') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Professional Business Card</h5>
                                                <p class="card-text">Clean and minimal layout for corporate use.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-primary position-absolute" style="top:10px;left:10px;z-index:10;">Featured</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-3.jpg') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Modern Card Layout</h5>
                                                <p class="card-text">Stylish business card with professional look.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-warning text-dark position-absolute" style="top:10px;left:10px;z-index:10;">Trending</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-4.jpg') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Creative Card Template</h5>
                                                <p class="card-text">Perfect for freelancers and designers.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 4 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-success position-absolute" style="top:10px;left:10px;z-index:10;">New</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-7.jpg') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Corporate Visiting Card</h5>
                                                <p class="card-text">Elegant layout for company branding.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 5 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-info text-dark position-absolute" style="top:10px;left:10px;z-index:10;">Popular</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-6.jpg') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Classic Design</h5>
                                                <p class="card-text">Timeless design for all business types.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 6 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-secondary position-absolute" style="top:10px;left:10px;z-index:10;">Limited</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-5.jpg') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Minimal Template</h5>
                                                <p class="card-text">Simple, elegant, and easy to customize.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 7 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-success position-absolute" style="top:10px;left:10px;z-index:10;">New</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-8.jpg') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Elegant Layout</h5>
                                                <p class="card-text">Great for creative professionals and agencies.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 8 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-danger position-absolute" style="top:10px;left:10px;z-index:10;">Top</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-9.webp') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Premium Card Design</h5>
                                                <p class="card-text">Luxurious feel for high-end clients.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 9 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-primary position-absolute" style="top:10px;left:10px;z-index:10;">Featured</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-10.webp') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Luxury Business Card</h5>
                                                <p class="card-text">Perfect for premium corporate identity.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 10 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-warning text-dark position-absolute" style="top:10px;left:10px;z-index:10;">Trending</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-11.jpg') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Clean Modern Design</h5>
                                                <p class="card-text">Sharp edges and bold typography for impact.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 11 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-none card position-relative h-100">
                                            <span class="badge bg-success position-absolute" style="top:10px;left:10px;z-index:10;">New</span>
                                            <img src="{{ asset('/images/graphic/visiting_card-12.webp') }}" class="card-img-top" alt="Visiting Card Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Modern Corporate Card</h5>
                                                <p class="card-text">A great option for any modern business.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="menustab-pane" role="tabpanel" aria-labelledby="menustab" tabindex="0">
                        <div class="container py-4">
                            <h3 class="mb-4">Menu Designs</h3>
                            <div class="row g-4">

                                <!-- Card 1 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-info position-absolute" style="top:10px; left:10px; z-index:10;">Popular</span>
                                            <img src="{{ asset('/images/graphic/menu-1.jpg') }}" class="card-img-top" alt="Menu Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Creative Menu Layout</h5>
                                                <p class="card-text">Stylish layout perfect for restaurants and food services.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-success position-absolute" style="top:10px; left:10px; z-index:10;">New</span>
                                            <img src="{{ asset('/images/graphic/menu-2.jpg') }}" class="card-img-top" alt="Menu Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Modern Menu Template</h5>
                                                <p class="card-text">Clean and readable design for cafes and small restaurants.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <img src="{{ asset('/images/graphic/menu-3.jpg') }}" class="card-img-top" alt="Menu Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Minimalist Menu Design</h5>
                                                <p class="card-text">Simple layout focusing on readability and style.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 4 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <img src="{{ asset('/images/graphic/menu-4.jpg') }}" class="card-img-top" alt="Menu Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Elegant Menu Template</h5>
                                                <p class="card-text">Designed for upscale cafes and restaurants.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 5 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <img src="{{ asset('/images/graphic/menu-5.jpg') }}" class="card-img-top" alt="Menu Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Food Menu Layout</h5>
                                                <p class="card-text">Vibrant and easy-to-read menu for daily specials.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- Card 6 -->
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://www.behance.net/studiongenit">
                                        <div class="border-0 shadow-sm card position-relative h-100">
                                            <span class="badge bg-warning text-dark position-absolute" style="top:10px; left:10px; z-index:10;">Trending</span>
                                            <img src="{{ asset('/images/graphic/menu-6.jpg') }}" class="card-img-top" alt="Menu Design">
                                            <div class="card-body">
                                                <h5 class="card-title">Restaurant Menu Pack</h5>
                                                <p class="card-text">Modern design suitable for all types of food businesses.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-frontend-app-layout>