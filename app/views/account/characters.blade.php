@section('content')
    @include('elements/menu_profile')

    <h3 class="nk-decorated-h-2">
        <span>
            <span class="text-main-1">Quản lý nhân vật</span>
        </span>
    </h3>

    <div class="row" style="margin-top: 60px;">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            @if (!empty($countCharacters))
                @foreach ($characters as $character)
                    <div class="col-xs-4">
                        @if ($character->Skin !== '')
                        <div class="charac-bd"></div>
                        @endif
                        <a href="{{ URL::to('/tai-khoan/quan-ly-nhan-vat/chi-tiet/'.$character->ID) }}" class="character-account">
                            @if ($character->Skin !== '')
                            <img src="{{Asset("assets/frontend/skins/$character->Skin.png")}}" style="width: 100%;">
                            @else
                            <img src="{{Asset("assets/frontend/skins/unknow.png")}}" style="width: 100%;">
                            @endif
                            <p style="color: #fff; text-align: center; margin-top: -70px;">{{ $character->CharacterName }}</p>
                            <p style="color: #ffc200; text-align: center; margin-top: -10px;">@if($character->Active) Đã duyệt @else Chờ duyệt @endif</p>
                        </a>
                    </div>
                @endforeach
            @endif
                <?php $countUnknow = 3 - $countCharacters; ?>
                @for ($i = 1; $i <= $countUnknow; $i++ )
                <div class="col-xs-4">
                    <div class="charac-bd-not"></div>
                    <a href="{{ URL::to('/tai-khoan/quan-ly-nhan-vat/tao-moi') }}" class="character-account">
                        <img src="{{Asset("assets/frontend/images/not$i.png")}}" style="width: 100%;">
                        <p style="color:#ffc200; text-align: center; margin-top: -35px;">Chưa khởi tạo</p>
                    </a>
                </div> 
                @endfor
        </div>
    </div>
    <div class="row" style="height: auto;">
        <div class="col-xs-12">
            <p style="color: #fff; text-align: center; margin: 30px 0 400px 0">Vui lòng lựa chọn nhân vật mà bạn muốn quản lý hoặc click vào mục chưa khởi tạo để tiến hành khởi tạo nhân vật mới</p>
        </div>
    </div>
@stop