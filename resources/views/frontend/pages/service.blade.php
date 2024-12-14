<section style="background-color: #2c3e50">
    <div class="container-fluid pb-0 pb-lg-5">
        <div class="marquee_container">

            <div class="marquee left-to-right">
                <div class="marquee_group">
                    @foreach ($services as $service)
                        <span>{!! $service->name !!}</span>
                    @endforeach

                </div>
            </div>

            <div class="marquee right-to-left">
                <div class="marquee_group">
                    @foreach ($services as $service)
                        <span>{!! $service->name !!}</span>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
