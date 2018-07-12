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
            <a href="{{ URL::to('/shop') }}" class="{{ Route::currentRouteName() == 'shop.list' ? 'active' : ''}}">G-Shop</a>
            <a href="https://forum.gta-online.vn" class="support" target="_blank">Forum</a>
        </div>
        <div class="header-right actions">
            @if (empty($currentAccount))
            <a href="#" class="register" data-toggle="modal" data-target="#regisModal"><img src="{{Asset('assets/frontendV3/images/icon-person.png')}}" alt="">Đăng ký</a>
            <a href="#"  data-toggle="modal" data-target="#loginModal" class="btn-action small btn-gray"><span>Đăng nhập</span></a>
            @else
            <a href="{{ URL::to('/dang-xuat') }}" class="register"><img src="{{Asset('assets/frontendV3/images/icon-person.png')}}" alt="">Đăng xuất</a>
            <a href="{{ URL::to('/tai-khoan/quan-ly-nhan-vat') }}" class="btn-action small recharge btn-gray"><span>{{$currentAccount->UserName}}</span></a>
            @endif
            <a href="https://gta-online.vn/tin-tuc/41/huong-dan-su-dung-launcher-toan-tap-ban-gta-sa-fullrip.html" class="btn-action small download btn-green">
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
                    <div class="modal-content login-md">
                        <div class="popup-content">
                            <button type="button" class="btn btn-default close" data-dismiss="modal">X</button>
                            <div class="head">
                                <h2 class="popup-title title-1 title-pup">Đăng nhập</h2>
                                <p style="text-align: center;font-size: 12px;margin-top: -10px;">Tên tài khoản và mật khẩu</p>
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
                                <div class="form-group" style="width: 230px;margin-top: -50px;margin-left: 15px;">
                                    <img class="user-icon" src="{{Asset('assets/frontendV3/images/user-icon.png')}}">
                                    <input type="text" class="form-control inp-log" name="username" style="text-align: center;margin-left: 55%;background-color: #000;color: #FFF;" placeholder="Tên tài khoản">
                                </div>
                                <div class="form-group" style="width: 230px;margin-top: -46px;margin-left: 15px;">
                                    <img class="user-icon" src="{{Asset('assets/frontendV3/images/lock-icon.png')}}">
                                    <input type="password" class="form-control inp-log" name="password" style="text-align: center;margin-left: 55%;background-color: #000;color: #FFF;" placeholder="Mật khẩu">
                                </div>
                                <p style="text-align: right;font-size: 13px; margin-top: 5px;width: 358px;"><a href="javascript:void(0)" id="forgotPass" style="color: #feba01;">Quên mật khẩu ?</a></p>
                                <div style="text-align: center;width: 490px;">
                                    <button class="btn-action small" type="submit" style="color: #000;width: 130px;height: 30px;margin-bottom: 10px;border-radius: 10px;">Đăng nhập</button>
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
    <!-- Modal Register -->
    <div class="modal fade" id="regisModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content regis-md">
                <div class="popup-content">
                    <button type="button" class="btn btn-default close" data-dismiss="modal">X</button>
                    <div class="head">
                        <h2 class="popup-title title-1 title-pup">Đăng ký</h2>
                    </div>
                    {{
                        Form::open(array(
                            'action' => 'AccountController@register',
                            'class' => 'smart-form client-form',
                            'id' => 'form-user-register',
                            'method' => 'post',
                            'data-remote' => 'true',
                            'data-type' => 'json',
                            'novalidate'
                        ))
                    }}
                    <div class="">
                        <p id="regis-error" style="color: #EB0000;text-align: center;"></p>
                    </div>
                    <div class="form-group" style="width: 400px;">
                        <input type="text" class="form-control" name="username" style="margin-top: 10px;margin-left: 45px;background-color: #000;color: #FFF;" placeholder="Tên tài khoản">
                    </div>
                    <div class="form-group" style="width: 400px;">
                        <input type="password" class="form-control" name="password" style="margin-top: 10px;margin-left: 45px;background-color: #000;color: #FFF;" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group" style="width: 400px;">
                        <input type="password" class="form-control" name="confirm_password" style="margin-top: 10px;margin-left: 45px;background-color: #000;color: #FFF;" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="form-group" style="width: 400px;">
                        <input type="email" class="form-control" name="email" style="margin-top: 10px;margin-left: 45px;background-color: #000;color: #FFF;" placeholder="Email">
                        <span style="margin-left: 45px;font-size: 10px;color: #feba01;">Bạn cần xử dụng email này trong trường hợp đổi lại mật khẩu</span>
                    </div>
                    <div class="form-group" style="width: 400px;">
                        <input type="text" class="form-control" name="friend" style="margin-top: 10px;margin-left: 45px;background-color: #000;color: #FFF;" placeholder="ID người giới thiệu (nếu có)">
                    </div>
                    <div class="form-group" style="width: 400px;">
                        <label class="checkbox-inline" style="margin-left: 45px;font-size: 11px;padding-top: 5px;"><input type="checkbox" value="1" name="agree" style="margin-top: 0px;">Tôi đồng ý với <a href="#">Điều khoản dịch vụ</a> và <a href="#">Chính sách bảo mật</a></label>
                    </div>
                    <div style="text-align: center;width: 490px;">
                        <button class="btn-action small" type="submit" style="color: #FFF;width: 83%;height: 30px;background-color: #feba01;border-radius: 2px;margin-bottom: 20px;border: none;">Đăng ký ngay</button>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <div class="popup">
        <!-- Modal help -->
        <div class="modal fade" id="ruleModal" role="dialog" style="display: none;">
            <div class="modal-dialog"><div class="modal-content">
                <div class="modal-body"><div class="popup-content">
                    <button type="button" class="btn btn-default close" data-dismiss="modal"><img src="https://cdn.vn.garenanow.com/web/fo3/fo4/epp/images/X.png"></button>
                    <div class="body">
                        <h2>Quy định</h2>
                        <div class="text-content rule-main-content">
                            <div class="scroll-wrapper">
                                <div class="side-left" style="font-size: 2rem;">
                                    <div class="title-text">
                                        <strong>Thời gian:</strong>
                                    </div>
                                    <ul><li style="font-size: 1.7rem;">Bắt đầu: ngày 20/06/2018</li></ul>
                                    <div class="title-text"><strong>Hướng dẫn chung:</strong></div>
                                    <ul style="text-align: left; line-height: 3rem;">
                                        <li style="font-size: 1.7rem;"><!-- react-text: 55 -->Đăng nhập vào trang: <!-- /react-text --><a class="linkrule" target="_blank" href="#">https://gta-online.vn</a><!-- react-text: 57 --> để kiểm tra xem mình có thể nhận được bao nhiêu điểm EP Point.<!-- /react-text --></li><li style="font-size: 1.7rem;">Sử dụng điểm EP Point đang có để mua vật phẩm mình thích</li><li style="font-size: 1.7rem;">Có thể kiểm tra lại vật phẩm mình đã mua ở Lịch sử mua.</li><li style="font-size: 1.7rem;">Điểm EP Point của bạn được sử dụng chung cho cả 2 shop EP Point Shop FO3 &amp; EP Point Shop FO4. Vì thế khi bạn mua vật phẩm ở EP Point Shop FO3 và EP Point Shop FO4 điểm EP Point của bạn đều bị trừ.</li><li style="font-size: 1.7rem;">Một số vật phẩm ở EP Point Shop FO4 bị giới hạn lần mua, các HLV không thể mua vượt số lần giới hạn đấy.</li><li style="font-size: 1.7rem;">Các vật phẩm sau một thời gian có thể thay đổi nếu vật phẩm hết hạn</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>






