<x-frontend-app-layout :title="'HomePage'">

    <!-- Banner Section Start -->
    @include('frontend.pages.banner')
    <!-- Banner Section End -->

    <!-- A creative agency -->
    @include('frontend.pages.agency')

    <!-- service start -->
    @include('frontend.pages.service')
    <!-- service end -->

    {{-- homePage_category --}}
    @include('frontend.pages.homePage_category')

    <!-- Counter -->
    @include('frontend.pages.company_data')

    <!-- homePage_single_category -->
    @include('frontend.pages.homePage_single_category')

    {{-- About Us  --}}
    @include('frontend.pages.homePage_about')

    <!-- Query Section Here -->
    @include('frontend.pages.query')

    <!-- Partner Section start -->
    @include('frontend.pages.partner')
    
    {{-- Clinet --}}
    @include('frontend.pages.client')


</x-frontend-app-layout>
