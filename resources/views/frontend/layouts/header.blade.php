<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-0" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="img-fluid site-logo" src="{{ asset('frontend/assets/images/logo-white.png') }}"
                    alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#Id2"
                aria-controls="Id2">
                <span class="fw-normal">
                    <i class="fa-solid fa-bars text-black"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'project' ? 'active' : '' }}" href="{{ route('project') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'pricing' ? 'active' : '' }}" href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::current()->getName() == 'query' ? 'active' : '' }}" href="{{ route('query') }}">Query</a>
                    </li>
                </ul>

                <div class="d-flex ms-3">

                    <a href="{{ optional($setting)->facebook_url }}" class="btn-sm btn btn-outline-light me-2 rounded-0"
                        type="submit">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="{{ optional($setting)->linkedin_url }}" class="btn-sm btn btn-outline-light me-2 rounded-0"
                        type="submit">
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
            <div class="footer-content pt-0">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="logo-box">
                                <a class="navbar-brand" href="{{ route('home') }}">
                                    <img class="img-fluid site-logo"
                                        src="{{ asset('frontend/assets/images/logo-white.png') }}" alt="" />
                                </a>
                            </figure>
                            {{-- <div class="text">
                                <p>
                                    At NGen IT, we specialize in delivering cutting-edge
                                    technology solutions that drive businesses forward..
                                </p>
                            </div> --}}
                            <ul class="footer-social">
                                <li>
                                    <a href="{{ optional($setting)->facebook_url }}"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="{{ optional($setting)->linkedin_url }}"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="{{ optional($setting)->github_url }}"><i class="fab fa-github"></i></a>
                                </li>
                                <li>
                                    <a href="{{ optional($setting)->instagram_url }}"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 offset-lg-2 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">Links</div>
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
                                <p>Tell us about your custom needed project.</p>
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
