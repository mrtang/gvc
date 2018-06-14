@section('content')
    <div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner "><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element ">
    <div class="wpb_wrapper">
        <div class="title-wrapper">
            <h3 class="widget-title" style="border-color: #e0043f"><i class="far fa-newspaper"></i> Tin mới</h3>
            <div class="clear"></div>
        </div>
                <div class="wcontainer">
          <ul class="newsbv">
            <li class="newsbv-item-first">
                <div class="newsb-thumbnail no-display appear">
                <a rel="bookmark" href="{{ URL::to('/tin-tuc/'.$hotNews['new_id'].'/'.$hotNews['slug'].'.html') }}">
                    <i class="far fa-hand-pointer" style="text-shadow: 0px 0px 10px #e0043f"></i>
                    <?php $imageUrl = Media::find($hotNews['media_id']); ?>
                        <img src="{{ $imageUrl->path.$imageUrl->original }}" alt="{{$hotNews['title']}}">
                    <div class="clear"></div>
                    <span class="overlay-link"></span>
                    <span class="line_effect" style="background: #e0043f"></span>
                </a>
                </div>
                                <h4 class="newsb-title">
                                        <a rel="bookmark" href="{{ URL::to('/tin-tuc/'.$hotNews['new_id'].'/'.$hotNews['slug'].'.html') }}">{{$hotNews['title']}}</a></h4>
                <p class="post-meta">

                                        <img src="{{Asset('assets/frontendnew/images/userava.jpg')}}" class="avatar avatar-60 photo authorimg" alt="Admin" sizes="(max-width: 60px) 100vw, 60px" width="60" height="60">                  
                        Đăng bởi <a href="#">admin</a> lúc {{date('d/m/Y',strtotime($hotNews['updated_at']))}}
                </p>
                <div class="postbcont">
                    <p>{{$hotNews['summary']}}</p>
                </div>
                <div class="clear"></div>
        </li>

        @foreach($latestNews as $news)
        <li class="newsbv-item">
            <?php $imageUrl = Media::find($news->media_id); ?>
                <div class="newsb-thumbnail no-display appear">
                    
                    <a rel="bookmark" href="{{ URL::to('/tin-tuc/'.$news->new_id.'/'.$news->slug.'.html') }}">
                        <i class="far fa-hand-pointer" style="text-shadow: 0px 0px 10px #60d600"></i>
                        <img src="{{ $imageUrl->path.$imageUrl->original }}" alt="{{$news->title}}">
                        <div class="clear"></div>
                        <span class="overlay-link"></span>
                        <span class="line_effect" style="background: #60d600"></span>
                    </a>
                </div>
                                <h4 class="newsb-title">
                                    <a rel="bookmark" href="{{ URL::to('/tin-tuc/'.$news->new_id.'/'.$news->slug.'.html') }}">{{$news->title}}</a></h4>
                <p class="post-meta">
                        Đăng bởi <a href="#">admin</a> lúc {{date('d/m/Y',strtotime($news->created_at))}}
                </p>
                <div class="postbcont" style="display: block;">
                    {{$news->summary}}
                </div>
                <div class="clear"></div>
        </li>
        @endforeach
    </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>


<div class="wpb_text_column wpb_content_element ">
   <div class="wpb_wrapper">
        <div class="title-wrapper">
            <h3 class="widget-title" style="border-color: "><i class="far fa-newspaper"></i> Thông báo mới</h3>
            <div class="clear"></div>
        </div>
    <div class="wcontainer column_news_wrapper">
        <ul class="newsbh">
            @foreach($specialNews as $spec)
            <?php $imageUrlN = Media::find($spec->media_id); ?>
            <li class="newsbh-item">
                    <div class="newsb-thumbnail no-display">
                         <a rel="bookmark" href="{{ URL::to('/tin-tuc/'.$spec->new_id.'/'.$spec->slug.'.html') }}">
                            <i class="far fa-hand-pointer" style="text-shadow: 0px 0px 10px #60d600"></i>
                                                                <img src="{{ $imageUrlN->path.$imageUrlN->original }}" alt="{{$spec->title}}" style="width: 350px !important;height: 230px !important;">
                           <div class="clear"></div>
                           <span class="overlay-link"></span>
                           <span class="line_effect" style="background: #60d600"></span>
                        </a>
                     </div>
                        <h4 class="newsb-title"><a rel="bookmark" href="{{ URL::to('/tin-tuc/'.$spec->new_id.'/'.$spec->slug.'.html') }}">{{$spec->title}}</a></h4>
                            <p class="post-meta">
                                <img src="{{Asset('assets/frontendnew/images/userava.jpg')}}" class="avatar avatar-60 photo authorimg" alt="Admin" sizes="(max-width: 60px) 100vw, 60px" width="60" height="60">
                                    Đăng bởi <a href="https://skywarriorthemes.com/crystalskull/author/admin/">admin</a> lúc {{date('d/m/Y',strtotime($spec->created_at))}}
                                    </p>
                                   <p>{{substr($spec->summary, 0, 56)}}</p>
                </li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>
</div></div></div>
@stop

