<x-frontend-app-layout :title="'About'">

    <!-- Contact Section Start -->
    <section>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-section">
                        <img src="https://socialspike.in/wp-content/uploads/2023/07/About-Us-1.jpg" alt="" />
                        <div class="text-overlay">
                            <!-- <h3>Contact</h3> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    @if (optional($about)->row_one_title)
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="title">{{ optional($about)->row_one_badge }}</span>
                                <h2>
                                    {{ optional($about)->row_one_title }}
                                </h2>
                            </div>
                            <div class="text">
                                {!! optional($about)->row_one_description !!}
                            </div>
                            <div class="btn-box">
                                <a href="{{ optional($about)->row_one_button_url }}"
                                    class="theme-btn btn-style-one">{{ optional($about)->row_one_button_name }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <figure class="image-1">
                                <a href="#" class="lightbox-image" data-fancybox="images"><img class="rounded-2"
                                        src="{{ !empty(optional($about)->row_one_image_big) ? url('storage/' . optional($about)->row_one_image_big) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($about)->row_one_title) }}"
                                        alt="" /></a>
                            </figure>
                            <figure class="image-2">
                                <a href="#" class="lightbox-image" data-fancybox="images"><img class="rounded-2"
                                        src="{{ !empty(optional($about)->row_one_image_small) ? url('storage/' . optional($about)->row_one_image_small) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($about)->row_one_title) }}"
                                        alt="" /></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif



    <!-- Counter Start -->
    @include('frontend.pages.company_data')
    <!-- Counter End -->

    <!-- Second Section Start -->
    @if (optional($about)->row_three_title)
        <section class="my-5 pt-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="title">{{ optional($about)->row_three_badge }}</span>
                                <h2>
                                    {{ optional($about)->row_three_title }}
                                </h2>
                            </div>
                            <div class="text">
                                {!! optional($about)->row_three_description !!}
                            </div>
                            <div class="btn-box">
                                <a href="{{ optional($about)->row_three_button_url }}"
                                    class="theme-btn btn-style-one">{{ optional($about)->row_three_button_name }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>

                            <img class="img-fluid rounded-2"
                                src="{{ !empty(optional($about)->row_three_image_big) ? url('storage/' . optional($about)->row_three_image_big) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($about)->row_one_title) }}"
                                alt="" />

                            <img class="img-fluid blob-imgs"
                                src="{{ !empty(optional($about)->row_three_image_small) ? url('storage/' . optional($about)->row_three_image_small) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($about)->row_one_title) }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Second Section End-->

</x-frontend-app-layout>
