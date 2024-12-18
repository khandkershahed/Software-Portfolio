<section style="background-color: #eee">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h1 class="design-title text-black">{{ optional($item)->row_four_title }}</h1>
                        <span class="line ms-2"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="pt-3">
                        {!! optional($item)->row_four_description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
