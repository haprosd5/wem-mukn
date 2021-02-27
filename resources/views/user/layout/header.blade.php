<nav class="navbar navbar-icon-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/user/home">
                        <i class="fa fa-home"></i>
                        Trang chủ
                        <span class="sr-only">(current)</span>
                    </a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-credit-card">
                            <span class="badge badge-warning">KM</span>
                        </i>
                        Nạp xu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/user/payment_momo">Nạp MoMo</a>
                        <a class="dropdown-item" href="/user/payment_bank">Nạp ngân hàng</a>
                        <a class="dropdown-item" href="/user/payment_mobi">Nạp thẻ cào</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user/exchange">
                        <i class="fa fa-lg fa-exchange-alt">
                        </i>
                        Nạp game
                    </a>
                </li>
            </ul>


            <ul class="navbar-nav ">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        Cộng đồng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="accountDropdown">

                        <a target="_blank" href="https://facebook.com/" class="dropdown-item "><i
                                class="fab fa-facebook fa-lg"></i> Fanpage</a>
                        <a target="_blank" href="https://facebook.com/groups/" class="dropdown-item "><i
                                class="fab fa-facebook fa-lg"></i> Group</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list">
                        </i>
                        Tính năng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="accountDropdown">

                        {{-- <a href="/user/payment_log" class="dropdown-item "><i class="fa fa-lg fa-history"
                                aria-hidden="true"></i> Lịch sử nạp</a> --}}
                        <a href="/user/giftcode" class="dropdown-item "><i class="fa fa-lg fa-gift"
                                aria-hidden="true"></i> Giftcode</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user">
                        </i>
                        <span class="niceUsername">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="accountDropdown">
                        <a class="dropdown-item" href="/user/change_pass"><i class="fas fa-lg fa-lock"></i> Đổi
                            mật khẩu</a>
                        <a class="dropdown-item" href="/user/home"><i class="fas fa-info fa-lg"></i> Thông tin tài
                            khoản</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/user/logout"><i class="fas fa-sign-out-alt fa-lg"></i>
                            </i> Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>