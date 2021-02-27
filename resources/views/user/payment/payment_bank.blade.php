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
    <div class="content">
        <!-- <div class="row hello">
                <div class="col text-center">
                    <h2>Nạp thẻ qua Momo</h2></div>
            </div>
-->
        <div class="row pt-3">
            <div class="col-lg-9 col-md-12 col-xs-12 pb-2">

                <div id="smartwizard" class="sw-main sw-theme-dots stepwizard p-4 border sw-theme-none">
                    <h4><i class="fa fa-money" aria-hidden="true"></i> Nạp tiền qua Ngân hàng 
</h4>
                <ul class="nav nav-tabs step-anchor">
                    <!-- <li><a href="#step-1">Bước 1 <br /><small>Chọn số tiền muốn nạp</small></a></li> -->
                    <li class="nav-item active"><a href="#step-1" class="nav-link">Bước 1<br><small>Step 1</small></a></li>
                    <li class="nav-item"><a href="#step-2" class="nav-link">Hoàn thành<br><small>Step 2</small></a></li>
                </ul>

                <div class="sw-container tab-content" style="min-height: 0px;">
                   <!--  <div id="step-0" class="">
                        <form>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tài khoản nhận</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="inputEmail3" value="" disabled>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Số tiền nạp</label>
                            <div class="col-sm-9">
                               <select id="inputState" class="form-control">
                                <option selected>Vui lòng chọn...</option>
                                <option>10,000</option>
                              </select>
                            </div>
                          </div>
                          <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-3 pt-0">Chuyển vào</legend>
                              <div class="col-sm-9">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                  <label class="form-check-label" for="gridRadios1">
                                    Tài khoản chính
                                  </label>
                                </div>
                            
                              </div>
                            </div>
                          </fieldset>
                       
      
                        </form>
                    </div> -->
                    <div id="step-2" class="tab-pane step-content">
                      
<p><b>Thực hiện chuyển tiền (Quan trọng)</b>:</p>
  <ul style="background-color: #fcf8e3" class="list-group p-3">
                Chuyển tiền tới tài khoản ngân hàng sau
                <li class="list-group-item font-weight-bold">Ngân hàng: <img data-toggle="tooltip" data-html="true" data-placement="top" title="" data-original-title="Joint Stock Commercial Bank for Foreign Trade of Vietnam" class="mb-3" src="/assets/img/payment-logo/vietcombank-logo.png" width="100px"></li>
                <li class="list-group-item font-weight-bold">Tên chủ khoản: <span class="badge-info p-1">Huỳnh Ngọc Ân Trạch</span></li>
                <li class="list-group-item font-weight-bold">Chi nhánh: <span class="badge-info p-1">Bắc Gia Lai</span></li>
                <li class="list-group-item font-weight-bold">Số tài khoản: <span class="badge-info p-1">0291000318544</span></li>
                <li class="list-group-item font-weight-bold">Số tiền: <span id="payment_amount" class="badge-success p-1">lỗi</span></li>
                <li class="list-group-item font-weight-bold">Nội dung: <span id="payment_id" class="badge-danger p-1">lỗi</span></li>
            </ul>
  
  <div class="text-center"><button id="submitPayment" class="btn btn-info mt-2" onclick="confirmMsg();"><i class="fa fa-check-circle" aria-hidden="true"></i>
Xác nhận đã chuyển</button></div>
                    </div>
                    <div id="step-1" class="tab-pane step-content" style="display: block;">
                        <div class="alert alert-info" style="margin:10px 0 15px 0; /*padding:5px 5px 5px 15px;*/">
                        <i class="fa fa-info-circle"></i> <a target="_blank" href="khuyenmai.html">Click xem hướng dẫn nạp qua Ngân hàng.</a>
                         </div>
                                                   <div class="row">
                        <div class="col-md-6">
                                                            <div class="form-group">
                            <label for="confirmAmount">Nhập số tiền muốn nạp</label>
                            <input type="tel" class="form-control" id="confirmAmount" placeholder="Chọn để nhập" required="" maxlength="19">
                            
                            <div class="text-info pt-2">Xu thực nhận: <span id="coinReceive">0</span></div>
                            <div class="text-info pt-2">Lượt quay tặng thêm: <span id="turnReceive">0</span></div>
                          </div>

                        </div>

                       

                      </div>
                       <div class="row">
                        <div class="col-md-12">
                          <div class="alert alert-warning fade in alert-dismissible show">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true" style="font-size:20px">×</span>
                            </button>    <strong>Lưu ý: </strong> Số tiền phải là số lớn hơn 10,000 và chia hết cho 1,000.
                          </div>
                          
                        </div>

                      </div>


                    </div>
                </div><div class="btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-end"><div class="btn-group mr-2 sw-btn-group" role="group"><button class="btn btn-warning sw-btn-next" type="button">Bước tiếp theo</button></div></div>
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