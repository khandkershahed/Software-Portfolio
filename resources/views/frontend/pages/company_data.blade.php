<section>
    <div id="projectFacts" class="sectionClass">
        <div class="fullWidth eight columns">
            <div class="projectFactsWrap">
                @foreach ($company_datas as $company_data)
                    <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible">
                        <i class="{{ $company_data->icon }}"></i>
                        <p id="number1" class="number">{{ $company_data->data }}</p>
                        <span></span>
                        <p>{{ $company_data->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
