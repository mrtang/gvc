<header class="only-pc">
    <div class="container">
        <div class="header-left">
            <a href="/" class="logo"><img src="{{Asset('assets/frontendV3/images/4.png')}}" alt=""></a>
            <a href="/" class="{{ Route::currentRouteName() == 'home' ? 'active' : ''}}">Trang chủ</a>
            <a href="{{ URL::to('/tin-tuc') }}" class="{{ Route::currentRouteName() == 'new.list' ? 'active' : ''}}">Tin tức</a>
            <a href="/hoc-vien">Học viện</a>
            <a href="/thu-vien">Thư viện</a>
<!--            <a href="" data-toggle="modal" data-target="#cashModal">Nạp code</a>-->
            <a href="#" class="support" target="_blank">Hỗ trợ</a>
            <a href="#" class="support" target="_blank" style="font-size: 1.3rem">Tài khoản</a>
        </div>
        <div class="header-right actions">
            <a href="#" class="register"><img src="{{Asset('assets/frontendV3/images/icon-person.png')}}" alt="">Đăng ký</a>
            <a href=""  data-toggle="modal" data-target="#helpModal" class="btn-action small recharge btn-gray"><img src="{{Asset('assets/frontendV3/images/C.png')}}" alt=""><span>Nạp Coin</span></a>
            <a href="/tai-game" class="btn-action small download btn-green">
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
            <img src="{{Asset('assets/frontendV3/images/logo.png')}}" alt="">
        </a>
        <span class="right">
            <a href="https://www.facebook.com/officialfo4vn/" class="facebook">
                <img src="images/facebook.png" alt="">
            </a>
            <a href="https://www.youtube.com/channel/UCrCqu1n0H52uGETAoSmgNdQ" class="youtube">
                <img src="{{Asset('assets/frontendV3/images/youtube.png')}}" alt="">
            </a>
            <a class="menu">
                <img src="{{Asset('assets/frontendV3/images/mobile/menu.png')}}" alt="">
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
            <a href="/"><img src="images/fo4.png" alt=""></a>
        </div>
        <ul>
            <li class="search">
                <input type="text" placeholder="Nhập nội dung tìm kiếm">
                <img src="images/icon-search.png" alt="">
            </li>
            <li><a href="/" class="menu-home {{ Route::currentRouteName() == 'home' ? 'active' : ''}}">Trang chủ</a></li>
            <li><a href="/tin-tuc" class="menu-news">Tin tức</a></li>
            <li><a href="/hoc-vien" class="menu-feature">Học viện</a></li>
            <li><a href="/thu-vien" class="">Thư viện</a></li>
<!--            <li><a  data-toggle="modal" data-target="#cashModal" class="menu-recharge">Nạp code</a></li>-->
            <li><a href="#" class="menu-support">Hỗ trợ</a></li>
            <li><a href="#" class="menu-support" target="_blank">EP Point Shop</a></li>
            <li><a href="#" class="menu-support" target="_blank">Tài khoản</a></li>
            <li>
                <a href="#" class="register"><img src="images/icon-person.png" alt="">Đăng ký</a>
            </li>
            <li class="actions">
                <a href="" data-toggle="modal" data-target="#helpModal" class="btn-action small recharge btn-green"><img src="{{Asset('assets/frontendV3/images/C.png')}}" alt=""><span>Nạp FC</span></a>
            </li>
            <li class="actions">
                <a href="/tai-game" class="btn-action small download btn-gray">
                    <img src="{{Asset('assets/frontendV3/images/icon-down.png')}}" alt=""><span>Tải GTA</span>
                </a>
            </li>
        </ul>
    </div>

</div>