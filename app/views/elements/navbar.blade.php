<header class="only-pc">
    <?php $currentAccount = BaseController::getAccountInfo(); ?>
    <div class="container">
        <div class="header-left">
            <a href="/" class="logo"><img src="{{Asset('assets/frontendV3/images/logo_gta.png')}}" style="width: 65px; margin-top: -6px;" alt=""></a>
            <a href="/" class="{{ Route::currentRouteName() == 'home' ? 'active' : ''}}">Trang chủ</a>
            <a href="{{ URL::to('/tin-tuc') }}" class="{{ Route::currentRouteName() == 'new.list' ? 'active' : ''}}">Tin tức</a>
            <a href="{{ URL::to('/hoc-vien') }}" class="{{ Route::currentRouteName() == 'academy.list' ? 'active' : ''}}">Học viện</a>
            <a href="{{ URL::to('/thu-vien') }}" class="{{ Route::currentRouteName() == 'library.list' ? 'active' : ''}}">Thư viện</a>
<!--            <a href="" data-toggle="modal" data-target="#cashModal">Nạp code</a>-->
            <a href="{{ URL::to('/shop') }}" class="support" class="{{ Route::currentRouteName() == 'shop.list' ? 'active' : ''}}">G-Shop</a>
            <a href="https://forum.gta-online.vn" class="support" target="_blank">Forum</a>
        </div>
        <div class="header-right actions">
            @if (empty($currentAccount))
            <a href="{{ URL::to('/cau-hoi-dang-ky') }}" class="register"><img src="{{Asset('assets/frontendV3/images/icon-person.png')}}" alt="">Đăng ký</a>
            <a href="#"  data-toggle="modal" data-target="#loginModal" class="btn-action small btn-gray"><span>Đăng nhập</span></a>
            @else
            <a href="{{ URL::to('/dang-xuat') }}" class="register"><img src="{{Asset('assets/frontendV3/images/icon-person.png')}}" alt="">Đăng xuất</a>
            <a href="{{ URL::to('/tai-khoan/quan-ly-nhan-vat') }}" class="btn-action small recharge btn-gray"><span>{{$currentAccount->UserName}}</span></a>
            @endif
            <a href="https://gta-online.vn/Launcher/GvC%20Launcher.exe" class="btn-action small download btn-green">
<!--            <a href="javascript:void(0)" class="btn-action small download btn-green"  data-toggle="modal" data-target="#commingSoonModal">-->
                <img src="{{Asset('assets/frontendV3/images/icon-down.png')}}" alt="">
                <span>Tải GTA</span>
            </a>
            <div class="search">
                <input type="text" placeholder="Nhập nội dung tìm kiếm">
                <img src="{{Asset('assets/frontendV3/images/icon-search.png')}}" alt="">
            </div>
        </div>
    </div>
</header>
<header class="only-mobile">
    <div class="header-horizontal">
        <a href="/" class="logo" data-aos="zoom-in-right">
            <img class="img-responsive" src="{{Asset('assets/frontendV3/images/logo_gta.png')}}" alt="" style="width: 52px;margin-top: 3px;">
        </a>
        <span class="right">
            <a class="menu">
                <img src="{{Asset('assets/frontendV3/images/menu.png')}}" alt="">
            </a>
        </span>
    </div>
    <div class="header-vertical">

    </div>
</header>
<div class="nav-menu only-mobile">
    <div class="menu-wrapper">
        <div class="logo-menu">
            <span class="close-menu">X</span>
            <a href="/"><img src="{{Asset('assets/frontendV3/images/logo_gta.png')}}" alt=""></a>
        </div>
        <ul>
            <li class="search">
                <input type="text" placeholder="Nhập nội dung tìm kiếm">
                <img src="{{Asset('assets/frontendV3/images/icon-search.png')}}" alt="">
            </li>
            <li><a href="/" class="menu-home {{ Route::currentRouteName() == 'home' ? 'active' : ''}}">Trang chủ</a></li>
            <li><a href="{{ URL::to('/tin-tuc') }}" class="menu-news">Tin tức</a></li>
            <li><a href="#" class="menu-feature">Học viện</a></li>
            <li><a href="#" class="">Thư viện</a></li>
<!--            <li><a  data-toggle="modal" data-target="#cashModal" class="menu-recharge">Nạp code</a></li>-->
            <li><a href="#" class="menu-support" target="_blank">G-shop</a></li>
            <li>
                <a href="{{ URL::to('/cau-hoi-dang-ky') }}" class="register"><img src="{{Asset('assets/frontendV3/images/icon-person.png')}}" alt="">Đăng ký</a>
            </li>
        </ul>
    </div>
</div>
@if (empty($currentAccount))
            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color: black; opacity: 0.8;border: 2px solid #feba01;">
                        <div class="popup-content">
                            <button type="button" class="btn btn-default close" data-dismiss="modal">X</button>
                            <div class="head">
                                <h2 class="popup-title title-1" style="text-align: center;margin-top: 30px;">Đăng nhập</h2>
                            </div>
                            {{
                                Form::open(array(
                                    'action' => 'AccountController@login',
                                    'class' => 'smart-form client-form',
                                    'id' => 'form-admin-login',
                                    'method' => 'post',
                                    'data-remote' => 'true',
                                    'data-type' => 'json',
                                    'novalidate'
                                ))
                            }}
                                <div class="">
                                    <p id="login-error" style="color: #EB0000;text-align: center;"></p>
                                </div>
                                <div class="form-group" style="width: 230px;">
                                    <input type="text" class="form-control" name="username" style="text-align: center;margin-left: 55%;background-color: #000;color: #FFF;">
                                </div>
                                <div class="form-group" style="width: 230px;">
                                    <input type="password" class="form-control" name="password" style="text-align: center;margin-left: 55%;background-color: #000;color: #FFF;">
                                </div>
                                <p style="text-align: right;font-size: 13px; margin-top: 5px;width: 358px;"><a href="javascript:void(0)" id="forgotPass" style="color: #feba01;">Quên mật khẩu ?</a></p>
                                <div style="text-align: center;width: 490px;">
                                    <button class="btn-action small" type="submit" style="color: #000;width: 130px;height: 30px;background-color: #feba01;border-radius: 2px;margin-bottom: 10px;">Đăng nhập</button>
                                </div>
                            {{Form::close()}}

                            <div class="forgotPassword" style="display: none; margin-top: 20px;">
                                {{ Form::open(array(
                                'action' => 'AccountController@forgot',
                                'id' => 'form-user-forgotpass',
                                'class' => '',
                                'method' => 'post',
                                'data-remote' => 'true',
                                'data-type' => 'json',
                                'novalidate',
                                'autocomplete' => 'off'
                                )) }}
                                <div style="">
                                    <div class="row">
                                        <p id="send-success" style="padding: 0 15px;"></p>
                                        <div class="col-xs-9">
                                            <div class="form-group" style="width: 230px;">
                                                <input type="text" class="form-control" name="username" style="text-align: center;margin-left: 55%;background-color: #000;color: #FFF;" placeholder="Nhập tài khoản của bạn">
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <button class="btn-action small" type="submit" style="color: #000;width: 60px;height: 30px;background-color: #feba01;border-radius: 2px; margin-top: 2px;"> Gửi</button>
                                        </div>
                                    </div>
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endif