<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" class="no-js no-svg">
<head>
        <title>
            @section('title')
                Grand Theft Auto Vietnamese Community
            @show
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Basic Styles -->
        {{ HTML::style('assets/frontendV3/css/bootstrap4.min.css') }}
        {{ HTML::style('assets/frontendV3/css/bootstrap.min.css') }}
        {{ HTML::style('assets/frontendV3/css/font.css') }}
        {{ HTML::style('assets/frontendV3/css/aos.css') }}
        {{ HTML::style('assets/frontendV3/css/styles.css') }}
        <!-- FAVICONS -->
        <link rel="shortcut icon" href="{{Asset('assets/frontendnew/images/logo.png')}}" type="image/x-icon">
        <link rel="icon" href="{{Asset('assets/frontendnew/images/logo.png')}}" type="image/x-icon">
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
    </head> <!-- end HEAD -->
<body class="post-template-default single single-post postid-514 single-format-standard has-header-image has-sidebar colors-light">

    <div class="page detail-page">
        @include('elements/bg_news')
        <div class="container">
            @yield('content')
            @include('elements/right')
    </div>
</div>
@include('elements/navbar')
<div class="social only-pc">
    <a target="_blank" href="https://www.facebook.com/gta-online/"><img src="{{Asset('assets/frontendV3/images/facebook.png')}}" alt=""></a>
    <a target="_blank" href="https://www.youtube.com/gta-online/"><img src="{{Asset('assets/frontendV3/images/youtube.png')}}" alt=""></a>
</div>
<div class="go-top" id="go-to-top">
    <img src="{{Asset('assets/frontendV3/images/gototop.png')}}" alt="">
</div>

    @include('elements/footer')

    {{ HTML::script('assets/frontendV3/js/libs/jquery.min.js') }}
    {{ HTML::script('assets/frontendV3/js/libs/bootstrap.min.js') }}
    {{ HTML::script('assets/frontendV3/js/libs/aos.js') }}
    {{ HTML::script('assets/frontendV3/js/libs/app.js') }}
    {{ HTML::script('assets/frontendV3/js/libs/embed.min.js') }}
     @section('scripts')
    @show
</body>
</html>
