<style type="text/css">
    .modal-backdrop {
  z-index: -1;
}
.modal-content{
    border-radius: 15px !important;
    }
</style>
<div class="menu-profile" style="margin-top: 74px;">
    <nav class="navbar navbar-default">
        <div class="container-fluid container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="{{ Route::currentRouteName() == 'account.characters' || Route::currentRouteName() == 'account.characters.create' || Route::currentRouteName() == 'account.characters.edit' ? 'active' : '' }}"><a href="{{ URL::to('/tai-khoan/quan-ly-nhan-vat') }}" >QUẢN LÝ NHÂN VẬT</a></li>
                    <li><a href="#">QUẢN LÝ TICKET</a></li>
                    <li><a href="#">QUẢN LÝ TICKET</a></li>
                    <li><a href="#">QUẢN LÝ TICKET</a></li>
                    <li class="{{ Route::currentRouteName() == 'inbox.user.recommend' ? 'active' : '' }}"><a href="{{ URL::to('/tai-khoan/gioi-thieu-nguoi-moi') }}">GIỚI THIỆU</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NÚT CÀI ĐẶT <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="z-index: 999;">
                            <li role="separator" class="divider"></li>
                            <li><a data-toggle="modal" data-target="#loginModals" style="cursor: pointer;">ĐỔI MẬT KHẨU</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a data-toggle="modal" data-target="#emailModals" style="cursor: pointer;">ĐỔI EMAIL</a></li>
                        </ul>
                    </li>
                    <!--li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nạp G-Coin <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ URL::to('/nap-the') }}" style="cursor: pointer;">Nạp thẻ cào </a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ URL::to('/nap-the/lich-su') }}" style="cursor: pointer;">Lịch sử nạp thẻ</a></li>
                        </ul>
                    </li-->
                    <li class="{{ Route::currentRouteName() == 'inbox.user.list' ? 'active' : '' }}">
                        <a href="{{ URL::to('/tai-khoan/hop-thu') }}">
                            <span style="padding-right: 5px;">HÒM THƯ</span>
                            <?php $currentAccount = BaseController::getAccountInfo(); $unreadInbox = Inbox::whereRaw('receive_account_id in ('.$currentAccount->ID.', -1) and is_read = 0', [])->count() ?>
                            @if (!empty($unreadInbox))
                                <span style="background-color: #fff; padding: 2px 7px 2px 7px; border-radius: 50%; color: #9F2B33; font-size: 12px;">{{ $unreadInbox }}</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>

<div class="modal fade" id="loginModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content login-md">
            <div class="modal-body">
                <h3 style="color: #fff; text-align: center; text-transform: uppercase; font-family: RobotoBold; margin-top: 5px;" >
                    <span style="color: #ffc200;">Đổi mật khẩu</span>
                    <p style="margin-top: 5px; font-size: 13px; margin-bottom: 0px; text-transform: none; font-family: RobotoLight;">
                        Nhập mật khẩu hiện tại, nếu mật khẩu chính xác chúng tôi sẽ gửi một đường link thay đổi mật khẩu vào email của bạn.
                    </p>
                </h3>
                {{
                    Form::open(array(
                        'action' => 'AccountController@changePassword',
                        'class' => 'smart-form client-form',
                        'id' => 'form-change-password',
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
                    <input type="password" class="form-control" name="password" style="text-align: center;">
                </div>
                <div style="text-align: center">
                    <button class="btn btn-default db" type="submit" style="width: 90px;height: 30px;">Xác nhận</button>
                </div>
                {{Form::close()}}

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="emailModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content login-md">
            <div class="modal-body">
                <h3 style="color: #fff; text-align: center; text-transform: uppercase; font-family: RobotoBold; margin-top: 5px;" >
                    <span style="color: #ffc200;">Đổi email</span>
                    <p style="margin-top: 5px; font-size: 13px; margin-bottom: 0px; text-transform: none; font-family: RobotoLight;">
                        Nhập mật khẩu hiện tại và email mới, nếu mật khẩu chính xác chúng tôi sẽ gửi một đường link xác nhận thay đổi email vào email mới của bạn.
                    </p>
                </h3>
                {{
                    Form::open(array(
                        'action' => 'AccountController@changeEmail',
                        'class' => 'smart-form client-form',
                        'id' => 'form-change-email',
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
                    <p style="color: #fff; margin-top: 5px; font-size: 13px; margin-bottom: 0px; text-transform: none; font-family: RobotoLight;">
                        Nhập mật khẩu hiện tại
                    </p>
                    <input type="password" class="form-control" name="password" style="text-align: center;">
                </div>
                <div class="form-group">
                    <p style="color: #fff; margin-top: 5px; font-size: 13px; margin-bottom: 0px; text-transform: none; font-family: RobotoLight;">
                        Nhập email mới muốn chuyển
                    </p>
                    <input type="text" class="form-control" name="email" style="text-align: center;">
                </div>
                <div style="text-align: center">
                    <button class="btn btn-default db" type="submit" style="width: 90px;height: 30px;">Xác nhận</button>
                </div>
                {{Form::close()}}

            </div>
        </div>
    </div>
</div>