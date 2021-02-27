<!DOCTYPE html>
<html>

<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Quản lý tài khoản | MU H5</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="/assets/css/user-style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    @yield('link')
</head>

<body>
    <!-- header -->
    @include("user.layout.header")
    <script type="text/javascript">
        //diem danh popup
        function attendance() {
            $(document).ready(function () {
                $.get("/api/attend.php",
                    function (json) {
                        if (json.status == 1) {
                            Swal.fire(
                                'Điểm danh thành công',
                                "Bạn nhận được " + json.msg + ' Gem',
                                'success'
                            );
                        } else {
                            Swal.fire(
                                'Thất bại',
                                json.msg,
                                'error'
                            );
                        }
                    }, 'json');
            });
        }
        // Get vip info
        function ajaxGetVipInfo() {
            var uid = "1265";
            $.post('/api/users/AjaxGetVipInfo.php', {
                uid: uid
            }, function (result) {
                if (result.status) {
                    valeur = result.vip_exp_current / result.vip_exp_next * 100;
                    $('.vip_level_current').html(result.vip_level_current);
                    $('.vip_level_next').html(result.vip_level_next);
                    $('.vip_exp_current').html(result.vip_exp_current);
                    $('.need_to_up').html(result.vip_exp_next);
                    if (result.vip_level_current < 5)
                        $('.progress-bar').css('width', valeur + '%').attr('aria-valuenow', valeur);
                    else {
                        $("#vip_info").html("Bạn đã đạt cấp VIP tối đa");
                        $('.progress-bar').css('width', '100%').attr('aria-valuenow', 100);
                    }
                } else {
                    $("#msg2").addClass("alert alert-danger").html(result.msg);

                }
            },
                'JSON'
            );
        }

        // Get user info
        function ajaxGetUserInfo() {
            var uid = "1265";
            $.post('/api/users/AjaxGetUserInfo.php', {
                uid: uid
            }, function (result) {


                if (result.status) {
                    if (result.avatar != '') {
                        $("#avatar").attr("src", result.avatar);

                    }
                    ver_icon = '';
                    if (result.verify) {
                        ver_icon = '<a class="p-1" href ="#" data-toggle="tooltip" data-html="true" data-placement="right" title="Đã xác minh"><img src="/assets/img/verify.png"></a>';
                    }
                    if (result.first_name != null || result.last_name != null)
                        var fullname = result.last_name + ' ' + result.first_name;
                    else
                        var fullname = result.niceUsername;
                    $(".fullname").val(fullname);
                    $(".fullname_txt").html(fullname + ver_icon);
                    $(".niceUsername").html(result.niceUsername);
                    $("#phonenumber").val(result.phonenumber);
                    $("#idcard").val(result.idcard);
                    $("#email").val(result.email);
                    $("#ggcoin").html(result.ggcoin);
                    $("#xuCurrent").val(result.ggcoin);
                    $("#gem").html(result.ggcoin_lock);
                    $("#vip_level").html(result.vip_level);
                    $("[data-toggle=tooltip]").tooltip();

                } else {
                    $("#msg2").addClass("alert alert-danger").html(result.msg);

                }
            },
                'JSON'
            );
        }

        function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test($email);
        }

        function ajaxUpdatePassword() {
            var password = $("#currentPasswordChange").val();
            var newPassword = $("#newPassword").val();
            var reNewPassword = $("#reNewPassword").val();

            if (!password || !newPassword || !reNewPassword) {

                $("#msg2").addClass("alert alert-danger").text('Vui lòng nhập đầy đủ các trường').show();
                return false;
            }
            $.post('/api/users/AjaxUpdatePassword.php', {
                password: password,
                newPassword: newPassword,
                reNewPassword: reNewPassword
            }, function (result) {
                if (result.status) {
                    $("#msg2").text('Cập nhật mật khẩu thành công!').removeClass("alert alert-danger").addClass("alert alert-success").show();
                } else {
                    $("#msg2").addClass("alert alert-danger").html(result.msg);
                }
            },
                'JSON'
            );
        }

              // function ajaxUpdateInfo() {
              //     var fullname = $("#fullname").val();
              //     var email = $("#email").val();
              //     var address = $("#address").val();
              //     var phonenumber = $("#phonenumber").val();
              //     var idcard = $("#idcard").val();
              //     var gender = $("#gender").val();
              //     var birthday = $("#birthday").val();
              //     var currentPassword = $("#currentPassword").val();
              //     if (!currentPassword) {
              //         $("#msg").addClass("alert alert-danger").text('Vui lòng nhập mật khẩu hiện tại').show();
              //         $("#currentPassword").focus();
              //         return false;
              //     }
              //     if ((!fullname) && (!email) && (!address) && (!phonenumber) && (!idcard) && (!gender) && (!birthday)) {
              //         $("#msg").addClass("alert alert-danger").text('Vui lòng nhập ít nhất 1 trường').show();
              //         return false;
              //     }
              //     if (!$.isNumeric(phonenumber)) {
              //         $("#msg").addClass("alert alert-danger").text('Số điện thoại phải là số').show();
              //         $("#phonenumber").focus();
              //         return false;
              //     }
              //     if (!$.isNumeric(idcard)) {
              //         $("#msg").addClass("alert alert-danger").text('Hộ chiếu/CMND phải là số').show();
              //         $("#idcard").focus();
              //         return false;
              //     }
              //     if (!validateEmail(email)) {
              //         $("#msg").addClass("alert alert-danger").text('Email không đúng định dạng').show();
              //         $("#email").focus();
              //         return false;
              //     }
              //     if (birthday.length != 4) {
              //         $("#msg").addClass("alert alert-danger").text('Năm sinh không đúng định dạng, VD: YYYY').show();
              //         $("#email").focus();
              //         return false;
              //     }
              //     $.post('/ajax/users/AjaxUpdateInfo', {
              //             fullname: fullname,
              //             email: email,
              //             address: address,
              //             phonenumber: phonenumber,
              //             idcard: idcard,
              //             gender: gender,
              //             birthday: birthday,
              //             currentPassword: currentPassword
              //         }, function(result) {
              //             if (result.status) {
              //                 $("#msg").text('Cập nhật thông tin thành công!').removeClass("alert alert-danger").addClass("alert alert-success").show();
              //             } else {
              //                 $("#msg").addClass("alert alert-danger").html(result.msg);
              //             }
              //         },
              //         'JSON'
              //     );
              // }
    </script>
    @yield('container') 
    
    <!-- footer -->
    @include("user.layout.footer")
</body>
<script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#smartwizard').smartWizard();
    });
</script>
@yield('script')
</html>