@section('content')
<div class="side-left">
                <h1 class="title-detail-news">{{$new->title}}</h1>
                <div class="time-new">{{date('H',strtotime($new->created_at))}}h{{date('i',strtotime($new->created_at))}} - {{date('d/m/Y',strtotime($new->created_at))}}</div>
                <div class="category">Tin tức</div>
                <div class="content-detail-news">{{$new->content}}
                </div>
                <div class="sign">
                    <div class="sign-logo">
                        <img src="{{Asset('assets/frontendV3/images/4-sign.png')}}" alt="">
                    </div>
                    <div class="sign-text">
                        <h4 class="sign-title">GTA Online Việt Nam</h4>
                        <div class="sign-slogan">Nơi bạn thực sự đắm chìm và sống trọn đam mê!
                        </div>
                    </div>
                </div>
        </div>
@stop