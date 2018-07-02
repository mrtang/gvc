<div class="side-right">
    <h3 class="side-title">Các tin khác</h3>
    <div class="list-other-news">
        @foreach(CommonHelper::getNoticeNew() as $notice)
            <div class="other-news">
                <?php $imageUrl = Media::find($notice->media_id); ?>
                <a href="{{ URL::to('/tin-tuc/'.$notice->new_id.'/'.$notice->slug.'.html') }}">
                    <img class="news-image" src="{{ $imageUrl->path.$imageUrl->original }}" alt="">
                </a>
                <a href="{{ URL::to('/tin-tuc/'.$notice->new_id.'/'.$notice->slug.'.html') }}">
                    <h4 class="news-title">{{$notice->title}}</h4>
                </a>
                <div class="news-time">{{date('H',strtotime($notice->created_at))}}h{{date('i',strtotime($notice->created_at))}} - {{date('d/m/Y',strtotime($notice->created_at))}}</div>
                <div class="news-caption">{{$notice->summary}}</div>
            </div>
        @endforeach
    </div>
</div>