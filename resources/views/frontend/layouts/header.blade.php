<header>
    <nav class="py-0 navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="img-fluid site-logo" src="{{ asset('frontend/assets/images/logo-white.png') }}"
                    alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#Id2"
                aria-controls="Id2">
                <span class="fw-normal">
                    <i class="text-black fa-solid fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'project' ? 'active' : '' }}"
                            href="{{ route('project') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'pricing' ? 'active' : '' }}"
                            href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'pricing' ? 'active' : '' }}"
                            href="{{ route('pricing') }}" type="button" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">Template</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link cst-dropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Template <span class="dropdown-icon">
                                <i class="fas fa-plus"></i>
                            </span>
                        </a>
                        <ul class="py-0 dropdown-menu rounded-0">
                            <li><a class="py-2 dropdown-item" href="{{ route('templates') }}">Web Site</a></li>
                            <li><a class="py-2 dropdown-item" href="#">Graphic</a></li>
                            <li><a class="py-2 dropdown-item" href="#">Motion</a></li>
                        </ul>
                    </li>

                    {{-- <li class="nav-item dropdown position-static" >
                        <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            Template
                        </a>
                        <ul class="bg-transparent border-0 dropdown-menu full-container-dropdown w-100">
                            <div class="container glass-bg">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h1>Website Template</h1>
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>asdasdad</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h1>Website Template</h1>
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>asdasdad</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h1>Website Template</h1>
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>asdasdad</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'about' ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'contact' ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'query' ? 'active' : '' }}"
                            href="{{ route('query') }}">Query</a>
                    </li>
                </ul>
                <div class="d-flex ms-3">
                    <a href="{{ optional($setting)->facebook_url }}"
                        class="btn-sm btn btn-outline-light me-2 rounded-0" type="submit">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="{{ optional($setting)->linkedin_url }}"
                        class="btn-sm btn btn-outline-light me-2 rounded-0" type="submit">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="{{ optional($setting)->instagram_url }}" class="btn-sm btn btn-outline-light rounded-0"
                        type="submit">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="Id2"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="pt-0 footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="logo-box">
                                <a class="navbar-brand" href="{{ route('home') }}">
                                    <img class="img-fluid site-logo"
                                        src="{{ asset('frontend/assets/images/logo-white.png') }}" alt="" />
                                </a>
                            </figure>
                            <div class="text">
                                <p>
                                    At NGen IT, we specialize in delivering cutting-edge
                                    technology solutions that drive businesses forward..
                                </p>
                            </div>
                            <ul class="footer-social">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 offset-lg-2 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">Services</div>
                            <ul class="list">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('project') }}">Projects</a></li>
                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="{{ route('query') }}">Query</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                        <div class="contact-widget footer-widget">
                            <div class="footer-title">Contacts</div>
                            <div class="text">
                                <p>Tell us about your next project.</p>
                                <p>{{ optional($setting)->phone_one }}</p>
                                <p>{{ optional($setting)->phone_two }}</p>
                                <p>{{ optional($setting)->contact_email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
