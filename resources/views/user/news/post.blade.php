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
                                                                                        aria-hidden="true"></i> Cộng
                        đồng</a>
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

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8" id="post_view">
        @isset($tintuc)


            <!-- Title -->
                <h1 class="mt-4">{{ $tintuc[0]->title }}</h1>
                <hr>

                <!-- Date/Time -->

                <p><i class="fa fa-folder-open-o" aria-hidden="true"></i>
                    <a href="<?php if ($tintuc[0]->cate_id == 1) {echo '';} else {echo '/event';}?>"><?php if ($tintuc[0]->cate_id == 1) {echo 'Tin tức';} else {echo 'Sự kiện';}?></a> <i class="fa fa-clock-o" aria-hidden="true"></i> Đăng vào lúc:
                    {{ $tintuc[0]->created_at }} <i class="fa fa-user" aria-hidden="true"></i> {{ $tintuc[0]->name }}
                </p>

                <hr>

                <!-- Preview Image -->
                <div class="text-center">
                    <img class="img-fluid rounded img-fluid rounded" src=" <?php if ($tintuc[0]->feature_img ==
                    'https://via.placeholder.com/150') {?> https://via.placeholder.com/150 <?php } else { ?>
                            upload/feature_img/{{ $tintuc[0]->feature_img}} <?php }?>"
                         alt="Máy chủ mới MU H5: Khởi Nguyên 6 | 10h - 19/2/2021">
                </div>

                <hr>

                <!-- Post Content -->
                <div id="post_content">
                    {!! $tintuc[0]->content !!}

                </div>
                <hr>

                {{--<h5>Bài viết cùng chuyên mục</h5>
                <ul class=" list-group list-group-flush">
        <li class="list-group-item"><a href="may-chu-moi-mu-h5-khoi-nguyen-5-10h-06-2-2021">Máy chủ mới MU
                H5:
                Khởi Nguyên 5 | 10h - 06/2/2021</a></li>
        <li class="list-group-item"><a href="may-chu-moi-mu-h5-khoi-nguyen-4-10h-30-01-2021">Máy chủ mới MU
                H5:
                Khởi Nguyên 4 | 10h - 30/01/2021</a></li>
        <li class="list-group-item"><a href="may-chu-moi-mu-h5-khoi-nguyen-3-10h-23-01-2021">Máy chủ mới MU
                H5:
                Khởi Nguyên 3 | 10h - 23/01/2021</a></li>
        <li class="list-group-item"><a href="may-chu-moi-mu-h5-khoi-nguyen-2-10h-17-01-2021">Máy chủ mới MU
                H5:
                Khởi Nguyên 2 | 10h - 17/01/2021</a></li>
        <li class="list-group-item"><a href="thoi-gian-open-chinh-thuc-mu-h5-khoi-nguyen">Thời gian open
                chính
                thức MU H5: Khởi Nguyên</a></li>--}}
                </ul>

                <!-- Comments  -->
                <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" colorscheme="dark"
                     data-href="http://muh5z.com/tin-tuc/may-chu-moi-mu-h5-khoi-nguyen-6-10h-19-2-2021"
                     data-width="100%"
                     data-numposts="5" fb-xfbml-state="rendered"
                     fb-iframe-plugin-query="app_id=433354790408741&amp;color_scheme=dark&amp;container_width=730&amp;height=100&amp;href=http%3A%2F%2Fmuh5z.com%2Ftin-tuc%2Fmay-chu-moi-mu-h5-khoi-nguyen-6-10h-19-2-2021&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;skin=dark&amp;version=v4.0&amp;width="
                     style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 202px;"><iframe
                                name="f3bcce7670fd17c" width="1000px" height="100px"
                                data-testid="fb:comments Facebook Social Plugin"
                                title="fb:comments Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://www.facebook.com/v4.0/plugins/comments.php?app_id=433354790408741&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfc37dd723fa3e%26domain%3Dmuh5z.com%26origin%3Dhttp%253A%252F%252Fmuh5z.com%252Ff2d1017f13cd204%26relation%3Dparent.parent&amp;color_scheme=dark&amp;container_width=730&amp;height=100&amp;href=http%3A%2F%2Fmuh5z.com%2Ftin-tuc%2Fmay-chu-moi-mu-h5-khoi-nguyen-6-10h-19-2-2021&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;skin=dark&amp;version=v4.0&amp;width="
                                style="border: none; visibility: visible; width: 100%; height: 202px;"
                                __idm_frm__="132"
                                class=""></iframe></span></div>
            @endisset
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">


            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">MU trên Facebook</h5>
                <div class="card-body p-0">
                    <div class="fb-page fb_iframe_widget" data-href="https://facebook.com/muh5z"
                         data-tabs="timeline"
                         data-width="" data-height="" data-small-header="true" data-adapt-container-width="true"
                         data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered"
                         fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=433354790408741&amp;container_width=348&amp;hide_cover=false&amp;href=https%3A%2F%2Ffacebook.com%2Fmuh5z&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=">
                        <span style="vertical-align: bottom; width: 340px; height: 500px;"><iframe
                                    name="f2ad8dd9cb28ad8" width="1000px" height="1000px"
                                    data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                    frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                    allow="encrypted-media"
                                    src="https://www.facebook.com/v4.0/plugins/page.php?adapt_container_width=true&amp;app_id=433354790408741&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1f4d6dd16c986c%26domain%3Dmuh5z.com%26origin%3Dhttp%253A%252F%252Fmuh5z.com%252Ff2d1017f13cd204%26relation%3Dparent.parent&amp;container_width=348&amp;hide_cover=false&amp;href=https%3A%2F%2Ffacebook.com%2Fmuh5z&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width="
                                    style="border: none; visibility: visible; width: 340px; height: 500px;"
                                    __idm_frm__="133" class=""></iframe></span></div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

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
                                                           class="shadow btn text-light p-3 m-2"><span
                                        class="badge badge-light"></span>
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
                                                                             src="images/logo.png" alt="MU H5"
                                                                             width="103px"></a>
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