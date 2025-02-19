@if (!empty(optional($categoryThree)->name) || !empty(optional($categoryThree)->description))
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="py-5">
                        <div class="d-flex align-items-center">
                            <h1 class="design-title text-black">
                                {{ optional($categoryThree)->name }}
                            </h1>
                            @if (!empty(optional($categoryThree)->name))
                                <span class="line ms-2"></span>
                            @endif
                        </div>
                        <p class="pt-3 text-black">
                            {!! optional($categoryThree)->description !!}
                        </p>
                        <div class="row mt-4">

                            @if (!empty(optional($categoryThree)->children))
                                @foreach (optional($categoryThree)->children as $header_category_child_three)
                                    <div class="col-lg-6">

                                        <div class="mb-3 shape_side_box">
                                            <a href="{{ route('project') }}" class="btn btn-white shadow-sm arrow-btns">
                                                <i class="fa-solid fa-chevron-right pe-2"></i>
                                            </a>
                                            <a href="{{ route('project') }}"
                                                class="btn btn-white shadow-sm services-btn w-75 text-start">
                                                {{ $header_category_child_three->name }}
                                            </a>
                                        </div>

                                    </div>
                                @endforeach

                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <img class="mobile-imgs"
                        src="{{ !empty(optional($categoryThree)->image) ? url('storage/' . optional($categoryThree)->image) : '' }}"
                        alt="{{ optional($categoryThree)->name }}" />

                </div>
            </div>

        </div>
    </section>
@endif
