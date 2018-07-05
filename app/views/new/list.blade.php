@section('content')
<div class="page library-page feature-page">
        <div class="section section-6">
            <div class="bg-image-wrapper">
                <img src="{{Asset('assets/frontendV3/images/section-6-bg.jpg')}}" alt="" class="bg only-pc">
            </div>
            <div class="section-main-content">
                <div class="container">
                    <?php $imageUrlH = Media::find($hotNews->media_id); ?>
                    <div class="topics-wrapper">
                        <div class="topic">
                            <h2 class="topic-title">{{substr($hotNews->title, 0, 27)}}</h2>
                            <a href="{{ URL::to('/tin-tuc/'.$hotNews->new_id.'/'.$hotNews->slug.'.html') }}">
                                <img class="topic-image only-pc" src="{{ $imageUrlH->path.$imageUrlH->original }}" alt="">
                            </a>
                            <p class="topic-caption" alt="">
                                {{$hotNews->summary}}
                            </p>
                            <div class="actions">
                                <a class="btn-action small btn-green" href="{{ URL::to('/tin-tuc/'.$hotNews->new_id.'/'.$hotNews->slug.'.html') }}">Xem
                                    ngay</a>
                            </div>
                        </div>
                        <div class="topic">
                            <?php $imageUrlNT = Media::find($hotNotice->media_id); ?>
                            <h2 class="topic-title">{{substr($hotNotice->title, 0, 27)}}</h2>
                            <a href="{{ URL::to('/tin-tuc/'.$imageUrlNT->new_id.'/'.$imageUrlNT->slug.'.html') }}">
                                <img class="topic-image only-pc img-responsive" src="{{ $imageUrlNT->path.$imageUrlNT->original }}" alt="" style="height: 180px !important;">
                            </a>
                            <p class="topic-caption" alt="">
                                {{$hotNotice->summary}}
                            </p>
                            <div class="actions">
                                <a class="btn-action small btn-green" href="{{ URL::to('/tin-tuc/'.$imageUrlNT->new_id.'/'.$imageUrlNT->slug.'.html') }}">Xem
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
                                        <h1 class="title-section" style="font-family: Roboto Condensed;">TIN TỨC</h1>
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