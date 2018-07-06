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
                        <p class="page-title"><i class="fa fa-pencil-square-o"></i> 
                            <span> Cập nhật danh mục</span>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <a href="{{ URL::to('admin/catenews') }}" class="btn btn-pink pull-right"><i class="fa fa-chevron-left"></i> Danh sách danh mục tin tức</a>
                    </div>
                </div>
                {{ Form::open(array(
                    'url' => URL::to('/admin/catenews/edit/'.$new->id),
                    'id' => 'form-new-edit',
                    'class' => '',
                    'method' => 'put',
                    'data-remote' => 'true',
                    'data-type' => 'json'
                )) }}
                
                    <!-- Edit: type = 1 -->
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