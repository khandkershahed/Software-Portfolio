<section class="py-3 shadow-sm">
    <div class="container px-0 py-3">
        <div class="row align-items-center">
            <div class="col-lg-3 col-12">
                <h1 class="text-black design-title">Our Partners</h1>
            </div>
            <div class="col-lg-9 col-12">
                <div class="partners-carousel">
                    @foreach ($company_clients as $company_client)
                    <div class="px-3 text-center partner-logo-box">
                        <img class="partners-logo img-fluid"
                            src="{{ !empty($company_client->logo) ? url('storage/' . $company_client->logo) : asset('images/no_logo.png') }}"
                            alt="{{ $company_client->name ?? 'Partner Logo' }}" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@push('scripts')
<script>
    $(document).ready(function() {
        $(".partners-carousel").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 8000, // Total animation duration
            autoplay: true,
            autoplaySpeed: 0, // 0 for continuous scroll
            cssEase: 'linear', // Smooth linear animation
            infinite: true,
            arrows: false,
            dots: false,
            pauseOnHover: true,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    });
</script>
@endpush