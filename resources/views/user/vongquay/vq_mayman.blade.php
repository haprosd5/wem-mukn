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
    <div class="content shadow-lg border m-3">
        <div class="row mt-3">

           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
        <h3 class="panel-title ml-3 gradient-color">Vòng quay nhân phẩm</h3>
               
    <canvas id="secondCanvas" class="tutCanvas" width="400" height="400" data-responsiveminwidth="50"     data-responsivescaleheight="true"  =""     data-responsivemargin="10">Canvas not supported</canvas>


<button id="bigButton2" class="btn btn-success btn-lg ml-5" onclick="calculatePrizeOnServer(); this.disabled=true;"><i class="fas fa-sync-alt"></i>
Quay</button> Có <b class="text-success" id="luotquay">1</b> lượt quay <a data-toggle="modal" href="#buy"> Mua thêm</a>
<div class="form-row ml-5 mb-3">
<div class="col-6">
                        <small>Vui lòng chọn máy chủ nhận item, KNB</small>

                        <select onchange="getCharname(this.value)" id="inputGameServer" class="form-control">
                        <option value="">- Vui lòng chọn -</option>
                          <option value="6">Khởi Nguyên 6</option><option value="5">Mu Khởi Nguyên 5</option><option value="4">Khởi Nguyên 4</option><option value="3">Khởi Nguyên 3</option><option value="2">Khởi Nguyên 2</option><option value="1">Khởi Nguyên 1</option></select>
                          <div class="form-group">
                        <label for="actorname">Nhân vật:</label>
                        <input type="text" class="form-control" id="actorname" disabled="true" value="Chưa có nhân vật">
                        <small class="text-muted">Vui lòng kiểm tra đúng tên nhân vật</small>
                      </div>
                          </div>
                          </div>


<div id="buy" class="modal fade" tabindex="-1">
<div class="modal-dialog modal-login">
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title">Mua thêm lượt (10k xu(gem)/lượt)</h4> 
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<form>
<div class="form-group pl-3 pr-3">
    <label for="buy_num">Nhập số lượt muốn mua</label>
    <input type="tel" class="form-control" id="buy_num" placeholder="Nhập số lượng" required="" maxlength="19">
    
  </div>
  <div class="form-groups pl-3 pr-3">
    <label for="needPay">Phải trả</label>
    <input type="text" class="form-control" id="needPay" disabled="true">
    
  </div>
  <div class="form-groups pl-3 pr-3">
    <label for="buy_num">Mua bằng</label>
    <select id="currency" class="form-control">
      <option value="">- Vui lòng chọn -</option>
      <option value="xu">Xu</option>
      <option value="gem">Gem</option>
      </select>
    
  </div>
  
  <span class="pl-3" id="msg2"></span>
  <div class="form-group pl-3">
  
    <button class="btn btn-success" onclick="buyTurn();return false;" href="javscript:;">Xác nhận</button>
  </div>
</form>
<div class="modal-footer">
Chọn số lượt sau đó nhấn xác nhận
</div>
</div>
</div>
</div>
           </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
        <div class="panel panel-primary pl-3" id="result_panel">
<div class="panel-heading"><h3 class="panel-title gradient-color">Top nhân phẩm </h3>(Trong tổng số <span id="dathamgia">1,157</span> tài khoản tham gia)
</div>
<div class="panel-body">
    <ul id="result_log_top" class="list-group">
<li class="list-group-item"><strong class="text-primary">dpthanh</strong> <span class="text-muted">nhận được</span> <strong class="text-success">5,000,000KC</strong> <span class="text-muted">vào lúc</span> 19:27 14-01-2021
        </li></ul>
</div>
</div>
         <div class="panel panel-primary pl-3" id="result_panel">
<div class="panel-heading"><h3 class="panel-title gradient-color">Lịch sử nhận quà</h3>
</div>
<div class="panel-body">
    <ul id="result_log" class="list-group">
        <li class="list-group-item"><strong class="text-primary">duclam2005</strong> <span class="text-muted">nhận được</span> <strong class="text-success">50,000KC</strong> <span class="text-muted">vào lúc</span> 21:42 26-02-2021
        </ul>
</div>
</div>
<div class="panel panel-primary pl-3" id="result_panel">
<div class="panel-heading"><h3 class="panel-title gradient-color">Quà của bạn</h3>
</div>
<div class="panel-body">
    <ul id="result_log_uid" class="list-group">
</ul>
</div>
</div>

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
<script>
    document.title ="Vòng quay nhân phẩm - MU H5";
    let secondWheel = new Winwheel({
        'numSegments' : 14,
        'outerRadius' : 170,
        'canvasId'    : 'secondCanvas',
        'textOrientation' : 'horizontal',
        'textDirection' : 'reversed',
        'segments'    : [{'fillStyle' : '#d77967','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '10,000xu'},{'fillStyle' : '#c17430','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '1000xu'},{'fillStyle' : '#c98f2a','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '20,000xu'},{'fillStyle' : '#898e36','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '5000xu'},{'fillStyle' : '#577271','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : 'Thêm lượt'},{'fillStyle' : '#d54227','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '100,000xu'},{'fillStyle' : '#d54227','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '500,000xu'},{'fillStyle' : '#da1b60','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '1,000,000xu'},{'fillStyle' : '#d54227','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '5,000,000KC'},{'fillStyle' : '#da1b60','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '10,000,000KC'},{'fillStyle' : '#d77367','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '20,000KC'},{'fillStyle' : '#977271','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : '50,000KC'},{'fillStyle' : '#977271','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : 'x2 EXP'},{'fillStyle' : '#977271','strokeStyle' : '#eae6d0','textFillStyle' : '#eae6d0', 'text' : 'x3 EXP'},],
        'pointerAngle'   : 90, 

        'responsive'   : false,  // This wheel is responsive!
         'pins' :
            {
                'outerRadius': 3,
                'responsive' : false, // This must be set to true if pin size is to be responsive.
                'fillStyle' : '#FFF',
                'strokeStyle' : '#FFF',

            },

        'animation' :
        {
            'type'          : 'spinToStop',
            'duration'      : 5,
            'spins'         : 14,
            'callbackFinished' : 'alertPrize()',
            'callbackAfter' : 'drawTriangle2()',

        }
    });
    
     function alertPrize()
        {
    
            // Call getIndicatedSegment() function to return pointer to the segment pointed to on wheel.
            let winningSegment = secondWheel.getIndicatedSegment();
            
            // Basic alert of the segment text which is the prize name.
            Swal.fire(
                  'Chúc mừng!',
                  "Bạn nhận được " + winningSegment.text + "!",
                  'success'
                ).then(function() {
                    secondWheel.stopAnimation(false); secondWheel.rotationAngle=0; drawTriangle2(); bigButton2.disabled=false;
                    getLuotQuay();getLog();
                });
        }
    // In this example I use raw Javascript to do the AJAX, but if you have jQuery included
    // in your website so might want to use its AJAX features as its a bit less code to write.
    // let xhr = new XMLHttpRequest();
    // xhr.onreadystatechange = ajaxStateChange;

    // Function called on click of spin button.
    function calculatePrizeOnServer()
    {
        segmentNumber = 0;

        // Make get request to the server-side script.
        // xhr.open('GET',"calculate_prize.php", true);
        // xhr.send('');
        var selectServer = $('#inputGameServer').children("option:selected").val();
        var actorname = $('#actorname').val();
        if(!selectServer){
            Swal.fire(
                  'Lưu ý',
                  "Bạn chưa chọn server nhận vật phẩm và KNB",
                  'warning'
                ).then(function() {
                    secondWheel.stopAnimation(false); secondWheel.rotationAngle=0; drawTriangle2(); bigButton2.disabled=false;
                    getLuotQuay();getLog();
                });
            return;
        }
        if(actorname == "Chưa có nhân vật"){
            Swal.fire(
                  'Lưu ý',
                  "Bạn chưa có nhân vật ở máy chủ này",
                  'warning'
                ).then(function() {
                    secondWheel.stopAnimation(false); secondWheel.rotationAngle=0; drawTriangle2(); bigButton2.disabled=false;
                    getLuotQuay();getLog();
                });
            return;
        }
        $.get( "/api/vongquay/calculate_prize.php?sid="+selectServer, function( data ) {
            if(data.status){
                let segmentNumber = data.result; 
            
                if (segmentNumber) {
                    let stopAt = secondWheel.getRandomForSegment(segmentNumber);

                    // Important thing is to set the stopAngle of the animation before stating the spin.
                    secondWheel.animation.stopAngle = stopAt;

                    // Start the spin animation here.
                    secondWheel.startAnimation();

                }
            }else{
                Swal.fire(
                  'Oops!',
                  data.msg,
                  'error'
                ).then(function() {
                    secondWheel.stopAnimation(false); secondWheel.rotationAngle=0; drawTriangle2(); bigButton2.disabled=false;
                    getLuotQuay();getLog();
                });

        }
        }, "json" );
    }



    // Usual pointer drawing code.
    drawTriangle2();

    function drawTriangle2()
    {
        
         let ctx = secondWheel.ctx;

        ctx.strokeStyle = 'navy';  // Set line colour.
        ctx.fillStyle   = 'aqua';  // Set fill colour.
        ctx.lineWidth   = 2;
        ctx.beginPath();           // Begin path.
 
        ctx.moveTo(390, 174);      // Move to initial position.
        ctx.lineTo(390, 226);      // Draw lines to make the shape.
        ctx.lineTo(360, 200);
        ctx.lineTo(390, 175);
        ctx.stroke();              // Complete the path by stroking (draw lines).
        ctx.fill();
        
    }
       $( document ).ready(function() {
        $.getJSON("/api/listServer.php?type=select_list", function(result) {
            var $dropdown = $("#inputGameServer");
            $.each(result, function() {
                let selected = false;
                if(this.sid == 0){
                    selected = true;
                }
                $dropdown.append($("<option />").val(this.sid).text(this.name).attr('selected',selected));
            });
        });
    });
     // Get vip info
      function getLuotQuay() {
          $.post('/api/vongquay/get_luot_quay.php', function(result) {
                  if (result.status) {
                      $('#luotquay').html(result.luotquay);
                      $('#dathamgia').html(result.dathamgia);
                      
                      
                  } else {
                      $("#msg2").addClass("text-danger").html(result.msg);

                  }
              },
              'JSON'
          );
      }
      function getLog(){
        $.get("/api/vongquay/get_log.php", function( data ) {
          $( "#result_log" ).html( data );
        });
        $.get("/api/vongquay/get_log.php?uid=1", function( data ) {
          $( "#result_log_uid" ).html( data );
        });
        $.get("/api/vongquay/get_log.php?uid=2", function( data ) {
          $( "#result_log_top" ).html( data );
        });
        }

      $(document).ready(function() {
            getLuotQuay();
            getLog();
        });
        function buyTurn() {
          var turn = $("#buy_num").val();
          var currency = $("#currency").val();
          if (!turn) {
              
              $("#msg2").addClass("text-danger").text('Vui lòng nhập đầy đủ các trường').show();
              return false;
          }
          if (!currency) {
              
              $("#msg2").addClass("text-danger").text('Vui lòng nhập đầy đủ các trường').show();
              return false;
          }
          $.post('/api/vongquay/buy_turn.php', {
                  turn: turn,
                  currency: currency
              }, function(result) {
                  if (result.status) {
                      $("#msg2").html(result.msg).removeClass("text-danger").addClass(" text-success");
                      getLuotQuay();
                  } else {
                      $("#msg2").addClass("text-danger").html(result.msg);
                  }
              },
              'JSON'
          );
      }

</script>
@endsection

@section('script')


    
@endsection