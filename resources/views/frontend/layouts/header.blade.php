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
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('project') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('query') }}">Query</a>
                    </li>
                </ul>

                <div class="d-flex ms-3">

                    <button class="btn-sm btn btn-outline-light me-2 rounded-0" type="submit">
                        <i class="fa-brands fa-facebook-f"></i>
                    </button>

                    <button class="btn-sm btn btn-outline-light me-2 rounded-0" type="submit">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </button>

                    <button class="btn-sm btn btn-outline-light rounded-0" type="submit">
                        <i class="fa-brands fa-instagram"></i>
                    </button>

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
                                <a class="navbar-brand" href="index.html">
                                    <img class="img-fluid site-logo" src="./assets/images/logo-white.png"
                                        alt="" />
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
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Software Development</a></li>
                                <li><a href="#">Graphics & UI/UX</a></li>
                                <li><a href="#">Apps Development</a></li>
                                <li><a href="#">Solution Selles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                        <div class="contact-widget footer-widget">
                            <div class="footer-title">Contacts</div>
                            <div class="text">
                                <p>Tell us about your next project.</p>
                                <p>+880 171 4243 446</p>
                                <p>+1 917 720 3055</p>
                                <p>sales@ngenitltd.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
