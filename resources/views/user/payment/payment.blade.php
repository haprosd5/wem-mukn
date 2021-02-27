@extends('user.layout.index')
@section('link')
<style type="text/css">
    .choose-method .popular {
        z-index: 1;
        border: 3px solid #007bff !important;
    }
    .choose-method .card {
        border: 3px solid #dedede;
        height: 93%;
    }
    .choose-method .card:hover {
        z-index: 1;
        border: 3px solid #007bff;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    }
</style>
@endsection

@section('container')
<div class="container">
    <div class="content">
        <div class="row hello">
            <div class="col text-center mb-3 mt-3">
                <h5 style="font-weight: 300;">Vui lòng chọn hình thức nạp tiền để tiếp tục</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 col-sm-6 col-xs-6  choose-method">
                <div class="card card-pricing text-center px-3 mb-4">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Khuyến
                        nghị</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">Ngân
                            hàng</h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Hỗ trợ hầu hết các ngân hàng</li>
                            <li>Phí giao dịch tùy ngân hàng</li>
                            <li class="badge badge-success">Nhận thêm 30% giá trị</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <a href="user/payment_bank" class="btn btn-outline-warning mb-3">Tiếp tục</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 col-xs-6 choose-method">
                <div class="card card-pricing text-center px-3 mb-4 popular shadow">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm ">Ưu
                        tiên</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">Ví Momo
                        </h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Nhanh chóng</li>
                            <li>Dễ dàng</li>
                            <li>Tiện lợi</li>
                            <li>Không tốn phí</li>
                            <li class="badge badge-success">Nhận thêm 30% giá trị</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <a href="/user/payment_momo" class="btn btn-outline-warning mb-3">Tiếp tục</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 col-sm-3 col-xs-3 choose-method">
                <div class="card card-pricing text-center px-3 mb-4">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Hoạt động</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">Thẻ cào
                        </h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Hỗ trợ các loại thẻ</li>
                            <li>Viettel</li>
                            <li>Mobiphone</li>
                            <li>Vinaphone</li>
                            <li>...</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <a href="/user/payment_mobi" class="btn btn-outline-warning mb-3">Tiếp tục</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-3 col-sm-3 col-xs-3 choose-method">
                <div class="card card-pricing text-center px-3 mb-4">
                    <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Coming
                        soon...</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">GG CARD
                        </h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Coming soon...</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 bg-transparent">
                        <a onclick="alert('Tính năng đang được xây dựng!');" class="btn btn-outline-warning mb-3">Tiếp
                            tục</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection