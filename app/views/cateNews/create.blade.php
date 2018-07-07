@section('title')
    Quản lý danh mục tin tức
@stop

@section('style')
@stop

@section('content')
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="widget-body">
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-xs-12 col-sm-7 col-md-6">
                        <p class="page-title"><i class="fa fa-plus-square"></i> 
                            <span> Tạo mới danh mục</span>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <a href="{{ URL::to('admin/catenews') }}" class="btn btn-pink pull-right"><i class="fa fa-chevron-left"></i> Danh sách danh mục tin tức</a>
                    </div>
                </div>
                    {{ Form::open(array(
			            'url' => URL::to('/admin/catenews/create'),
			            'id' => 'form-new-new',
			            'class' => '',
			            'method' => 'post',
			            'data-remote' => 'true',
			            'data-type' => 'json'
			        )) }}
			            <!-- Create: type = 0 -->
			            @include('cateNews.form')
			        
			        {{ Form::close() }}
			        
			        @include('elements/uploader')
                </div>
        </article>
    </div>
@stop
@section('scripts')
    {{ HTML::script('assets/js/elements/catenews.js') }}
@stop

