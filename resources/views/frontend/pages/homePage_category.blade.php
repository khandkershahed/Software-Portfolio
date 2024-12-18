{{-- <div class="shape-container" id="section1">

    <!-- Feature Section Start -->
    <section>
        <div class="container py-0 py-lg-5">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="py-5">
                        <div class="d-flex align-items-center">
                            <h1 class="design-title text-black">
                                {{ optional($categoryOne)->name }}
                            </h1>
                            <span class="line ms-2"></span>
                        </div>
                        <p class="pt-3 text-black">
                            {!! optional($categoryOne)->description !!}
                        </p>
                        <div class="row mt-4">

                            @foreach (optional($categoryOne)->children as $header_category_child)
                                <div class="col-lg-6">

                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            {{ $header_category_child->name }}
                                        </a>
                                    </div>

                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <img class="mobile-imgs"
                            src="{{ !empty(optional($categoryOne)->image) ? url('storage/' . optional($categoryOne)->image) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($categoryOne)->name) }}"
                            alt="{{ optional($categoryOne)->name }}" />
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Feature Section Start -->
    <section>
        <div class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div>
                        <img class="img-fluid"
                            src="{{ !empty(optional($categoryTwo)->image) ? url('storage/' . optional($categoryTwo)->image) : '' }}"
                            alt="{{ optional($categoryTwo)->name }}" alt="Graphics Services" />
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="">
                        <div class="d-flex align-items-center">
                            <h1 class="grp-title">{{ optional($categoryTwo)->name }}</h1>
                            <span class="line ms-2"></span>
                        </div>
                        <p class="pt-3 grp-para">
                            {!! optional($categoryTwo)->description !!}
                        </p>
                        <div class="row mt-4">

                            @foreach (optional($categoryTwo)->children as $header_category_child_two)
                                <div class="col-lg-6">

                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            {{ $header_category_child_two->name }}
                                        </button>
                                    </div>


                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Feature Section End -->
</div> --}}

<div class="shape-container" id="section1">
    <!-- Feature Section Start -->
    <section>
        <div class="container py-0 py-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="py-5">
                        <div class="d-flex align-items-center">
                            <h1 class="design-title text-black">
                                {{ optional($categoryOne)->name ?? 'Default Category One' }}
                            </h1>
                            <span class="line ms-2"></span>
                        </div>
                        <p class="pt-3 text-black">
                            {!! optional($categoryOne)->description ?? 'Default Description' !!}
                        </p>
                        <div class="row mt-4">
                            @foreach (optional($categoryOne)->children ?? [] as $header_category_child)
                                <div class="col-lg-6">
                                    <div class="mb-3 shape_side_box">
                                        <a href="allprojects.html" class="btn btn-white shadow-sm arrow-btns">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </a>
                                        <a href="allprojects.html"
                                            class="btn btn-white shadow-sm services-btn w-75 text-start">
                                            {{ $header_category_child->name }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <img class="mobile-imgs"
                            src="{{ !empty(optional($categoryOne)->image) ? url('storage/' . optional($categoryOne)->image) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($categoryOne)->name ?? 'Default Category One') }}"
                            alt="{{ optional($categoryOne)->name ?? 'Default Category One' }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Feature Section Start -->
    <section>
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div>
                        <img class="img-fluid"
                            src="{{ !empty(optional($categoryTwo)->image) ? url('storage/' . optional($categoryTwo)->image) : '' }}"
                            alt="{{ optional($categoryTwo)->name ?? 'Default Category Two' }}" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="d-flex align-items-center">
                            <h1 class="grp-title">{{ optional($categoryTwo)->name ?? 'Default Category Two' }}</h1>
                            <span class="line ms-2"></span>
                        </div>
                        <p class="pt-3 grp-para">
                            {!! optional($categoryTwo)->description ?? 'Default Description' !!}
                        </p>
                        <div class="row mt-4">
                            @foreach (optional($categoryTwo)->children ?? [] as $header_category_child_two)
                                <div class="col-lg-6">
                                    <div class="mb-3 shape_side_box">
                                        <button class="btn btn-white shadow-sm arrow-btns shape_side_btn">
                                            <i class="fa-solid fa-chevron-right pe-2"></i>
                                        </button>
                                        <button
                                            class="btn btn-white shadow-sm services-btn w-75 text-start shape_side_btn">
                                            {{ $header_category_child_two->name }}
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->
</div>
