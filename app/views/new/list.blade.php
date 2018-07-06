@section('content')
<div class="page library-page feature-page">
        <div class="section section-6">
            <div class="bg-image-wrapper">
                <img src="{{Asset('assets/frontendV3/images/section-6-bg.jpg')}}" alt="" class="bg only-pc">
            </div>
            <div class="section-main-content">
                <div class="container">
                    <div class="topic">
                        <h2 class="topic-title">Thông báo | Sự kiện</h2>
                        <a href="?topic=thong-bao-su-kien">
                            <img class="topic-image only-pc" src="https://cdn.vn.garenanow.com/web/fo3/fo4/home-page/images/category-news-1.png" alt="">
                            <img class="topic-image only-mobile" src="https://cdn.vn.garenanow.com/web/fo3/fo4/home-page/images/mobile/category-news-1.png" alt="">
                        </a>
                        <p class="topic-caption" alt="">
                            Nơi cập nhật những tin tức mới nhất về các sự kiện ingame, sự kiện offline, giải đấu, và tất tần
                            tật các thông tin khác của FIFA Online 4 Việt Nam
                        </p>
                        <div class="actions">
                            <a class="btn-action small btn-green" href="?topic=thong-bao-su-kien">Xem ngay</a>
                        </div>
                    </div>
                    <div class="topic">
                        <h2 class="topic-title">Tin khuyến mãi</h2>
                        <a href="?topic=tin-khuyen-mai">
                            <img class="topic-image only-pc" src="https://cdn.vn.garenanow.com/web/fo3/fo4/home-page/images/category-news-2.png" alt="">
                            <img class="topic-image only-mobile" src="https://cdn.vn.garenanow.com/web/fo3/fo4/home-page/images/mobile/category-news-2.png" alt="">
                        </a>
                        <p class="topic-caption" alt="">
                            Nơi chia sẻ những tin tức khuyến mãi cực hot trong FIFA Online 4 Việt Nam
                        </p>
                        <div class="actions">
                            <a class="btn-action small btn-green" href="?topic=tin-khuyen-mai">Xem ngay</a>
                        </div>

                    </div>
                    <div class="topic">
                        <h2 class="topic-title">Thông tin vật phẩm</h2>
                        <a href="?topic=thong-tin-vat-pham">
                            <img class="topic-image only-pc" src="https://cdn.vn.garenanow.com/web/fo3/fo4/home-page/images/category-news-3.png" alt="">
                            <img class="topic-image only-mobile" src="https://cdn.vn.garenanow.com/web/fo3/fo4/home-page/images/mobile/category-news-3.png" alt="">
                        </a>
                        <p class="topic-caption" alt="">
                            FO4 Shop đang bày bán những vật phẩm gì? Chất lượng của từng món ra sao? Tất cả các thông tin đó
                            sẽ được lưu ý ở đây
                        </p>
                        <div class="actions">
                            <a class="btn-action small btn-green" href="?topic=thong-tin-vat-pham">Xem
                                ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-7">
            <img class="texture only-pc top" data-aos="fade-up-right" data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/pc/news-2-top.png')}}"/>
            <img class="texture only-pc bottom" data-aos="fade-down-left" data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/pc/news-2-bottom.png')}}"/>
            <img class="texture only-pc left" data-aos="fade-up-left" data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/pc/news-2-left.png')}}"/>
            <img class="texture only-pc right" data-aos="fade-down-right" data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/pc/news-2-right.png')}}"/>
            <img class="texture only-mobile top" data-aos="fade-up-right" data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/mobile/news-2-top.png')}}"/>
            <img class="texture only-mobile bottom" data-aos="fade-down-left" data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/mobile/news-2-bottom.png')}}"/>
            <img class="texture only-mobile right" data-aos="fade-down-left" data-aos-duration="1000"
                 src="{{Asset('assets/frontendV3/images/texture/mobile/news-2-right.png')}}"/>
            <div class="container">
                <div class="section-news" id="thu-vien">
                                        <h1 class="title-section" style="font-family: Roboto Condensed;">Tin khuyến mãi</h1>
                    <div class="latest-news">
                            <div class="left-side only-pc">
                                <?php $imageUrl = Media::find($hotNews->media_id); ?>
                                <a href="{{ URL::to('/tin-tuc/'.$hotNews->new_id.'/'.$hotNews->slug.'.html') }}">
                                    <img src="{{ $imageUrl->path.$imageUrl->original }}"
                                         alt="">
                                </a>
                            </div>
                            <div class="right-side">
                                <h2 class="news-title">
                                    <a href="{{ URL::to('/tin-tuc/'.$hotNews->new_id.'/'.$hotNews->slug.'.html') }}">{{$hotNews->title}}</a>
                                </h2>
                                <div class="news-time">{{date('H',strtotime($hotNews->created_at))}}h{{date('i',strtotime($hotNews->created_at))}} - {{date('d/m/Y',strtotime($hotNews->created_at))}}</div>
                                <a href="{{ URL::to('/tin-tuc/'.$hotNews->new_id.'/'.$hotNews->slug.'.html') }}" class="only-mobile">
                                    <img src="{{ $imageUrl->path.$imageUrl->original }}"
                                         alt="">
                                </a>
                                <div class="news-caption">{{$hotNews->summary}}</div>
                                <div class="actions thin-actions">
                                    <a href="{{ URL::to('/tin-tuc/'.$hotNews->new_id.'/'.$hotNews->slug.'.html') }}">Xem chi tiết</a>
                                </div>
                            </div>
                    </div>
                    <div class="list-news">
                        @foreach($news as $value)
                            <div class="news">
                                <?php $imageUrlN = Media::find($value->media_id); ?>
                                <a href="{{ URL::to('/tin-tuc/'.$value->new_id.'/'.$value->slug.'.html') }}">
                                    <img src="{{ $imageUrlN->path.$imageUrlN->original }}"
                                         alt="" class="new-image">
                                </a>
                                <h5>
                                    <a class="news-title"
                                       href="{{ URL::to('/tin-tuc/'.$value->new_id.'/'.$value->slug.'.html') }}">{{$value->title}}</a>
                                </h5>
                                <div class="news-time">{{date('H',strtotime($value->created_at))}}h{{date('i',strtotime($value->created_at))}} - {{date('d/m/Y',strtotime($value->created_at))}}</div>
                                <div class="new-caption">{{$value->summary}}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop