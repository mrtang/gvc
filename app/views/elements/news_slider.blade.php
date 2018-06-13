<div class="after-nav ">
          <div class="container">
                <div class="ticker-title"><i class="fas fa-bullhorn"></i> &nbsp;Thông báo mới</div>
                    <div class="tickercontainer"><div class="mask"><ul id="webticker" class="newsticker" style="display: block; width: 3343px; transition-duration: 8.12s; left: -406px;">
                        @foreach(CommonHelper::getNoticeNew() as $notice)
                        <li id="item1" style="">
                            <a href="{{ URL::to('/tin-tuc/'.$notice->new_id.'/'.$notice->slug.'.html') }}" class="ticker_cat" style="background-color: #60d600 !important">Notice</a>
                            <a href="{{ URL::to('/tin-tuc/'.$notice->new_id.'/'.$notice->slug.'.html') }}">{{ $notice->title }}</a>
                        </li>
                        @endforeach

                     </ul><span class="tickeroverlay-left">&nbsp;</span><span class="tickeroverlay-right">&nbsp;</span></div></div>

                <div class="search-top">
                    <form method="get" id="sform" action="">
                        <input autocomplete="off" name="s" style="width: 3px; padding: 9px 18px 8px; border: 0px solid transparent; cursor: pointer;" type="search">
                        <input name="post_type[]" value="post" type="hidden">
                        <input name="post_type[]" value="page" type="hidden">
                        <i class="fas fa-search"></i>
                    </form>
                </div>

            </div>
        </div>