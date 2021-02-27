@extends('user.layout.index')
@section('link')
<script type="text/javascript">
    $(function () {
        var target = $('body');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 0);
            return false;
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#confirmAmount').mask('000,000,000,000,000', { reverse: true });

    });
</script>
<script type="text/javascript">
    function confirmMsg() {
        $('#submitPayment').addClass("disabled");
        Swal.fire({
            title: 'Thành công!',
            text: "Vui lòng chờ từ 5-10 phút để hệ thống xác nhận",
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#17a2b8',
            confirmButtonText: 'Xem lịch sử giao dịch',
            cancelButtonText: 'Nạp tiếp'
        }).then((result) => {
            if (result.value) {
                window.location.href = '/user/payment_log';

            } else {
                window.location.href = '/user/payment_momo';

            }
        })
    }
    $(document).ready(function () {
        // Initialize Smart Wizard 
        $('#smartwizard').smartWizard({
            theme: 'none',
            showStepURLhash: false,
            transitionEffect: 'slide',
            useURLhash: false, // Enable selection of the step based on url hash
            backButtonSupport: false, // Enable the back button support
            lang: {  // Language variables
                next: 'Bước tiếp theo',
                previous: 'Previous'
            },
            toolbarSettings: {
                toolbarPosition: 'bottom', // none, top, bottom, both
                toolbarButtonPosition: 'right', // left, right
                showNextButton: true, // show/hide a Next button
                showPreviousButton: false, // show/hide a Previous button
            },
        }


        );
        // Coin Calculation
        $("#confirmAmount").on('keyup', function () {
            coin = $("#confirmAmount").cleanVal();;
            real_coin = parseInt(coin) * 1.3 * 1;
            real_turn = parseInt(coin / 10000);
            $("#coinReceive").html(real_coin);
            $("#turnReceive").html(real_turn);
        });
        // Initialize the leaveStep event

        $("#smartwizard").on("leaveStep", function (e, anchorObject, stepNumber, stepDirection) {

            if (stepNumber == 0) {
                var money = $("#confirmAmount").cleanVal();
                var gateway = 1;
                moneyInt = parseInt(money);
                console.log(moneyInt);
                if (!moneyInt) {

                    Swal.fire(
                        'Xảy ra lỗi',
                        "Vui lòng nhập số tiền cần nạp",
                        'error',
                        $("#confirmAmount").focus()
                    );
                    return false;
                }
                console.log(moneyInt);
                if (moneyInt < 10000) {
                    Swal.fire(
                        'Xảy ra lỗi',
                        "Số tiền phải lớn hơn hoặc bằng 10,000đ",
                        'error',
                        $("#confirmAmount").focus()
                    );
                    return false;
                }
                if (moneyInt % 1000 !== 0) {
                    Swal.fire(
                        'Xảy ra lỗi',
                        "Số tiền phải chia hết cho 1,000",
                        'error',
                        $("#confirmAmount").focus()
                    );
                    return false;
                }

                $.post('/api/ConfirmPayment.php', {
                    moneyInt: moneyInt, gateway: gateway
                }, function (result) {
                    if (result.status) {
                        $("#payment_id").html('MU' + result.payment_id);
                        $("#payment_amount").html(result.amount);
                    } else {
                        Swal.fire(
                            'Xảy ra lỗi',
                            result.msg,
                            'error',
                            $("#confirmAmount").focus()
                        );
                    }
                },
                    'JSON'
                );
            }
        });
    }); 
</script>
<!-- Include SmartWizard CSS -->
<link href="/assets/css/smart_wizard.css" rel="stylesheet" type="text/css" />
<!-- Optional SmartWizard theme -->
<link href="/assets/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
@endsection

@section('container')
<meta name="csrf-token" id="csrf-token" content="{{ Session::token() }}">
<div class="container">
    <div class="row">
        <div class="col">
          <div class="alert alert-warning" role="alert">
           <i class="fas fa-shield-alt font-weight-bold" aria-hidden="true"></i>
     Bạn chưa liên kết tài khoản với facebook <a href="#" class="btn btn-primary"><i class="fab fa-facebook"></i> LIÊN KẾT VỚI FACEBOOK </a> ngay để bảo mật tài khoản. <a href="#" class="alert-link">Tìm hiểu thêm <i class="fa fa-question-circle
     font-weight-bold" aria-hidden="true"></i> </a>
          </div>
        </div>
    
      </div>
    <div class="content">
        <!-- <div class="row hello">
                <div class="col text-center">
                    <h2>Nạp thẻ qua Momo</h2></div>
            </div>
-->
        <div class="row pt-3">
            <div class="col">
                <div>

                    <ul class="nav nav-tabs">

                        <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1"><i class="fa fa-lock" aria-hidden="true"></i> Đổi mật khẩu</a></li>
                    </ul>
                    <div class="tab-content">

                        <!-- Tab 2 đổi mật khẩu -->
                        <div class="tab-pane active border border-top-0 p-3" role="tabpanel" id="tab-1">
                            <form method="post" onsubmit="ajaxUpdatePassword();return false;">
                                <div class="form-group">
                                    <label for="inputAddress">Mật khẩu hiện tại</label>
                                    <input type="password" class="form-control" id="currentPasswordChange" placeholder="Mật khẩu hiện tại">
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2 ">Mật khẩu mới</label>
                                    <input type="password" class="form-control" id="newPassword" placeholder="Mật khẩu mới">
                                </div>
                                
                                    <div class="form-group col-md-6">
                                        <label for="inputFullname">Xác nhận mật khẩu mới</label>
                                        <input type="password" class="form-control" id="reNewPassword" placeholder="Nhập mật khẩu mới của bạn">
                                    </div>
                                    <div class="form-group col-md-6">
                                    </div>

                                    <span id="msg2"></span>

                                </div>
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </form>
                        </div>
                        <!-- Tab 3 action -->
                        <div class="tab-pane" role="tabpanel" id="tab-3">
                            <p>Content for tab 3.</p>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hướng dẫn nạp tiền bằng Momo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Bước 1: Mở app Momo trên điện thoại
                    <img class="w-50" src="/assets/img/demo_momo0.png">
                </p>
                <p>Bước 2: Chọn chức năng Quét mã QR
                    <img class="w-50" src="/assets/img/demo_momo1.png">
                </p>
                <p>Bước 3: Quét mã QR từ trang nạp thẻ
                    <img class="w-50" src="/assets/img/demo_momo2.png">
                <p>Bước 4: Nhập số tiền và tin nhắn (nội dung tin nhắn là mã có dạng MUxxxx - mỗi lần nhập số tiền
                    nạp thì hệ thống sẽ cung cấp 1 mã này)</p>
                <img class="w-50" src="/assets/img/demo_momo.png"></p>
                <p>Bước 5: Chờ chậm nhất 30 phút để đơn được duyệt, xu sẽ được cộng trực tiếp vào tài khoản sau khi
                    được duyệt!
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK!</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection