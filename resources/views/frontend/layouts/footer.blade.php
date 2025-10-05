<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <div class="col-lg-3 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="logo-box">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img class="img-fluid site-logo"
                                    src="{{ !empty(optional($setting)->site_white_logo) && file_exists(public_path('storage/' . optional($setting)->site_white_logo)) ? asset('storage/' . optional($setting)->site_white_logo) : asset('frontend/assets/images/logo-white.png') }}"
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
                            @if (!empty(optional($setting)->facebook_url))
                            <li>
                                <a href="{{ optional($setting)->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            @endif
                            @if (!empty(optional($setting)->linkedin_url))
                            <li>
                                <a href="{{ optional($setting)->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            @endif
                            @if (!empty(optional($setting)->github_url))
                            <li>
                                <a href="{{ optional($setting)->github_url }}"><i class="fab fa-github"></i></a>
                            </li>
                            @endif
                            @if (!empty(optional($setting)->youtube_url))
                            <li>
                                <a href="{{ optional($setting)->youtube_url }}"><i class="fab fa-youtube"></i></a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                @php
                $totalProjects = count($project);
                $half = ceil($totalProjects / 2);
                $projectsFirstHalf = $project->take($half);
                $projectsSecondHalf = $project->slice($half);
                @endphp

                <div class="col-lg-3 footer-column">
                    <div class="service-widget footer-widget">
                        <div class="footer-title">Projects</div>
                        <ul class="list">
                            @foreach ($projectsFirstHalf as $allproject)
                            <li>
                                <a href="{{ route('projects.details', $allproject->slug) }}">
                                    {{ $allproject->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 footer-column">
                    <div class="service-widget footer-widget">
                        <div class="footer-title">&nbsp;</div> {{-- optional empty title to align --}}
                        <ul class="list">
                            @foreach ($projectsSecondHalf as $allproject)
                            <li>
                                <a href="{{ route('projects.details', $allproject->slug) }}">
                                    {{ $allproject->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 footer-widget">
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
            <div class="col-lg-6 col-12 column">
                <div class="copyright">
                    <a href="#">NGen IT</a> &copy; 2024 All Right Reserved
                </div>
            </div>
            <div class="col-lg-6 col-12 column">
                <ul class="footer-nav">
                    <li><a href="{{ route('term') }}">Terms of Service</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>