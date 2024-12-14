<section class="py-3">
    <div class="container-fluid px-0 py-3">
        <div class="row align-items-center">
            <div>
                <!-- Partners Logo -->
                <section class="partners-carousel">

                    @foreach ($company_clients as $company_client)
                        <div class="partner-logo-box">
                            <img class="partners-logo" src="{{ !empty($company_client->logo) ? url('storage/' . $company_client->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($company_client->name) }}"
                                alt="" />
                        </div>
                    @endforeach

                </section>

                <!-- Partners Logo End-->
            </div>
        </div>
    </div>
</section>
