@section('content')
<div class="col-lg-8 col-md-8 ">
    <div class="blog-post"><!-- blog-post -->

      <div class="blog-info"><!-- blog-info -->
        <div class="post-pinfo">

          <a href="#"><img src="{{Asset('assets/frontendnew/images/userava.jpg')}}" class="avatar avatar-60 photo authorimg" alt="author image" sizes="(max-width: 60px) 100vw, 60px" width="60" height="60"> Đăng bởi admin</a>
          <i>|</i>
             <span class="date"> {{date('d/m/Y',strtotime($new->updated_at))}}</span>

        </div>
      <div class="clear"></div>
      </div><!-- blog-info -->

      <div class="blog-content wcontainer"><!-- /.blog-content -->
        <h2>
            <a href="#"> {{$new->title}}</a>
        </h2>
        {{$new->content}}
      </div><!-- /.blog-content -->

      <div class="clear"></div>
    </div><!-- /.blog-post --><div class="clear"></div>
    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
</div>
@stop