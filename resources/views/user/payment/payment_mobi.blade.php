@extends('user.layout.index')
@section('link')
<script type="text/javascript">
    $(document).ready(function () {
        // Coin Calculation
        $("#price_guest").change(function () {
            coin = $("#price_guest").val();;
            real_coin = parseInt(coin) * 1;
            real_turn = parseInt(coin / 10000);
            $("#coinReceive").html(real_coin);
            $("#turnReceive").html(real_turn);
        });

    });
</script>
<script type="text/javascript">
    function ajaxMobiPayment() {
        var user_id = 1265;
        var mang = $("#card_type_id").val();
        var seri = $("#seri").val();
        var pin = $("#pin").val();
        var menhgia = $("#price_guest").val();
        var ma_bao_mat = $('meta[name=csrf-token]').attr('content')
        if (!mang) {
            $("#msg").addClass("text-danger").text('Vui lòng chọn mạng').show();
            $("#card_type_id").focus();
            return false;
        }
        if (!menhgia) {
            $("#msg").addClass("text-danger").text('Vui lòng chọn mệnh giá').show();
            $("#price_guest").focus();
            return false;
        }
        if (!seri) {
            $("#msg").addClass("text-danger").text('Vui lòng nhập seri').show();
            $("#seri").focus();
            return false;
        }
        if (!pin) {
            $("#msg").addClass("text-danger").text('Vui lòng nhập pin').show();
            $("#pin").focus();
            return false;
        }
        $(":submit").attr("disabled", true).html("<span class='spinner-border spinner-border-sm'></span> Đang xử lý...");
        $.post('/user/payment_mobi', {
            type: mang,
            seri: seri,
            pin: pin,
            price: menhgia,
            '_token': ma_bao_mat
        }, function (result) {
            if (result.status == 0) {
                $("#msg").removeClass("text-danger").addClass("text-success").html(result.msg);
            } else {
                $("#msg").addClass("text-danger").html(result.msg);
            }
            $(":submit").removeAttr("disabled").html("Nạp thẻ");

        },
            'JSON'
        );
    }
    function confirm_price(value) {
        msg = "Xác nhận mệnh giá thẻ là: " + value + "vnđ, nếu sai sẽ bị mất thẻ";
        confirm(msg);
    }
</script>
@endsection

@section('container')
<meta name="csrf-token" id="csrf-token" content="{{ Session::token() }}">
<div class="container">
    <div class="content">
        <div class="row pt-3">
            <div class="col mb-2">
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab"
                                href="#tab-1"><i class="fa fa-list" aria-hidden="true"></i> Nạp thẻ cào</a></li>
                        <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2"><i class="fa fa-lg fa-history" aria-hidden="true"></i> Lịch sử nạp</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Tab 1 thông tin tài khoản -->
                        <div class="tab-pane active border border-top-0 p-3" role="tabpanel" id="tab-1">
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Lưu ý!</strong> Vui lòng chọn đúng mệnh giá, seri thẻ và nhà mạng nếu không
                                sẽ bị mất thẻ (không hỗ trợ), thẻ nạp có thể bị trễ, chờ trong ít phút hoặc liên hệ
                                admin để được trợ giúp!
                            </div>

                            <form method="post" action="user/payment_mobi">
                            @csrf
                                <div class="form-group">
                                    <label for="inputAddress2">Loại thẻ</label>
                                    <select id="card_type_id" name="type" class="form-control">
                                        <option value="">- Vui lòng chọn -</option>
                                        <option value="viettel">Viettel</option>
                                        <option value="vinaphone">Vinaphone</option>
                                        <option value="mobiphone">Mobifone</option>
                                    </select>
                                    <small class="text-muted">Các thẻ ưu tiên sẽ được +10% giá trị thẻ nạp (VD: 100k
                                        sẽ nhận được 110k xu)</small>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress2">Mệnh giá</label>
                                    <select onchange="confirm_price(this.value)" id="price_guest" name="price"
                                        class="form-control">
                                        <option value="">- Chọn mệnh giá -</option>
                                        <option value="10000">10.000vnđ</option>
                                        <option value="20000">20.000vnđ</option>
                                        <option value="30000">30.000vnđ</option>
                                        <option value="50000">50.000vnđ</option>
                                        <option value="100000">100.000vnđ</option>
                                        <option value="200000">200.000vnđ</option>
                                        <option value="300000">300.000vnđ</option>
                                        <option value="500000">500.000vnđ</option>
                                        <option value="1000000">1.000.000vnđ</option>
                                    </select>
                                    <div class="text-info pt-2">Xu thực nhận: <span id="coinReceive"> 0</span></div>
                                    <div class="text-info pt-2">Lượt quay tặng thêm: <span id="turnReceive">
                                            0</span></div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputFullname">Số seri</label>
                                        <input id="seri" type="text" class="form-control" name="seri"
                                            placeholder="Nhập số seri">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Mã thẻ</label>
                                        <input id="pin" type="text" class="form-control" name="pin" placeholder="Nhập mã thẻ">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span id="msg"></span>
                                </div>

                                <button type="submit" class="btn btn-info">Nạp thẻ</button>
                            </form>
                        </div>
                        <!-- list game -->
                        <div class="tab-pane border border-top-0 p-3" role="tabpanel" id="tab-2">
                            <div class="table-responsive">  
                                <table id="memListTable" class="table table-striped table-bordered">
                                        <thead>  
                                            <tr>  
                                                <th>Mã giao dịch</th>
                                                <th>Seri</th>
                                                <th>Pin</th>
                                                <th>Số tiền</th>
                                                <th>Trạng thái</th>
                                                <th>Ngày tạo</th>
                                            </tr>  
                                        </thead>
                                        <tbody>
                                        @foreach($danhsach as $ds)
                                        <tr>
                                            <td>{{$ds->id}}</td>
                                            <td>{{$ds->seri}}</td>
                                            <td>{{$ds->pin}}</td>
                                            <td>{{$ds->price}}</td>
                                            <td>
                                                @if($ds->status==0)
                                                <span class="badge badge-pill badge-warning">Chờ thanh toán</span>
                                                @endif
                                            </td>
                                            <td>{{$ds->created_at}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>  
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 order-lg-first">
                <!-- left bar -->
                @include('user.layout.leftbar')
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection