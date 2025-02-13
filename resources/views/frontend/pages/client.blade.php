<section class="py-3">
    <div class="container px-0 py-3">
        <div class="row align-items-center">
            <!-- Partners Logo -->
            <div class="partners-carousel">
                
                @foreach ($company_clients as $company_client)
                    <div class="partner-logo-box">
                        <img class="partners-logo"
                            src="{{ !empty($company_client->logo) ? url('storage/' . $company_client->logo) : asset('images/no_logo.png') }}"
                            alt="" />
                    </div>
                @endforeach
            </div>
            <!-- Partners Logo End-->
        </div>
    </div>
</section>
