<footer>
	<div class="container">
		
			
	<div class="widget-1 first footer-widget widget col-lg-4 col-md-4"><div class="title-wrapper"> <h3 class="widget-title"><i class="far fa-newspaper"></i> Tin mới nhất</h3><div class="clear"></div></div> 
    <ul class="latest-post-w">
    @foreach(CommonHelper::getNewsLastest() as $news)
    <?php $imageUrl = Media::find($news->media_id); ?>
      <li>
      	<a rel="bookmark" href="{{ URL::to('/tin-tuc/'.$news->new_id.'/'.$news->slug.'.html') }}">
	      	<div class="latest_p_img">
					<img alt="img" src="{{ $imageUrl->path.$imageUrl->original }}" height="90" width="100">		
			</div>
		</a>

        <div class="info">

        	<a href="{{ URL::to('/tin-tuc/'.$news->new_id.'/'.$news->slug.'.html') }}" class="pw_maint">{{$news->title}}</a>
        	<div class="pop_desc">By&nbsp;
        	<a data-original-title="View all posts by admin" data-toggle="tooltip" href="#">admin</a>
        	/ <small><i class="fa fa-calendar"></i> {{date('d/m/Y',strtotime($news->created_at))}}</small></div>

		</div>

		<div class="clear"></div>

      </li>
    @endforeach        
    </ul>
</div>        
<div class="widget-2 footer-widget widget col-lg-4 col-md-4"><div class="title-wrapper"> <h3 class="widget-title"><i class="far fa-newspaper"></i> Tin cập nhật</h3><div class="clear"></div></div> 
    <ul class="review">
    	@foreach(CommonHelper::getNewsRandomF() as $news)
		<?php $imageUrl = Media::find($news->media_id); ?>
	    <li>
	    	<a rel="bookmark" href="{{ URL::to('/tin-tuc/'.$news->new_id.'/'.$news->slug.'.html') }}">		
		    	<div class="img">
					<img alt="img" src="{{ $imageUrl->path.$imageUrl->original }}"><span class="overlay-link"></span>
				</div>
			</a>
			<div class="info">
				<a rel="bookmark" href="{{ URL::to('/tin-tuc/'.$news->new_id.'/'.$news->slug.'.html') }}">
					<small><i class="far fa-calendar-alt"></i> {{date('d/m/Y',strtotime($news->created_at))}}</small>
				</a><a href="{{ URL::to('/tin-tuc/'.$news->new_id.'/'.$news->slug.'.html') }}" class="pw_maint">{{$news->title}}</a>	
			</div>
			<div class="clear"></div>
		</li>
		@endforeach
    </ul>
</div>        
<div class="widget-3 last footer-widget widget col-lg-4 col-md-4"><div class="title-wrapper"><h3 class="widget-title">Cộng đồng</h3><div class="clear"></div></div>
		<div id="insta-feeds-232" class="insta-feeds">
			<a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/24.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/23.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/22.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/21.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/20.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/19.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/18.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/17.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/16.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/15.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/14.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/13.jpg')}}"><div class="image-hover-overlay"></div></div></a></div>
		</div>
		
	</div>
</footer>