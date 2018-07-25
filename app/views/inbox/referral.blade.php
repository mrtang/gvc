@section('content')
    @include('elements/menu_profile')
<style type="text/css">
    .th-ref{
        border: 1px solid #aba1a2;
        text-align: center;
    }
</style>
    <h3 class="nk-decorated-h-2">
        <span>
            <span class="text-main-1">Giới thiệu người mới</span>
        </span>
    </h3>

    <div class="row" style=" margin-bottom: 500px;">
        <div class="col-xs-12">
            <table id="functions" class="table dataTable" style="border: 1px solid #aba1a2;">
                <thead>
                    <tr>
                        <th class="fix-width-30 th-ref">ID</th>
                        <th class="th-ref">Tên tài khoản</th>
                        <th class="fix-width-200 th-ref">Ngày giới thiệu</th>
                        <th class="fix-width-200 th-ref">Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $value)
                        <tr>
                            <td class="th-ref">
                                333
                            </td>
                            <td class="th-ref">
                                fffff
                            </td class="th-ref">
                            <td class="th-ref">anhth</td>
                            <td class="th-ref">{{ date('H:i:s d/m/Y') }}</td>
                        </tr>
                    @endforeach
                    @if (!sizeof($list)) 
                        <tr><td colspan="7" style="font-style: italic;">Không tìm thấy dữ liệu</td></tr>
                    @endif
                </tbody>
            </table>
            <div style="text-align: center;">
                {{ $list->links() }}
            </div>
        </div>
    </div>

@stop