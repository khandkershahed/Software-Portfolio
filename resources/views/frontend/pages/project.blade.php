<x-frontend-app-layout :title="'Project'">
    <!-- Contact Section Start -->
    <section>
        <div class="px-0 container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-section">
                        <div class="d-flex">
                            <img class="w-100 img-fluid"
                                src="{{ !empty($banner->image) && file_exists('storage/' . $banner->image) ? url('storage/' . $banner->image) : asset('images/no-banner.jpg') }}"
                                alt="" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5 mb-0">
            <!-- Tab navigation for categories -->
            <ul class="nav nav-tabs projects-tabs" id="myTab" role="tablist">
                @foreach ($categorys as $index => $category)
                    @if ($category->projects->count() > 0)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $index === 0 && $category->projects->count() > 0 ? 'active' : '' }}" id="category-{{ $category->id }}-tab"
                                data-bs-toggle="tab" href="#category-{{ $category->id }}" role="tab"
                                aria-controls="category-{{ $category->id }}"
                                aria-selected="{{ $index === 0 && $category->projects->count() > 0 ? 'true' : 'false' }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>

            <!-- Tab content for each category -->
            <div class="tab-content" id="myTabContent">
                @foreach ($categorys as $index => $category)
                    <div class="tab-pane fade {{ $index === 0 && $category->projects->count() > 0 ? 'show active' : '' }}" id="category-{{ $category->id }}"
                        role="tabpanel" aria-labelledby="category-{{ $category->id }}-tab">
                        <div class="mt-5 row">
                            @foreach ($category->projects as $project)
                                {{-- <div class="col-md-6">
                                    <a href="{{ route('projects.details', $project->slug) }}">
                                        <div class="mb-3 border-0 shadow-sm card">

                                            <div class="slick-slider-projects" style="height: 300px; overflow:hidden;">
                                                <div class="image-container">
                                                    <img src="{{ !empty($project->image_one) ? url('storage/' . $project->image_one) : '' }}"
                                                        class="card-img-top zoom-effect" alt="dadavaai template one" />
                                                </div>
                                                <div class="image-container">
                                                    <img src="{{ !empty($project->image_two) ? url('storage/' . $project->image_two) : '' }}"
                                                        class="card-img-top zoom-effect" alt="dadavaai template one" />
                                                </div>
                                                <div class="image-container">
                                                    <img src="{{ !empty($project->image_three) ? url('storage/' . $project->image_three) : '' }}"
                                                        class="card-img-top zoom-effect" alt="dadavaai template one" />
                                                </div>
                                            </div>

                                            <div class="card-body bg-light">
                                                <h5 class="card-title">{{ $project->name }}</h5>
                                                <p class="card-text">{{ $project->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div> --}}
                                <div class="col-lg-12">
                                    <div class="section-stack">
                                        <ul class="stack-cards js-stack-cards">
                                            <li class="stack-cards__item js-stack-cards__item">
                                                <a href="{{ route('projects.details', $project->slug) }}">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div>
                                                                <img class="img-fluid"
                                                                    src="{{ !empty($project->image_one) ? url('storage/' . $project->image_one) : '' }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h1 class="site-text">{{ $project->name }}</h1>
                                                            <p class="site-text">{{ $project->row_one_description }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>


    {{-- Project Section End --}}

    @include('frontend.pages.partner')

    @include('frontend.pages.client')
    <!-- Partner Section End -->

    @push('scripts')
        <script>
            (function() {
                var StackCards = function(element) {
                    this.element = element;
                    this.items = document.querySelector("js-stack-cards__item");
                    this.scrollingFn = false;
                    this.scrolling = false;
                    initStackCardsEffect(this);
                    initStackCardsResize(this);
                };

                function initStackCardsEffect(element) {
                    setStackCards(element);
                    var observer = new IntersectionObserver(stackCardsCallback.bind(element), {
                        threshold: [0, 1],
                    });
                    observer.observe(element.element);
                }

                function initStackCardsResize(element) {
                    element.element.addEventListener("resize-stack-cards", function() {
                        setStackCards(element);
                        animateStackCards.bind(element);
                    });
                }

                function stackCardsCallback(entries) {
                    if (entries[0].isIntersecting) {
                        if (this.scrollingFn) return;
                        stackCardsInitEvent(this);
                    } else {
                        if (!this.scrollingFn) return;
                        window.removeEventListener("scroll", this.scrollingFn);
                        this.scrollingFn = false;
                    }
                }

                function stackCardsInitEvent(element) {
                    element.scrollingFn = stackCardsScrolling.bind(element);
                    window.addEventListener("scroll", element.scrollingFn);
                }

                function stackCardsScrolling() {
                    if (this.scrolling) return;
                    this.scrolling = true;
                    window.requestAnimationFrame(animateStackCards.bind(this));
                }

                function setStackCards(element) {
                    element.marginY = getComputedStyle(element.element).getPropertyValue("--stack-cards-gap");
                    getIntegerFromProperty(element);
                    element.elementHeight = element.element.offsetHeight;

                    var cardStyle = getComputedStyle(element.items[0]);
                    element.cardTop = Math.floor(parseFloat(cardStyle.getPropertyValue("top")));
                    element.cardHeight = Math.floor(parseFloat(cardStyle.getPropertyValue("height")));
                    element.windowHeight = window.innerHeight;

                    if (isNaN(element.marginY)) {
                        element.element.style.paddingBottom = "0px";
                    } else {
                        element.element.style.paddingBottom =
                            element.marginY * (element.items.length - 1) + "px";
                    }

                    for (var i = 0; i < element.items.length; i++) {
                        if (isNaN(element.marginY)) {
                            element.items[i].style.transform = "none;";
                        } else {
                            element.items[i].style.transform = "translateY(" + element.marginY * i + "px)";
                        }
                    }
                }

                function getIntegerFromProperty(element) {
                    var node = document.createElement("div");
                    node.setAttribute(
                        "style",
                        "opacity:0; visibility: hidden; position: absolute; height:" + element.marginY
                    );
                    element.element.appendChild(node);
                    element.marginY = parseInt(getComputedStyle(node).getPropertyValue("height"));
                    element.element.removeChild(node);
                }

                function animateStackCards() {
                    if (isNaN(this.marginY)) {
                        this.scrolling = false;
                        return;
                    }

                    var top = this.element.getBoundingClientRect().top;

                    if (
                        this.cardTop -
                        top +
                        this.element.windowHeight -
                        this.elementHeight -
                        this.cardHeight +
                        this.marginY +
                        this.marginY * this.items.length >
                        0
                    ) {
                        this.scrolling = false;
                        return;
                    }

                    for (var i = 0; i < this.items.length; i++) {
                        var scrolling = this.cardTop - top - i * (this.cardHeight + this.marginY);
                        if (scrolling > 0) {
                            var scaling =
                                i == this.items.length - 1 ?
                                1 :
                                (this.cardHeight - scrolling * 0.05) / this.cardHeight;
                            this.items[i].style.transform =
                                "translateY(" + this.marginY * i + "px) scale(" + scaling + ")";
                        } else {
                            this.items[i].style.transform = "translateY(" + this.marginY * i + "px)";
                        }
                    }

                    this.scrolling = false;
                }

                var stackCards = document.getElementsByClassName("js-stack-cards"),
                    intersectionObserverSupported =
                    "IntersectionObserver" in window &&
                    "IntersectionObserverEntry" in window &&
                    "intersectionRatio" in window.IntersectionObserverEntry.prototype,
                    reducedMotion = false;

                if (stackCards.length > 0 && intersectionObserverSupported && !reducedMotion) {
                    var stackCardsArray = [];
                    for (var i = 0; i < stackCards.length; i++) {
                        (function(i) {
                            stackCardsArray.push(new StackCards(stackCards[i]));
                        })(i);
                    }

                    var resizingId = false,
                        customEvent = new CustomEvent("resize-stack-cards");

                    window.addEventListener("resize", function() {
                        clearTimeout(resizingId);
                        resizingId = setTimeout(doneResizing, 500);
                    });

                    function doneResizing() {
                        for (var i = 0; i < stackCardsArray.length; i++) {
                            stackCardsArray[i].element.dispatchEvent(customEvent);
                        }
                    }
                }
            })();
        </script>
        <script>
            $(document).ready(function() {
                $(".slick-slider-projects").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 2000, // Adjust speed for smooth transitions
                    autoplay: true, // Enable autoplay
                    autoplaySpeed: 2000, // Set a value to allow seamless autoplay
                    arrows: false,
                    dots: false,
                    draggable: true, // Enable mouse dragging
                    swipe: true, // Ensure swipe is enabled
                    touchMove: true, // Ensure touch movements work
                    infinite: true, // Allow continuous scrolling
                });
            });
        </script>
    @endpush

</x-frontend-app-layout>
