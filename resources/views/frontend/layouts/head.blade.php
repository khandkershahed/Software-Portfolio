<title>NGen IT Ltd.</title>
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


<link rel="icon"
    href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}"
    type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap_bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

    <title>{{ !empty(optional($setting)->site_name) ? optional($setting)->site_name : 'NGEN Software' }}</title>
