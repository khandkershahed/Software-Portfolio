<x-frontend-app-layout :title="'Term & Condition'">

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

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="terms-of-service py-4">
                        <div>
                            <h1 class="terms-heading">{{ optional($term)->name }}</h1>
                            {{-- <p class="terms-intro">
                                Welcome to our software services. These Terms of Service
                                govern your use of our software, products, and services.
                                By accessing or using our website or software, you agree
                                to comply with and be bound by these terms.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="terms-of-service py-4">
                        {!! optional($term)->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-frontend-app-layout>
