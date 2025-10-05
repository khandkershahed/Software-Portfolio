<x-frontend-app-layout :title="'About'">

    <!-- Contact Section Start -->
    <section>
        <div class="px-0 container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-section">
                        <img src="{{ !empty($banner->image) && file_exists('storage/' . $banner->image) ? url('storage/' . $banner->image) : asset('images/about-banner.png') }}"
                            alt="" />

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    @if (optional($about)->row_one_title)
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="order-2 content-column col-lg-6 col-md-12 col-sm-12">
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
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="wow fadeInLeft">
                        <figure class="">
                            <a href="#" class="" data-fancybox="images">
                                <img class="rounded-2 img-fluid bio-img"
                                    src="{{ asset('frontend/assets/images/about-bio.avif') }}" />
                                {{-- <img class="rounded-2"
                                        src="{{ !empty(optional($about)->row_one_image_big) ? url('storage/' . optional($about)->row_one_image_big) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($about)->row_one_title) }}"
                                alt="" /> --}}
                            </a>
                        </figure>
                        {{-- <figure class="image-2">
                                <a href="#" class="lightbox-image" data-fancybox="images"><img class="rounded-2"
                                        src="{{ !empty(optional($about)->row_one_image_small) ? url('storage/' . optional($about)->row_one_image_small) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($about)->row_one_title) }}"
                        alt="" /></a>
                        </figure> --}}
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
    <section class="pt-3 my-5">
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
    <section
        style="background: url('{{ asset('frontend/assets/images/bg-image.jpg') }}') no-repeat center right / contain;">
        <div class="container about-contact">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="inner-column">
                        <h3 class="">Ask How We Can Help You!</h3>
                        @if (optional($setting)->whatsapp_number || optional($setting)->phone_one || optional($setting)->phone_two)
                        <div class="pb-4">
                            <h5 class="mb-3">Points of contact</h5>

                            @if (optional($setting)->whatsapp_number)
                            <p class="mb-0"><i class="fab fa-whatsapp pe-2"></i> {{ $setting->whatsapp_number }}</p>
                            @endif

                            @if (optional($setting)->phone_one)
                            <p class="mb-0"><i class="fas fa-phone-volume pe-2"></i> {{ $setting->phone_one }}</p>
                            @endif

                            @if (optional($setting)->phone_two)
                            <p><i class="fas fa-phone-volume pe-2"></i> {{ $setting->phone_two }}</p>
                            @endif
                        </div>
                        @endif


                        @if (optional($setting)->contact_email || optional($setting)->support_email || optional($setting)->info_email)
                        <div class="pb-4">
                            <h5>Information and Sales</h5>
                            <p class="mb-0">{{ optional($setting)->contact_email }}</p>
                            <p class="mb-0">{{ optional($setting)->support_email }}</p>
                            <p class="mb-0">{{ optional($setting)->info_email }}</p>
                        </div>
                        @endif

                        @if (optional($setting)->address_line_one || optional($setting)->address_line_two)
                        <div class="">
                            <h5>Additional Office Locations</h5>
                            <p class="mb-0">{{ optional($setting)->address_line_one }}</p>
                            <p class="mb-0">{{ optional($setting)->address_line_two }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-0 py-5 p-lg-5 py-lg-5 contact-form rounded-2">
                        <h3 class="pb-0 site-text">
                            Contact us for further query!
                        </h3>
                        <form action="{{ route('contact.store') }}" method="post" class="p-3">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-lg-6">
                                    <label for="exampleFormControlInput1" class="site-text form-label">Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name"
                                        id="exampleFormControlInput1" placeholder="Jonson Hebit" required />
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label for="exampleFormControlInput1" class="site-text form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email"
                                        id="exampleFormControlInput1" placeholder="Jonson@example.com" required />
                                </div>
                                <div class="mb-3 col-lg-12">
                                    <label for="exampleFormControlInput1" class="site-text form-label">Phone </label>
                                    <input type="text" class="form-control" name="phone"
                                        id="exampleFormControlInput1" placeholder="+880 1585864658" />
                                </div>
                                <div class="mb-3 col-lg-12">
                                    <label for="exampleFormControlInput1" class="site-text form-label">Your Message
                                        <span class="text-danger">*</span></label>
                                    <textarea name="message" id="" class="form-control" cols="30" rows="10" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn-common-three animated w-100 rounded-3">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>