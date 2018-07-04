@section('content')
<div class="side-left">
                <h1 class="title-detail-news">{{$new->title}}</h1>
                <div class="time-new">{{date('H',strtotime($new->created_at))}}h{{date('i',strtotime($new->created_at))}} - {{date('d/m/Y',strtotime($new->created_at))}}</div>
                <div class="category">Tin tức</div>
                <div class="content-detail-news">{{$new->content}}
                </div>
        </div>
@stop