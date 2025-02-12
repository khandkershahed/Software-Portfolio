<x-frontend-app-layout :title="'Query'">

    <!-- Contact Section Start -->
    <section>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-section">
                        <img src="{{ !empty($banner->image) && file_exists('storage/' . $banner->image) ? url('storage/' . $banner->image) : asset('images/no-banner.jpg') }}"
                                alt="" />

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.pages.query')

    <section class="page-section pt-0 pb-0 banner-section bg-dark light-content">
        <div class="container relative">
            <div class="row">
                <div class="col-lg-6 relative">
                    <div class="banner-image-1">
                        <img src="https://images.unsplash.com/photo-1662394757745-e5a6af92a06a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80"
                            alt="" />
                    </div>
                    <div class="banner-image-2">
                        <img src="https://images.unsplash.com/photo-1609859419262-26d320fe40c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="" class="wow scaleOutIn animated" data-wow-duration="1.2s"
                            data-wow-offset="70"
                            style="
                      visibility: visible;
                      animation-duration: 1.2s;
                      animation-name: scaleOutIn;
                    " />
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <div class="mt-140 mt-lg-80 mt-md-60 mt-xs-30 mb-140 mb-lg-80">
                        <div class="banner-content wow fadeInUpShort animated" data-wow-duration="1.2s"
                            style="
                      visibility: visible;
                      animation-duration: 1.2s;
                      animation-name: fadeInUpShort;
                    ">
                            <h3 class="banner-heading">
                                Looking for exclusive digital services?
                            </h3>
                            <div class="banner-decription">
                                Proin fringilla augue at maximus vestibulum. Nam
                                pulvinar vitae porttitor. Integer non dapibus diam, ac
                                eleifend lectus.
                            </div>
                            <div class="local-scroll">
                                <a href="{{ route('project') }}" class="btn btn-mod btn-w btn-large btn-round">View
                                    Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h1>General Pricing</h1>
                        <span class="line ms-2"></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="snip1240">
                        <div class="plan">
                            <header>
                                <h3 class="plan-title">Basic</h3>
                                <div class="plan-cost">
                                    <span class="plan-price">$119</span><span class="plan-type">/mo</span>
                                </div>
                            </header>
                            <ul class="plan-features">
                                <li>5 Page Include</li>
                                <li>1 MySQL Databases (Backups)</li>
                                <li>2 Month Maintanance</li>
                                <li>Content Upload not include</li>
                                <li>Graphics design include</li>
                                <li>1/30 (monthly) Support</li>
                            </ul>
                            <div class="plan-select"><a href="">Select Plan</a></div>
                        </div>
                        <div class="plan">
                            <header>
                                <h3 class="plan-title">Standard</h3>
                                <div class="plan-cost">
                                    <span class="plan-price">$329</span><span class="plan-type">/mo</span>
                                </div>
                            </header>
                            <ul class="plan-features">
                                <li>10 Pages Included</li>
                                <li>3 MySQL Databases (Backups)</li>
                                <li>6 Months Maintenance</li>
                                <li>Content Upload Included</li>
                                <li>Basic Graphics Design Included</li>
                                <li>5/30 (monthly) Support</li>
                            </ul>
                            <div class="plan-select"><a href="">Select Plan</a></div>
                        </div>
                        <div class="plan featured">
                            <header>
                                <h3 class="plan-title">Custom Build</h3>
                                <div class="plan-cost">
                                    <span class="plan-price"><i class="fa-solid fa-scale-balanced"></i></span>
                                </div>
                            </header>
                            <ul class="plan-features">
                                <li>How much is the page cost?</li>
                                <li>Technology used?</li>
                                <li>Database included?</li>
                                <li>Content upload included?</li>
                                <li>Months of maintenance are included?</li>
                                <li>Is graphic design included?</li>
                            </ul>
                            <div class="plan-select"><a href="query.html">Select Plan</a></div>
                        </div>
                        <div class="plan">
                            <header>
                                <h3 class="plan-title">Premium</h3>
                                <div class="plan-cost">
                                    <span class="plan-price">$599</span><span class="plan-type">/mo</span>
                                </div>
                            </header>
                            <ul class="plan-features">
                                <li>20 Pages Included</li>
                                <li>10 MySQL Databases (Backups)</li>
                                <li>12 Months Maintenance</li>
                                <li>Content Upload Included</li>
                                <li>Advanced Graphics Design Included</li>
                                <li>10/30 (monthly) Support</li>
                            </ul>
                            <div class="plan-select"><a href="">Select Plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-frontend-app-layout>
