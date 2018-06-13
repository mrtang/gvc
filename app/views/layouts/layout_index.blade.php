<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>
            @section('title')
                Grand Theft Auto Vietnamese Community
            @show
        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Basic Styles -->
        {{ HTML::style('assets/frontendnew/css/layerslider.css') }}
        {{ HTML::style('assets/frontendnew/css/styles.css') }}
        {{ HTML::style('assets/frontendnew/css/bbpress.css') }}
        {{ HTML::style('assets/frontendnew/css/styless.css') }}
        {{ HTML::style('assets/frontendnew/css/polls-css.css') }}
        {{ HTML::style('assets/frontendnew/css/all.css') }}
        {{ HTML::style('assets/frontendnew/css/jquery.fancybox.css') }}
        {{ HTML::style('assets/frontendnew/css/jquery.bxslider.css') }}
        {{ HTML::style('assets/frontendnew/css/owl.carousel.css') }}
        {{ HTML::style('assets/frontendnew/css/animate.css') }}
        {{ HTML::style('assets/frontendnew/css/owl.theme.css') }}
        {{ HTML::style('assets/frontendnew/css/js_composer.min.css') }}
        {{ HTML::style('assets/frontendnew/css/ubermenu.min.css') }}
        {{ HTML::style('assets/frontendnew/css/cleanwhite.css') }}
        {{ HTML::style('assets/frontendnew/css/skin.css') }}
        
        <!-- FAVICONS -->
        <link rel="shortcut icon" href="{{Asset('assets/frontendnew/images/logo.png')}}" type="image/x-icon">
        <link rel="icon" href="{{Asset('assets/frontendnew/images/logo.png')}}" type="image/x-icon">
        {{ HTML::script('assets/frontendnew/js/libs/greensock.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/jquery.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/jquery-migrate.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/layerslider.kreaturamedia.jquery.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/layerslider.transitions.js') }}
        <script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
        <noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
    </head> <!-- end HEAD -->
    <!-- BEGIN BODY -->
    <body class="home page-template page-template-tmp-home page-template-tmp-home-php page page-id-1753 woocommerce-no-js wpb-js-composer js-comp-ver-5.3 vc_responsive">
        <div id="main_wrapper" class="ls-overflow-visible">
            @include('elements/navbar')
            @include('elements/slider_home')
            @include('elements/news_slider')
            <div class="normal-page">
                <div class="container">
                    @include('elements/download')
                    <div class="vc_row wpb_row vc_row-fluid">
                        @yield('content')
                        @include('elements/left')
                    </div>
                </div>
            </div>
            @include('elements/footer')
        </div>

        {{ HTML::script('assets/frontendnew/js/libs/imagesloaded.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/isotope.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/jquery.webticker.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/jquery.carouFredSel-6.2.1-packed.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/jquery-ui-1.10.3.custom.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/jquery.fancybox.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/appear-img.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/bootstrap.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/polls-js.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/js.cookie.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/jquery.blockUI.min.js') }}
        {{ HTML::script('assets/frontendnew/js/scripts.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/ps.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/jquery.clickoutside.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/inview.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/global.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/owl.carousel.min.js') }}
        {{ HTML::script('assets/frontendnew/js/wp-owl-carousel.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/ubermenu.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/wp-embed.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/js_composer_front.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/waypoints.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/core.min.js') }}
        {{ HTML::script('assets/frontendnew/js/tabs.min.js') }}
        {{ HTML::script('assets/frontendnew/js/widget.min.js') }}
    </body>
</html>