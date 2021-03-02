<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <base href="{{asset('')}}">
    <title>MU H5 - Huyền thoại</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <meta name="description"
        content="Game MU H5 Huyền thoại">
    <link rel="canonical" href="http://muh5z.com/">
    <link rel="next" href="http://muh5z.com/page/2">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="MU H5 - Kh&#7903;i Nguy&ecirc;n">
    <meta property="og:description"
        content="Game MU H5 Huyền thoại">
    <meta property="og:url" content="">
    <meta property="fb:app_id" content="660122807796098">
    <meta property="og:site_name" content="MU H5">
    <meta property="og:image" content="http://muh5z.com/assets/img/share.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
        content="Game MU H5 Huyền thoại">
    <meta name="twitter:title" content="MU H5 - Kh&#7903;i Nguy&ecirc;n">
    <meta name="twitter:site" content="@muh5z">
    <meta name="twitter:image" content="http://muh5z.com/assets/img/share.jpg">
    <link rel="stylesheet" href="css/lib-bootstrap.min.css">
    <script src="js/lib-jquery.min.js"></script>
    <script src="js/lib-popper.min.js"></script>
    <script src="js/lib-bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/css-font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bahianita&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/lib-animate.min.css">
    <script src="js/lib-sweetalert2@8.js"></script><!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/css-style.css">
    <link rel="stylesheet" href="css/css-light.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="#"></script>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav id="download" class="navbar fixed-bottom bg-bottom-nav d-xl-none d-lg-none">
        <div class="d-inline-flex" style="width:100%;">
            <ul class="nav navbar-nav d-inline-flex ">
                <li class="nav-item">
                    <ul class="list-inline-mb-0">
                        <li class="list-inline-item"><a onclick="alert('&#272;ang c&#7853;p nh&#7853;t...')"
                                href="/"><img width="150px" alt="Google Play"
                                    src="images/badges-vi_badge_web_generic.png"></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="btn btn-success">Chơi trên iOS</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-inverse  bg-transparent justify-content-between">
        <div class="container">
            <a class="navbar-brand logo-game" href="/"><img src="images/logo.png" alt="MU
        H5"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item mr-auto">
                        <a class="nav-link" href="/">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                            Tin tức
                        </a>

                    </li>
                    <li class="nav-item mr-auto">
                        <a class="nav-link" href="event"><i class="fa fa-gift" aria-hidden="true"></i>
                            Sự kiện</a>
                    </li>

                    <li class="nav-item mr-auto">
                        <a target="_blank" class="nav-link" href="https://facebook.com/"><i class="fa fa-facebook"
                                aria-hidden="true"></i> Cộng đồng</a>
                    </li>
                    <li class="nav-item mr-auto">
                        <a target="_blank" class="nav-link" href="#"><i class="fa  fa-gift
" aria-hidden="true"></i> Giftcode</a>

                    </li>
                    <li class="nav-item mr-auto">
                        <a class="nav-link" href="#"><i class="fa fa-gamepad" aria-hidden="true"></i> Game hay<sup><span
                                    class="badge badge-warning">NEW</span></sup></a>
                    </li>

                </ul>

                <div class="ml-auto">
                    <ul class="navbar-nav">

                        @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->name}} </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" target="_blank" href="/user/home">Thông tin</a>
                                <a class="dropdown-item" target="_blank" href="#">Đổi
                                    mật khẩu</a>
                                <a class="dropdown-item" href="/logout">Thoát</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item mr-auto">
                            <a class="nav-link" href="#login" data-toggle="modal">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                Đăng nhập
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <section id="header">
        <div class="container header-box vertical-center text-center">
            <div class="row mx-auto">
                <div class="col-md-12">
                    <!-- <h3>Ra mắt hôm nay!</h3> -->
                    <h4 class="header-text">Tặng VIP6 + 1.000.000 kim cương</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row p-0">
                <!-- button play -->
                <div class="col-md-3 pb-3 pt-3 text-center action-box">
                    <div class="btn-group">
                        @if(Auth::check())
                        <img href="#server" data-toggle="modal" class="border-0 btn-play" src="/images/Layer 696.png"
                            alt="">
                        @else
                        <img href="#login" data-toggle="modal" class="border-0 btn-play" src="/images/Layer 696.png"
                            alt="">
                        @endif
                    </div>
                    <div class="btn-group">
                        <button onclick=" window.open('#','_blank')" class="border-0 p-2 btn-play">Nạp tiền
                        </button>
                        <button href="#register" data-toggle="modal" class="border-0 p-2 btn-play">Đăng ký</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row ng-scope">
            @isset($tintucs)
                @foreach ($tintucs as $item)
                    <div class="col-md-12 mt-4 mb-4">
                        <section class="search-result-item">
                            <div class="search-result-item-body p-2 mt-2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="tin-tuc/{{ $item->slug }}"><img class="image justify-content-center"
                                                         src="<?php if ($item->feature_img ==
                                                         'https://via.placeholder.com/150') {?> https://via.placeholder.com/150 <?php } else { ?>
                                                                 upload/feature_img/{{ $item->feature_img}} <?php }?>">
                                        </a>
                                    </div>
                                    <div class="col-sm-7 p-0">
                                        <h4 class="search-result-item-heading"><a href="tin-tuc/{{ $item->slug }}">{{ $item->title
                                        }}</a></h4>
                                        <p class="info">{{ $item->create_at }}</p>
                                        <p class="description">{{ $item->descriptions }}</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="btn btn-primary btn-info btn-sm" href="tin-tuc/{{ $item->slug }}">Xem thêm...</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                @endforeach
            @endisset

        </div>
    </div>

    <div id="login" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="images/img-avatar.png" alt="Avatar">
                    </div>
                    <h4 class="modal-title">Đăng nhập</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="dangnhap">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Tên tài khoản">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Đăng nhập</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" href="#register" data-toggle="modal">Chưa có tài khoản? Đăng ký ngay</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal HTML -->
    <div id="register" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-login">
            <div class="modal-content">

                <div class="modal-header">
                    <div class="avatar">
                        <img src="images/img-avatar.png" alt="Avatar">
                    </div>
                    <h4 class="modal-title">Đăng ký</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="register">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Tên tài khoản">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Đăng ký</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a data-dismiss="modal" data-toggle="modal" href="#login">Đã có tài khoản? Đăng nhập ngay</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose Server Modal HTML -->
    <div id="server" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div id="server_list" style="font-family: 'Pattaya', sans-serif;">
                    <div class="modal-body">
                        <div class="row ml-0">
                            <div class="col-12"><span>Máy chủ mới</span></div>
                            <div class="col-12 text-center"><a href="/play?sid={{$server_new->id}}"
                                    class="shadow btn text-light p-3 m-2"><span class="badge badge-light"></span>
                                    {{$server_new->name}} <span class="badge badge-light">mới</span></a></div>
                            <div class="col-12"><span>Máy chủ khác</span></div>
                            @foreach($server_list_new as $server)
                            <div class="col-4 p-0">
                                <a href="/play?sid={{$server->id}}" class="shadow btn text-light p-3 m-2">
                                {{$server->name}}
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    Vui lòng chọn máy chủ để tiếp tục
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        /* $(document).ready(function () {
            $.get("/api/listServer.php?type=button_list", function (data) {
                $("#server_list").html(data);
            });
        }); */
        /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
        var prevScrollpos = window.pageYOffset;
        document.onscroll = function () {
            if (window.innerHeight + window.scrollY > document.body.clientHeight) {
                $("#download").hide();
            } else {
                $("#download").show();
            }
        }

    </script><!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript">
        var referrer = "none";
    </script><!-- Footer -->
    <footer class="section footer-classic context-dark bg-image">
        <div class="container">
            <div class="row row-30 p-4">
                <div class="col-md-4 col-xl-5">
                    <div class="pr-xl-4"><a class="brand" href="muh5z.html"><img class="brand-logo-light"
                                src="images/logo.png" alt="MU H5" width="103px"></a>
                        <p>Game MU H5 thể loại Game H5 chơi trên mọi thiết bị, không cần cài đặt, không tốn dung lượng.
                            Đồ
                            họa siêu đẹp, điểm danh nhận KC, đánh BOSS rớt KC. MU H5 Huyền thoại</p>
                        <!-- Rights-->
                    </div>
                </div>
                <div class="col-md-4">
                    <dl class="contact-list">
                        <dt>Địa chỉ</dt>
                        <dd>458 phố Minh Khai, Hai Bà Trưng</dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>Email</dt>
                        <dd><a href="mailto:#">muh5h@gmail.com</a></dd>
                    </dl>
                </div>
                <div class="col-md-4 col-xl-3">
                    <h5>Li&ecirc;n k&#7871;t</h5>
                    <ul class="nav-list">
                        <li><a target="blank" href="#">Fanpage</a></li>
                        <li><a target="blank" href="#">Cộng đồng</a></li>
                        <li><a target="blank" href="#">Hỗ trợ</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>

            <div class="row no-gutters social-container">
                <div class="col"><a class="social-inner" href="/"><span>Trang chủ</span></a></div>
                <div class="col"><a class="social-inner" href="user/home"><span>Tài khoản</span></a></div>
                <div class="col"><a class="social-inner" href=""><span>Nạp xu</span></a></div>
                <div class="col"><a class="social-inner" href="#"><span>Điều khoản</span></a></div>
            </div>
        </div>
    </footer><!-- ./Footer -->
    <!-- <script type="text/javascript" src="js/js-scripts.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function () {
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if (session('success'))
    @foreach (session('success') as $mess)
    <script type="text/javascript">
        toastr.success('{{$mess}}')
    </script>
    @endforeach
    @endif
    @if (session('error'))
    @foreach (session('error') as $mess)
    <script type="text/javascript">
        toastr.error('{{$mess}}')
    </script>
    @endforeach
    @endif
    @if (count($errors)>0)
    @foreach ($errors->all() as $mess)
    <script type="text/javascript">
        toastr.error('{{$mess}}')
    </script>
    @endforeach
    @endif
</body>

</html>