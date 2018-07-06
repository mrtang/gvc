@section('content')
<div class="page library-page feature-page">
        <div class="section section-6">
            <div class="bg-image-wrapper">
                <img src="{{Asset('assets/frontendV3/images/section-6-bg.jpg')}}" alt="" class="bg only-pc">
            </div>
            <div class="section-main-content">
                <div class="container">
                    <div class="topics-wrapper">
                        <div class="topic">
                            <h2 class="topic-title">Bản tin cập nhật</h2>
                            <a href="?topic=ban-tin-cap-nhat">
                                <img class="topic-image only-pc" src="https://cdn.vn.garenanow.com/web/fo3/fo4/home-page/images/category-news-1.png" alt="">
                                <img class="topic-image only-mobile" src="/wp-content/themes/fo4/images/mobile/feature-1.png" alt="">
                            </a>
                            <p class="topic-caption" alt="">
                                "Những thay đổi quan trọng của FIFA Online 4 mà bạn cần lưu ý để tránh bỏ quên những
                                tính năng tuyệt vời của chúng tôi sau mỗi lần cập nhật.
                                Hãy chắc rằng mình sẽ không bị “out meta” nhé!"
                            </p>
                            <div class="actions">
                                <a class="btn-action small btn-green" href="?topic=ban-tin-cap-nhat">Xem
                                    ngay</a>
                            </div>
                        </div>
                        <div class="topic">
                            <h2 class="topic-title">Hướng dẫn người mới</h2>
                            <a href="?topic=huong-dan-nguoi-moi">
                                <img class="topic-image only-pc" src="https://cdn.vn.garenanow.com/web/fo3/fo4/home-page/images/category-news-1.png" alt="">
                                <img class="topic-image only-mobile" src="/wp-content/themes/fo4/images/mobile/feature-2.png" alt="">
                            </a>
                            <p class="topic-caption" alt="">
                                Thư viện hướng dẫn dành cho những người lần đầu tiếp xúc với FIFA Online 4. Thế giới trò
                                chơi của chúng ta hết sức rộng lớn với nhiều tính năng phong phú, vì thế, đừng ngại theo
                                dõi những video này trước khi tham gia trò chơi.
                            </p>
                            <div class="actions">
                                <a class="btn-action small btn-green" href="?topic=huong-dan-nguoi-moi">Xem
                                    ngay</a>
                            </div>

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
                                        <h1 class="title-section" style="font-family: Roboto Condensed;">Bản tin cập nhật</h1>
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