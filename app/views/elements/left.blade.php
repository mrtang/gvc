<div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">
<div id="buddypress">
    <div class="wpb_wrapper">
        <div class="title-wrapper">
            <h3 class="widget-title"><i class="fa fa-rss"></i> Chia sẻ!</h3>
            <div class="clear"></div>
        </div>
        <ul class="wcontainer socialb-wrapper">
            <li><a href="#" target="_blank" class="s-envato" data-toggle="tooltip" data-original-title="DeviantArt"><i class="fab fa-deviantart"></i></a></li>
        	<li><a href="#" target="_blank" class="s-rss" data-toggle="tooltip" data-original-title="RSS"><i class="fas fa-rss"></i></a></li>
        	<li><a href="#" target="_blank" class="s-google" data-toggle="tooltip" data-original-title="Google+"><i class="fab fa-google-plus-g"></i></a></li>
        	<li><a href="#" target="_blank" class="s-youtube" data-toggle="tooltip" data-original-title="Youtube"><i class="fab fa-youtube"></i></a></li>
            <li><a href="#" target="_blank" class="s-dribbble" data-toggle="tooltip" data-original-title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
            <li><a href="#" target="_blank" class="s-twitter" data-toggle="tooltip" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank" class="s-vimeo" data-toggle="tooltip" data-original-title="Vimeo"><i class="fab fa-vimeo-v"></i></a></li>
            <li><a href="#" target="_blank" class="s-facebook" data-toggle="tooltip" data-original-title="Facebook"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" target="_blank" class="s-twitch" data-toggle="tooltip" data-original-title="Twitch"><i class="fab fa-twitch"></i></a></li>
            <li><a href="#" target="_blank" class="s-steam" data-toggle="tooltip" data-original-title="Steam"><i class="fab fa-steam"></i></a></li>
        </ul>

    </div>
</div>

<div class="wpb_widgetised_column wpb_content_element">
	<div class="wpb_wrapper">
		<div class="widget-1 first widget"><div class="title-wrapper"> <h3 class="widget-title"><i class="far fa-newspaper"></i> Tin cập nhật</h3><div class="clear"></div></div> 
    		<ul class="review">
    			@foreach(CommonHelper::getNewsRandom() as $news)
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


    <div class="widget-6 widget"><div class="title-wrapper"><h3 class="widget-title">Cộng đồng</h3><div class="clear"></div></div>
		<div id="insta-feeds-783" class="insta-feeds">
            <a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/1.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/2.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/3.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/4.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/5.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/6.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/7.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/8.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/9.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/10.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/11.jpg')}}"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="#"><div class="item-holder"><img src="{{Asset('assets/frontend/img/gallery/12.jpg')}}"><div class="image-hover-overlay"></div></div></a>
        </div>
	</div>


</div></div>
</div></div></div>