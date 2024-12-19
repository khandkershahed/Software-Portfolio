

<section>
    <div class="container agency_container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="agency_box">
                    <div class="row align-items-center agency_box_row">
                        <div class="col-lg-6">
                            <p class="mb-0 agency_badge">{{ optional($item)->row_one_badge }}</p>
                            <div class="agency_title">
                                <h1 class="pt-3">

                                    {{ optional($item)->row_one_title }}

                                    <span class="word wisteria ps-2">{{ optional($item)->row_one_title }}</span>

                                    {{-- <span class="word belize ps-2">Branding</span>
                                    <span class="word pomegranate ps-2">Strategies</span> --}}

                                </h1>
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-0 agency_details">
                                {!! optional($item)->row_one_description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-center align-items-center action-btn-box">
                    <a href="" class="action-btn">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-12">
                    <div class="d-flex justify-content-center py-5 home-feature">
                        <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                            <i class="{{ optional($item)->row_two_icon_one }} pe-2"></i>
                            {{ optional($item)->row_two_icon_one_title }}
                        </p>
                        <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                            <i class="{{ optional($item)->row_two_icon_two }} pe-2"></i>
                            {{ optional($item)->row_two_icon_two_title }}
                        </p>
                        <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                            <i class="{{ optional($item)->row_two_icon_three }} pe-2"></i>
                            {{ optional($item)->row_two_icon_three_title }}
                        </p>
                        <p class="pe-0 pe-lg-5 text-uppercase agency_feature">
                            <i class="{{ optional($item)->row_two_icon_four }} pe-2"></i>
                            {{ optional($item)->row_two_icon_four_title }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
