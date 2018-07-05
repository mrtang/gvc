<!DOCTYPE html>
<html lang="en-us">
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
        <link rel="shortcut icon" href="{{Asset('assets/frontendV3/images/logo_gta.png')}}" type="image/x-icon">
        <link rel="icon" href="{{Asset('assets/frontendV3/images/logo_gta.png')}}" type="image/x-icon">
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
    <!-- BEGIN BODY -->
    <body class="home blog hfeed has-header-image has-sidebar colors-light">
        @yield('content')

        @include('elements/navbar')
        <div class="go-top" id="go-to-top">
            <img src="{{Asset('assets/frontendV3/images/gototop.png')}}" alt="">
        </div>
        @include('elements/footer')

        {{ HTML::script('assets/frontendV3/js/libs/jquery.min.js') }}
        {{ HTML::script('assets/frontendV3/js/libs/bootstrap.min.js') }}
        {{ HTML::script('assets/frontendV3/js/libs/aos.js') }}
        {{ HTML::script('assets/frontendV3/js/libs/app.js') }}
        {{ HTML::script('assets/frontendV3/js/libs/embed.min.js') }}
        {{ HTML::script('assets/frontend/js/libs/common.js') }}
        {{ HTML::script('assets/frontend/js/script.js') }}
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