<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/2e7d7272e8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
    @stack('vendor-css')
    @stack('page-css')
    <style>
        .unsupported {
            background-color: rgb(255, 255, 255);
            height: 100vh;
            width: 100%;
            z-index: 100;
            position: absolute;
            top: 0;
            left: 0;
            display: none;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

    </style>
</head>
<body>

{{-- Header  --}}
@include('partials.header')
{{-- main content --}}
@yield('content')
{{-- Footer  --}}
@include('partials.footer')
<div class="unsupported ">
    <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="col-md-6 col-sm-8 p-5">
            <img src="{{asset('assets/images/warning.png')}}" style="height: 100px; width: 100px" alt="warning">
            <h1 class="text-danger">
                The screen size or your browser tab smaller than required screen size.
            </h1>
            <ul>
                {{--                <li>Minimum device requirement(width) : 10 inch(1000px)</li>--}}
                {{--                <li>Please Try Change Your device orientation Vertical to Horizontal</li>--}}
                {{--                <li class="thisDevice"></li>--}}
            </ul>
            {{--            <p>--}}
            {{--                Thank you for your interest in this study. However, it is critical that you complete this task on a--}}
            {{--                laptop or desktop computer, and our data indicates that you are using a tablet or mobile phone. As a--}}
            {{--                result, I'm afraid you won't be able to continue with the experiment. Please return your submission on--}}
            {{--                Prolific by clicking the 'stop without completing' button.--}}
            {{--            </p>--}}
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>
@stack('vendor-js')
@stack('page-js')
<script>
    $('.thisDevice').text('Your device size : ' + screen.width + 'px' + ' x ' + screen.height + 'px');
    $(document).ready(function () {
        let height, width;
        if (localStorage.getItem('d__') === null) {
            height = $(window).height();
            width = $(window).width();
            localStorage.setItem('d__', JSON.stringify({'y': height, 'x': width}));
        } else {
            let deviceInfo = JSON.parse(localStorage.getItem('d__'));
            height = deviceInfo.y;
            width = deviceInfo.x;
            deviceInfoValidation();
        }

        let displayWidth = $(window).width(),
            ratio = window.devicePixelRatio,
            displaySize = (ratio / 96) * displayWidth;

        if (displaySize < 10) {
            if (document.URL !== '{{route('wrong-experiment')}}') {
                window.location.href = "{{route('wrong-experiment')}}";
            }
        }

        // $(window).resize(function () {
        //     deviceInfoValidation()
        // });
        //
        // function deviceInfoValidation() {
        //     let body = $('body'),
        //         storedH = height - body.height(),
        //         storedW = width - body.width();
        //     if (storedH > 10 || storedH < -10 || storedW > 10 || storedW < -10) {
        //         $('.unsupported').show()
        //     } else {
        //         $('.unsupported').hide()
        //     }
        // }
        //
        // if (window.history && window.history.pushState) {
        //     window.history.pushState(disableBack());
        // }
        // function disableBack() {
        //     window.history.forward();
        // }
    });
</script>
</body>
</html>
