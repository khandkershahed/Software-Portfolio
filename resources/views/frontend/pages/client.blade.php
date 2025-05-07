<section class="py-3 shadow-sm">
    <div class="container px-0 py-3">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="text-black design-title">Our Partners</h1>
            </div>
            <div class="col-lg-6">
                <!-- Partners Logo -->
                <div class="partners-carousel row">
                    @foreach ($company_clients as $company_client)
                        <div class="partner-logo-box col-lg-3">
                            <img class="partners-logo"
                                src="{{ !empty($company_client->logo) ? url('storage/' . $company_client->logo) : asset('images/no_logo.png') }}"
                                alt="" />
                        </div>
                    @endforeach
                </div>
                <!-- Partners Logo End-->
            </div>
        </div>
    </div>
</section>
