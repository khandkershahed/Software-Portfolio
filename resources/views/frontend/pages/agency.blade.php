<section>
    <div class="container agency_container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="agency_box">
                    <div class="row align-items-center agency_box_row">
                        <div class="col-lg-6">
                            <p class="mb-0 agency_badge">{{ optional($item)->row_one_badge }}</p>
                            <div class="agency_title">
                                @php
                                    $title = optional($item)->row_one_title;
                                    $lastThreeWords = ''; // To store the last three words
                                    if ($title) {
                                        $words = explode(' ', $title); // Split the string into words
                                        $lastThreeWords = array_slice($words, -1); // Get the last 3 words
                                        $title = implode(' ', array_slice($words, 0, -1)); // Remove the last 3 words from the original title
                                    }
                                @endphp

                                <h1 class="pt-3">
                                    {{ $title }}
                                    <span class="word wisteria ps-2">{{ $lastThreeWords[0] ?? '' }}</span>
                                    <!-- First word from the last three -->
                                    {{-- <span class="word belize ps-2">{{ $lastThreeWords[1] ?? '' }}</span>
                                    <!-- Second word from the last three -->
                                    <span class="word pomegranate ps-2">{{ $lastThreeWords[2] ?? '' }}</span> --}}
                                    <!-- Third word from the last three -->
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
