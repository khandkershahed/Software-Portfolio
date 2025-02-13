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
                            alt="" class="wow scaleOutIn animated" data-wow-duration="1.2s" data-wow-offset="70"
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
                        @foreach ($price_plans as $price_plan)
                            @php
                                $currency = $price_plan->currency;
                            @endphp
                            <div class="plan">

                                <header>

                                    <h3 class="plan-title">{{ $price_plan->name }}</h3>

                                    <div class="plan-cost">

                                        <span class="plan-price">
                                            @if ($currency == 'taka')
                                                {{ 'tk' }}
                                            @elseif ($currency == 'dollar')
                                                {{ '$' }}
                                            @elseif ($currency == 'euro')
                                                {{ '€' }}
                                            @elseif ($currency == 'pound')
                                                {{ '£' }}
                                            @else
                                            @endif
                                        </span>
                                        <span>{{ $price_plan->price }}</span>

                                        <span class="plan-type">/ {{ $price_plan->duration }}</span>

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
                        @endforeach

                        {{-- <div class="plan">
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
                        </div> --}}

                        {{-- Custom Page  --}}
                        <div class="plan featured">

                            <form action="{{ route('pricing.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <header>
                                    <h3 class="plan-title">Custom Build</h3>
                                    <div class="plan-cost">
                                        <span class="plan-price"><i class="fa-solid fa-scale-balanced"></i></span>
                                    </div>
                                </header>

                                <ul class="plan-features">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0">How much is the page cost?</p>
                                        </div>
                                        <div>
                                            <select class="rounded-1 form-control-sm select" id="pageCount"
                                                name="page_number" required>
                                                <option value="" disabled selected>Select any</option>
                                                <option value="1">1 Page</option>
                                                <option value="2">2 Pages</option>
                                                <option value="3">3 Pages</option>
                                                <option value="4">4 Pages</option>
                                                <option value="5">5 Pages</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                    </li>

                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0">Frontend used?</p>
                                        </div>
                                        <div>
                                            <select class="rounded-1 form-control-sm select" id="technologySelect"
                                                name="frontend_technology" data-placeholder="Choose" required>
                                                <option value="" disabled selected>Select any</option>
                                                <option value="html">HTML</option>
                                                <option value="css">CSS</option>
                                                <option value="javascript">JavaScript</option>
                                                <option value="react">React</option>
                                                <option value="laravel">Laravel</option>
                                                <option value="nodejs">Node.js</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0">Database included?</p>
                                        </div>
                                        <div>
                                            <select class="rounded-1 form-control-sm select" id="databaseSelect"
                                                name="database" required>
                                                <option value="" disabled selected>Select any</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0">Content upload included?</p>
                                        </div>
                                        <div>
                                            <select class="rounded-1 form-control-sm select" id="databaseSelect"
                                                name="content" required>
                                                <option value="" disabled selected>Select any</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0">Months of maintenance?</p>
                                        </div>
                                        <div>
                                            <select class="rounded-1 form-control-sm select" id="databaseSelect"
                                                name="maintenance_duration" required>
                                                <option value="" disabled selected>Select any</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0">Is graphic design included?</p>
                                        </div>
                                        <div>
                                            <select class="rounded-1 form-control-sm select" id="databaseSelect"
                                                name="graphic_design" required>
                                                <option value="" disabled selected>Select any</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                                <div class="plan-select">
                                    <button type="submit" class="my-4 px-4 py-2">Select Plan</button>
                                </div>
                            </form>

                        </div>
                        {{-- Custom Page  --}}


                        @foreach ($lastprice_plans as $lastprice_plan)
                            @php
                                $currency = $lastprice_plan->currency;
                            @endphp

                            <div class="plan">

                                <header>
                                    <h3 class="plan-title">{{ $lastprice_plan->name }}</h3>
                                    <div class="plan-cost">

                                        <span class="plan-price">
                                            @if ($currency == 'taka')
                                                {{ 'tk' }}
                                            @elseif ($currency == 'dollar')
                                                {{ '$' }}
                                            @elseif ($currency == 'euro')
                                                {{ '€' }}
                                            @elseif ($currency == 'pound')
                                                {{ '£' }}
                                            @else
                                            @endif
                                        </span>

                                        <span>{{ $lastprice_plan->price }}</span>
                                        <span class="plan-type">/ {{ $lastprice_plan->duration }}</span>
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-frontend-app-layout>
