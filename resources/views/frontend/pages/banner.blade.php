<section class="banner__slider">
    <div class="slider stick-dots">

        @foreach ($banner as $item)
            <div class="slide slide-home">
                <div class="slide__img">
                    <img src="{{ !empty(optional($item)->image) ? url('storage/' . optional($item)->image) : '' }}"
                        alt=""
                        data-lazy="{{ !empty(optional($item)->image) ? url('storage/' . optional($item)->image) : '' }}"
                        class="full-image animated" data-animation-in="zoomOutImage" />
                </div>

                <div class="slide__content slide__content__left">
                    <div class="slide__content--headings text-center text-lg-start">
                        <p class="animated top-title" data-animation-in="fadeInLeft" data-delay-in="0.2">
                            {{ optional($item)->badge }}
                        </p>
                        <h2 class="animated title" data-animation-in="fadeInLeft">
                            {{ optional($item)->title }}
                        </h2>
                        @if (optional($item)->button_link && optional($item)->button_name)
                            <a href="{{ optional($item)->button_link }}" class="btn-common-two animated mt-5"
                                data-animation-in="fadeInUp">
                                {{ optional($item)->button_name }}
                            </a>
                        @endif
                    </div>
                </div>

            </div>
        @endforeach


    </div>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
            fill="none" stroke="currentColor">
            <circle r="20" cy="22" cx="22" id="test" />
        </symbol>
    </svg>

</section>
