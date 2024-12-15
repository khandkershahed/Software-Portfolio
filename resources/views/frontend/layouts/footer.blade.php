<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">

                        <figure class="logo-box">

                            <a class="navbar-brand" href="index.html">

                                <img class="img-fluid site-logo"
                                    src="{{ !empty(optional($setting)->site_black_logo) && file_exists(public_path('storage/' . optional($setting)->site_black_logo)) ? asset('storage/' . optional($setting)->site_black_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
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
                                <a href="{{ optional($setting)->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ optional($setting)->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="{{ optional($setting)->github_url }}"><i class="fab fa-github"></i></a>
                            </li>
                            <li>
                                <a href="{{ optional($setting)->youtube_url }}"><i class="fab fa-youtube"></i></a>
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
                            <p>{{ optional($setting)->phone_one }}</p>
                            <p>{{ optional($setting)->phone_two }}</p>
                            <p>{{ optional($setting)->contact_email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <div class="copyright">
                    <a href="#">NGen IT</a> &copy; 2024 All Right Reserved
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 column">
                <ul class="footer-nav">
                    <li><a href="{{ route('term') }}">Terms of Service</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
