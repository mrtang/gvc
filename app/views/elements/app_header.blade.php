<style type="text/css">
    .modal-backdrop {
  z-index: -1;
}
.modal-content{
    border-radius: 15px !important;
    }
</style>
<header class="only-pc" style="position: absolute;">
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
            <a href="#"  data-toggle="modal" data-target="#loginModal" class="btn-action small recharge btn-gray"><span>Đăng nhập</span></a>
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
<div id="header">
    <div class="header-auth">
        <div class="container">
            <?php $currentAccount = BaseController::getAccountInfo(); ?>
            @if (empty($currentAccount))
            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 style="color: #fff; text-align: center; text-transform: uppercase; font-family: RobotoBold; margin-top: 5px;" >
                                <span style="color: #9F2B33;">Đăng </span>Nhập
                                <p style="margin-top: 5px; font-size: 13px; margin-bottom: 0px; text-transform: none; font-family: RobotoLight;">
                                    Tên tài khoản và mật khẩu
                                </p>
                            </h3>
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
                                    <p id="login-error" style="color: #EB0000"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" style="text-align: center;">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" style="text-align: center;">
                                </div>
                                <p style="text-align: right; font-family: RobotoLight; font-size: 13px; margin-bottom: 0px;"><a href="javascript:void(0)" id="forgotPass" style="color: #EB0000;">Quên mật khẩu ?</a></p>
                                <p style="text-align: right; font-family: RobotoLight; font-size: 13px; margin-top: 0px;"><a href="{{ URL::to('/cau-hoi-dang-ky') }}" style="color: #EB0000;">Chưa có tài khoản ? Đăng ký</a></p>
                                <div style="text-align: center">
                                    <button class="btn btn-default db" type="submit" style="width: 80px;height: 30px;">Đăng nhập</button>
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
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="username" style="text-align: center;" placeholder="Nhập tài khoản của bạn">
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <button class="btn btn-default db" type="submit" style="width: 40px;height: 30px;"> Gửi</button>
                                        </div>
                                    </div>
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>