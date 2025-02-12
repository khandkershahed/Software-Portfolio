<section>
    <div class="container">
        <div class="row">
            @if (!empty(optional($item)->row_four_title))
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h1>{{ optional($item)->row_three_title }}</h1>
                        <span class="line ms-2"></span>
                    </div>
                </div>
            @endif
            <div class="col-lg-12">
                <div>
                    <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe"
                        style="border: 0px solid lightgray;width: 100%;height: 800px;background-color: white;"
                        src="https://heyzine.com/flip-book/d6a1999da1.html"></iframe>

                    {{-- <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe"
                        style="border: 0px solid lightgray;width: 100%;height: 800px;background-color: white;"
                        src="{{ !empty($item->row_three_pdf) ? url('storage/' . $item->row_three_pdf) : '' }}"></iframe> --}}
                </div>
            </div>
        </div>
    </div>
</section>
