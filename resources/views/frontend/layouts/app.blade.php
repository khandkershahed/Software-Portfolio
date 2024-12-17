<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')
</head>

<body>
    @include('frontend.layouts.header')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                {{ $slot }}
            </main>
            @include('frontend.layouts.footer')
        </div>
    </div>

    @include('frontend.layouts.script')
    
</body>

</html>
