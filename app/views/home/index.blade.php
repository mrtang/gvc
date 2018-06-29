@section('content')
    <div class="page home-page">
        <div class="section section-1">
            <style>
                ._18{
                    position: absolute;
                    top: 10rem;
                    left: 3rem;
                    z-index: 3;
                    width: 15rem;
                }
                @media all and (max-width: 750px) {
                    ._18{
                        top: 20rem;
                        left: 0rem;
                        width: 10rem;
                    }
                }
            </style>
            <img class="texture only-pc top" data-aos="fade-down-left"
                 data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/pc/slide-1-top.png')}}"/>
            <img class="texture only-pc bottom" data-aos="fade-down-left"
                 data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/pc/slide-1-bottom-down.png')}}"/>
            <img class="texture only-pc bottom up" data-aos="fade-up-right"
                 data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/pc/slide-1-bottom-up.png')}}"/>
            <img class="texture only-mobile top" data-aos="fade-up-right"
                 data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/mobile/slide-1-top.png')}}"/>
            <img class="texture only-mobile bottom" data-aos="fade-down-left"
                 data-aos-duration="100"
                 src="{{Asset('assets/frontendV3/images/texture/mobile/slide-1-bottom.png')}}"/>
            <div class="bg-image bg-base"></div>
            <div class="bg-image bg-light"></div>
            <div class="bg-image bg-ronaldo" data-aos="zoom-out-right" data-aos-duration="1500"></div>
            <div class="bg-image bg-blur"></div>
            <div class="content">
                <div class="actions">
                    <a href="#" class="btn-action big download btn-green only-pc">
                        <img src="{{Asset('assets/frontendV3/images/icon-down.png')}}" alt="">
                        <span class="text">Tải game</span>
                    </a>
                    <a href="#" class="btn-action big btn-gray help only-pc">
                        <img src="{{Asset('assets/frontendV3/images/icon-help.png')}}" alt="">
                        <span class="text">Học viện</span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#helpModal" class="close-beta-cash only-mobile">
                        <img src="{{Asset('assets/frontendV3/images/cash.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="scroll-mouse">
                <div class="mouse-down">
                    <img src="{{Asset('assets/frontendV3/images/mouse-outline.png')}}" alt="">
                    <span>CUỘN CHUỘT NGAY VÀ CẢM NHẬN</span>
                </div>
            </div>
        </div>
                            <div class="section section-2 section-dynamic">
                <img class="category-slide" src="{{Asset('assets/frontendV3/images/badge-su-kien-black.png')}}"/>
                <img class="texture only-pc top" data-aos="fade-down-left" data-aos-duration="100"
                     src="{{Asset('assets/frontendV3/images/texture/pc/slide-2-top.png')}}"/>
                <div class="section-wrapper">
                    <div class="container">
                        <div class="section-right section-image">
                                                    </div>
                        <div class="section-left section-text">
                            <img class="texture only-mobile top" data-aos="fade-up-right" data-aos-duration="1000"
                                 src="{{Asset('assets/frontendV3/images/texture/mobile/slide-2-top.png')}}"/>
                            <img class="texture only-mobile bottom" data-aos="fade-down-left" data-aos-duration="1000"
                                 src="{{Asset('assets/frontendV3/images/texture/mobile/slide-2-bottom.png')}}"/>
                            <div class="wrapper">
                                <h2 class="title-news">Đồng hành cùng đội bóng yêu thích</h2>
                                <div class="about-news">
                                    Chuỗi sự kiện đồng hành cùng FIFA World Cup 2018 với nhiều sự kiện hấp dẫn cùng nhiều giải thưởng giá trị. Các sự kiện gồm: Đi Tìm Thánh Dự, Cổ Vũ Đội Bóng, e-World Cup Championship hứa hẹn một mùa ăn ngủ cùng bóng đá đầy sôi động!                                </div>
                                <div class="actions thin-actions">
                                    <a href="https://worldcup.fo4.garena.vn/"
                                       class="dark">Xem ngay</a>
                                    <a href="https://worldcup.fo4.garena.vn/"
                                       class="white">Tin
                                        khác</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-image-wrapper">
                    <img src="{{Asset('assets/frontendV3/images/dong-hanh-1.jpg')}}" alt=""
                         class="bg only-pc">
                    <img src="{{Asset('assets/frontendV3/images/dong-hanh-2.png')}}" alt=""
                         class="bg only-mobile">
                </div>
            </div>
                                    <div class="section section-3 section-dynamic">
                <img class="category-slide" src="{{Asset('assets/frontendV3/images/VP.png')}}"/>
                <img class="texture only-pc top" data-aos="fade-down-left" data-aos-duration="1000"
                     src="{{Asset('assets/frontendV3/images/texture/pc/slide-3-top.png')}}"/>
                <img class="texture only-pc bottom" data-aos="fade-down-left" data-aos-duration="1000"
                     src="{{Asset('assets/frontendV3/images/texture/pc/slide-3-bottom-down.png')}}"/>
                <img class="texture only-pc bottom up" data-aos="fade-up-right" data-aos-duration="1000"
                     src="{{Asset('assets/frontendV3/images/texture/pc/slide-3-bottom-up.png')}}"/>
                <div class="section-wrapper">
                    <div class="container">

                        <div class="section-left section-image">
                                                    </div>
                        <div class="section-right section-text">
                            <img class="texture only-mobile top" data-aos="fade-up-right" data-aos-duration="1000"
                                 src="{{Asset('assets/frontendV3/images/texture/mobile/slide-3-top.png')}}"/>
                            <img class="texture only-mobile bottom" data-aos="fade-down-left" data-aos-duration="1000"
                                 src="{{Asset('assets/frontendV3/images/texture/mobile/slide-3-bottom.png')}}"/>
                            <div class="wrapper">
                                <h2 class="title-news">Gói 18TOTY</h2>
                                <div class="about-news">
                                    Gửi huấn luyện viên, Gói TOTY là gói vật phẩm siêu cấp đắt giá nhất của FO4 Shop. Nhưng gói này sẽ chỉ được phép bán từ hôm nay đến 11:59 trưa ngày 04/07. Sau thời gian này, bạn sẽ gần như không còn cơ hội nào để mở ra TOTY nữa!                                </div>
                                <div class="actions thin-actions">
                                    <a href="{{Asset('assets/frontendV3/images/goi-toty-20-06.png')}}"
                                       class="dark">Xem ngay</a>
                                    <a href="https://fo4.garena.vn/cac-vat-pham-trong-fo4-shop/"
                                       class="white">Tin
                                        khác</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="bg-image-wrapper">
                    <img src="{{Asset('assets/frontendV3/images/TOTY_desktop.png')}}" alt=""
                         class="bg only-pc">
                    <img src="{{Asset('assets/frontendV3/images/TOTY_mobile.png')}}" alt=""
                         class="bg only-mobile">
                </div>
            </div>
                                    <div class="section section-4 section-dynamic">
                <div class="section-wrapper">
                    <div class="container">
                        <div class="section-right section-image">
                                                    </div>
                        <div class="section-left section-text">
                            <h2 class="title-news">NẠP LẦN ĐẦU – NHẬN QUÀ NGẦU TỪ 20/06 ĐẾN 04/07</h2>
                            <div class="about-news">
                                Chào mừng FO4 Shop và EP Point Shop chính thức mở cửa, FIFA Online 4 Việt Nam sẽ dành tặng những phần quà đặc biệt cho những người thực hiện chuyển Sò sang FC đạt đủ các hạn mức quy định.                            </div>
                            <div class="actions thin-actions">
                                <a href="https://fo4.garena.vn/thong-tin-cac-loai-the-mua-trong-fifa-online-4"
                                   class="dark">Xem ngay</a>
                                <a href="https://fo4.garena.vn/tin-tuc?topic=tin-khuyen-mai" class="white">Tin khác</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-image-wrapper">
                    <img src="{{Asset('assets/frontendV3/images/nap-lan-dau-nhan-qua-ngau-FO4-desktop.png')}}" alt=""
                         class="bg only-pc">
                    <img src="{{Asset('assets/frontendV3/images/nap-lan-dau-nhan-qua-ngau-FO4-mobile.png')}}" alt=""
                         class="bg only-mobile">
                </div>
            </div>
                                    <div class="section section-5 section-dynamic">
                <div class="section-wrapper">
                    <div class="container">
                        <div class="section-left section-image">
                                                    </div>
                        <div class="section-right section-text">
                            <h2 class="title-news">EP Point Shop</h2>
                            <div class="about-news">
                                EP Point Shop đã được mở cửa trở lại! Hãy cùng xem thử những phần quà hoàn toàn miễn phí dành riêng cho những người chơi FO3 như bạn trong FO4 trong những ngày tháng này                            </div>
                            <div class="actions thin-actions">
                                <a href="https://epp.fo4.garena.vn/"
                                   class="dark">Xem ngay</a>
                                <a href="https://fo4.garena.vn/ep-point-shop-fifa-online-4-da-chinh-thuc-mo-cua/" class="white">Tin khác</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="bg-image-wrapper">
                    <img src="{{Asset('assets/frontendV3/images/Ep-poin-shop-1.png')}}" alt=""
                         class="bg only-pc">
                    <img src="{{Asset('assets/frontendV3/images/Ep-poin-shop-mobile.png')}}" alt=""
                         class="bg only-mobile">
                </div>
            </div>

        
    </div>
@stop

