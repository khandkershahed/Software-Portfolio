<section class="banner__slider">
    <div class="slider stick-dots">

        @foreach ($banner as $item)
            <div class="slide slide-home">
                <div class="slide__img">
                    <img src="{{ !empty($item->image) ? url('storage/' . $item->image) : '' }}" alt=""
                        data-lazy="{{ !empty($item->image) ? url('storage/' . $item->image) : '' }}"
                        class="full-image animated" data-animation-in="zoomOutImage" />
                </div>

                <div class="slide__content slide__content__left">
                    <div class="slide__content--headings text-center text-lg-start">
                        <p class="animated top-title" data-animation-in="fadeInLeft" data-delay-in="0.2">
                            {{ $item->badge }}
                        </p>
                        <h2 class="animated title" data-animation-in="fadeInLeft">
                            {{ $item->title }}
                        </h2>
                        <a href="{{ $item->button_link }}" class="btn-common-two animated mt-5"
                            data-animation-in="fadeInUp">
                            {{ $item->button_name }}
                        </a>
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
