
<section class="py-3">
    <div class="container-fluid px-0 py-3">
        <div class="row align-items-center">
            <div>
                <!-- Partners Logo -->
                <section class="partners-carousel">
                    <div class="partner-logo-box">
                        <img class="partners-logo"
                            src="{{ asset('/') }}assets/images/partners-logo/Dadabhai-Logo.png" alt="" />
                    </div>
                    @foreach ($company_clients as $company_client)
                        <div class="partner-logo-box">
                            <img class="partners-logo"
                                src="{{ !empty($company_client->logo) ? url('storage/' . $company_client->logo) : asset('images/no_logo.png') }}"
                                alt="" />
                        </div>
                    @endforeach
                </section>

                <!-- Partners Logo End-->
            </div>
        </div>
    </div>
</section>
