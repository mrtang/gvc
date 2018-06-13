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



      <li><a rel="bookmark" href="https://skywarriorthemes.com/crystalskull/pellentesque/">		<div class="img">

												<img alt="img" src="https://skywarriorthemes.com/crystalskull/wp-content/uploads/2015/10/19-368x148.jpg">

										<span class="overlay-link"></span>

				</div>
        </a><div class="info"><a rel="bookmark" href="https://skywarriorthemes.com/crystalskull/pellentesque/">
<small>
<i class="far fa-calendar-alt"></i> October 31, 2015</small>

        	</a><a href="https://skywarriorthemes.com/crystalskull/pellentesque/" class="pw_maint">
          Pellentesque imperdiet finibus ipsum, sed porta          </a>

          					
			                	
					
					
					
					
					
					
					
					
										<div class="overall-score" style="color: #00d5ed">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					
					
		</div>
		<div class="clear"></div>
		
      </li>
      

      <li><a rel="bookmark" href="https://skywarriorthemes.com/crystalskull/muaoreetereharet/">		<div class="img">

												<img alt="img" src="https://skywarriorthemes.com/crystalskull/wp-content/uploads/2015/10/29-368x148.jpg">

										<span class="overlay-link"></span>

				</div>
        </a><div class="info"><a rel="bookmark" href="https://skywarriorthemes.com/crystalskull/muaoreetereharet/">
<small>
<i class="far fa-calendar-alt"></i> October 31, 2015</small>

        	</a><a href="https://skywarriorthemes.com/crystalskull/muaoreetereharet/" class="pw_maint">
          Aenean sed interdum quammus laoreet posuere pharet          </a>

          					
			                	
					
					
					
					
					
					
					
					
										<div class="overall-score" style="color: #d32f2f">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					
					
		</div>
		<div class="clear"></div>
		
      </li>
      

      <li><a rel="bookmark" href="https://skywarriorthemes.com/crystalskull/etiam-massa-mauris-fermentum-a-congue-id/">		<div class="img">

												<img alt="img" src="https://skywarriorthemes.com/crystalskull/wp-content/uploads/2015/02/4-368x148.jpg">

										<span class="overlay-link"></span>

				</div>
        </a><div class="info"><a rel="bookmark" href="https://skywarriorthemes.com/crystalskull/etiam-massa-mauris-fermentum-a-congue-id/">
<small>
<i class="far fa-calendar-alt"></i> June 17, 2013</small>

        	</a><a href="https://skywarriorthemes.com/crystalskull/etiam-massa-mauris-fermentum-a-congue-id/" class="pw_maint">
          Etiam massa mauris fermentum a congue id          </a>

          					
			                	
					
					
					
					
					
					
					
										<div class="overall-score" style="color: #d32f2f">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half"></i>
					</div>
					
					
					
		</div>
		<div class="clear"></div>
		
      </li>
            
    </ul>


              </div>        <div class="widget-3 last footer-widget widget col-lg-4 col-md-4"><div class="title-wrapper"><h3 class="widget-title">Cộng đồng</h3><div class="clear"></div></div>
		<div id="insta-feeds-232" class="insta-feeds"><a class="featured-image" href="https://www.instagram.com/p/BIpJv5xBPV0/" target="_blank"><div class="item-holder"><img src="https://scontent.cdninstagram.com/vp/218cf80c98296a6f5574280a34b9555b/5BB2692D/t51.2885-15/s640x640/sh0.08/e35/16122524_1429395117359777_1819611475325485056_n.jpg"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="https://www.instagram.com/p/BIpJhQghlvp/" target="_blank"><div class="item-holder"><img src="https://scontent.cdninstagram.com/vp/3c877455b219a38528ac00ef4600f78f/5BA3B8AE/t51.2885-15/s640x640/sh0.08/e35/16123597_1820357571557229_8335003385056985088_n.jpg"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="https://www.instagram.com/p/BIaNPEKhwOJ/" target="_blank"><div class="item-holder"><img src="https://scontent.cdninstagram.com/vp/109349b91795780c6e8387f9de7dfbeb/5BA79D26/t51.2885-15/s640x640/sh0.08/e35/16122617_1839149046371142_4285511474526289920_n.jpg"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="https://www.instagram.com/p/BIaNBGfB9IF/" target="_blank"><div class="item-holder"><img src="https://scontent.cdninstagram.com/vp/49290d3268bd063df262f83dc3871309/5BAD3C8A/t51.2885-15/s640x640/sh0.08/e35/16122557_383364632025639_3901137447999766528_n.jpg"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="https://www.instagram.com/p/BIaM67NBTLV/" target="_blank"><div class="item-holder"><img src="https://scontent.cdninstagram.com/vp/2a7110100fe9ae388142aabeb2af2db1/5BC4D228/t51.2885-15/s640x640/sh0.08/e35/15877604_1398589510153941_1115435807436439552_n.jpg"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="https://www.instagram.com/p/BIaMzgTBekw/" target="_blank"><div class="item-holder"><img src="https://scontent.cdninstagram.com/vp/006ef99bfc5f3a9ca08a1603a3fbe669/5BB7C9FF/t51.2885-15/s640x640/sh0.08/e35/16110369_740705769420252_2409624477240393728_n.jpg"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="https://www.instagram.com/p/BIaMwmThxCx/" target="_blank"><div class="item-holder"><img src="https://scontent.cdninstagram.com/vp/fc3f76358d356868f3100f0614458723/5BBB818F/t51.2885-15/s640x640/sh0.08/e35/16110600_145753282590799_1188997881273516032_n.jpg"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="https://www.instagram.com/p/BIaMrYghV6X/" target="_blank"><div class="item-holder"><img src="https://scontent.cdninstagram.com/vp/0f4aa6692376012957e7e2cc571b09e6/5BC1EFC3/t51.2885-15/s640x640/sh0.08/e35/16124129_772867526201594_7348064104239595520_n.jpg"><div class="image-hover-overlay"></div></div></a><a class="featured-image" href="https://www.instagram.com/p/BIaMlbDBQY-/" target="_blank"><div class="item-holder"><img src="https://scontent.cdninstagram.com/vp/d7cea5f8afd634f7fc97057cc17e4e46/5BA57611/t51.2885-15/s640x640/sh0.08/e35/14736300_295911824139314_1750362180013785088_n.jpg"><div class="image-hover-overlay"></div></div></a></div>
		</div>
		
	</div>
</footer>