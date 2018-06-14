@section('content')
<div class="col-lg-8 col-md-8 ">
    @foreach($news as $one)
    <?php $imageUrl = Media::find($one->media_id); ?>
    <div class="blog-post">
        <div class="blog-twrapper"><!-- blog-twrapper -->
            <div class="blog-image right"><!-- blog-image -->
                <a href="{{ URL::to('/tin-tuc/'.$one->new_id.'/'.$one->slug.'.html') }}"><img alt="{{$one->title}}" src="{{ $imageUrl->path.$imageUrl->original }}" style="width: 817px !important;height: 320px !important;"></a>
                <span class="overlay-link"></span>
                <i class="far fa-hand-pointer" style="text-shadow: 0px 0px 10px #ffae00"></i>
                <span class="line_effect" style="background: #ffae00"></span>
            </div><!-- blog-image -->
            <div class="blog-content "><!-- blog-content -->
                  <h2>
                    <a href="{{ URL::to('/tin-tuc/'.$one->new_id.'/'.$one->slug.'.html') }}"> {{$one->title}}</a>
                  </h2>
                  <div class="post-pinfo">
                      <a data-toggle="tooltip" href="#"><img src="{{Asset('assets/frontendnew/images/userava.jpg')}}" class="avatar avatar-60 photo authorimg" alt="Admin" sizes="(max-width: 60px) 100vw, 60px" width="60" height="60"> Đăng bởi admin</a>
                      <i>|</i>
                         <span class="date"> {{date('d/m/Y',strtotime($one->updated_at))}}</span>
                </div>
                  <p>{{$one->summary}}</p>

                  <a href="{{ URL::to('/tin-tuc/'.$one->new_id.'/'.$one->slug.'.html') }}" class="button-small">Xem chi tiết</a>
        </div><!-- blog-content -->

        </div><!-- /blog-twrapper -->




        <div class="clear"></div>
        <div class="block-divider"></div>
    </div><!-- /.blog-post -->
    @endforeach

    <div class="pagination">
        {{ $news->links() }}
    </div>
    <div class="clear"></div>

</div>
@stop