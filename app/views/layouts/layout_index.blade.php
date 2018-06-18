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
        <!--script src='https://www.google.com/recaptcha/api.js?hl=vi'></script-->
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
            <div class="copyright">
                <div class="container">

                <p>© 2018&nbsp;

                    Made by gvc.        
                 || 

                 <a href="#"> 
                T&amp;T
                 </a>   &nbsp;

                </p><div class="social">
                 <a class="rss" target="_blank" href="#"><i class="fas fa-rss"></i> </a>     <a class="dribbble" target="_blank" href="#"><i class="fab fa-dribbble"></i> </a>   <a class="vimeo" target="_blank" href="#"><i class="fab fa-vimeo-v"></i> </a>   <a class="youtube" target="_blank" href="#"><i class="fab fa-youtube"></i> </a>     <a class="twitch" target="_blank" href="#"><i class="fab fa-twitch"></i></a>    <a class="steam" target="_blank" href="#"><i class="fab fa-steam"></i></a>  <a class="pinterest" target="_blank" href="#"><i class="fab fa-pinterest"></i> </a>     <a class="google-plus" target="_blank" href="#"><i class="fab fa-google-plus"></i></a>  <a class="twitter" target="_blank" href="#"><i class="fab fa-twitter"></i></a>  <a class="facebook" target="_blank" href="#"><i class="fab fa-facebook"></i></a>   </div>

                </div>
            </div>
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
        {{ HTML::script('assets/frontendnew/js/libs/scripts.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/ps.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/jquery.clickoutside.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/inview.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/global.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/owl.carousel.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/wp-owl-carousel.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/ubermenu.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/wp-embed.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/js_composer_front.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/waypoints.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/core.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/tabs.min.js') }}
        {{ HTML::script('assets/frontendnew/js/libs/widget.min.js') }}
        {{ HTML::script('assets/frontend/js/libs/common.js') }}
         @section('scripts')
        @show

            <script>
            (function($) {
                var $document = $(document);

                /**
                 * login (normal)
                 */
                $document.on({
                    'ajax:beforeSend': function() {
                        $.utils.clearFieldError('form-admin-login');
                        $(this).find('.btn').attr('disabled', 'disabled');
                        $('#login-error').text('');
                        $('.alert').css('display', 'none');
                    },
                    'ajax:success': function(e, data) {
                        console.log(data);
                        if (data.status) {
                            if (typeof data.redirect != '') {
                                window.location.href = data.redirect;
                            } else {
                                window.location.reload();
                            }

                        } else {
                            if (data.code == 'invalid_data') {
                                for (var field in data.messages) {
                                    //$.utils.showFieldError('form-admin-login', field, data.messages[field][0]);

                                    $('#login-error').text(data.messages[field][0]);
                                    break;
                                }
                                $.utils.autoFocus('form-admin-login', '.input-error');
                            }
                            else {
                                $('#login-error').text(data.message);
                                $('.alert').css('display', 'block');
                            }

                        }
                    },
                    'ajax:complete': function() {
                        $(this).find('.btn').removeAttr('disabled');
                    }

                }, '#form-admin-login');


                $document.on({
                    'ajax:beforeSend': function() {
                        $.utils.clearFieldError('form-change-password');
                        $(this).find('.btn').attr('disabled', 'disabled');
                        $('#login-error').text('');
                        $('.alert').css('display', 'none');
                    },
                    'ajax:success': function(e, data) {
                        console.log(data);
                        if (data.status) {
                            if (typeof data.redirect != '') {
                                window.location.href = data.redirect;
                            } else {
                                window.location.reload();
                            }

                        } else {
                            if (data.code == 'invalid_data') {
                                for (var field in data.messages) {
                                    $.utils.showFieldError('form-change-password', field, data.messages[field][0], 1);

                                    //$('#login-error').text(data.messages[field][0]);
                                    //break;
                                }
                                $.utils.autoFocus('form-change-password', '.input-error');
                            }
                            else {
                                $('#login-error').text(data.message);
                                $('.alert').css('display', 'block');
                            }

                        }
                    },
                    'ajax:complete': function() {
                        $(this).find('.btn').removeAttr('disabled');
                    }

                }, '#form-change-password');

                /**
                 * Admin forgot password (normal)
                 */
                $document.on({
                    'ajax:beforeSend': function() {
                        $.utils.clearFieldError('form-user-forgotpass');
                        $(this).find('.btn').attr('disabled', 'disabled');
                        $('#login-error').text('');
                        $('.alert').css('display', 'none');
                        $('#send-success').text('');
                    },
                    'ajax:success': function(e, data) {
                        if (data.status) {
                            if (typeof data.redirect != '') {
                                window.location.href = data.redirect;
                            } else {
                                window.location.reload();
                            }
                            //$('#send-success').text('Chúng tôi đã gửi mật khẩu mới vào email của bạn, vui lòng kiểm tra email.');
                        } else {
                            if (data.code == 'invalid_data') {
                                for (var field in data.messages) {
                                    $.utils.showFieldError('form-user-forgotpass', field, data.messages[field][0], 1);
                                }
                                $.utils.autoFocus('form-user-forgotpass', '.input-error');
                                $('#login-error').text('');
                            }
                            else {
                                $('#login-error').text(data.message);
                                $('.alert').css('display', 'block');
                            }

                        }
                    },
                    'ajax:complete': function() {
                        $(this).find('.btn').removeAttr('disabled');
                    }

                }, '#form-user-forgotpass');


                $document.on({
                    'ajax:beforeSend': function() {
                        $.utils.clearFieldError('form-change-email');
                        $(this).find('.btn').attr('disabled', 'disabled');
                        $('#login-error').text('');
                        $('.alert').css('display', 'none');
                    },
                    'ajax:success': function(e, data) {
                        console.log(data);
                        if (data.status) {
                            if (typeof data.redirect != '') {
                                window.location.href = data.redirect;
                            } else {
                                window.location.reload();
                            }

                        } else {
                            if (data.code == 'invalid_data') {
                                for (var field in data.messages) {
                                    $.utils.showFieldError('form-change-email', field, data.messages[field][0], 1);

                                    //$('#login-error').text(data.messages[field][0]);
                                    //break;
                                }
                                $.utils.autoFocus('form-change-email', '.input-error');
                            }
                            else {
                                $('#login-error').text(data.message);
                                $('.alert').css('display', 'block');
                            }

                        }
                    },
                    'ajax:complete': function() {
                        $(this).find('.btn').removeAttr('disabled');
                    }

                }, '#form-change-email');


                $('#forgotPass').click(function(){
                    $( ".forgotPassword" ).animate({
                        height: "toggle"
                    }, 200, function() {
                    });
                });
            })(jQuery);

            $(document).ready(function() {
                $('#agree').keyup(function() {
                    if ($(this).val() == 'tôi đồng ý')
                    $('#next-step').css('display', 'block');
                });
            });
        </script>
    </body>
</html>