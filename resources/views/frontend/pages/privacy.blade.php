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

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-policy py-4">
                        <div class="">
                            <h1 class="privacy-heading">{{ optional($privacy)->title }}</h1>
                            {{-- <p class="privacy-intro">
                                Your privacy is important to us. This Privacy Policy
                                outlines how we collect, use, and protect your
                                information when you use our website.
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
                    <div class="privacy-policy py-4">
                        <p>{!! optional($privacy)->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-frontend-app-layout>
