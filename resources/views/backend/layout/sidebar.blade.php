<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('admin/home') }}">
                    <div class="brand-logo center-layout"><img class="logo"
                                                               src="{{ url('backend/app-assets/images/logo/logo.png') }}"/>
                    </div>
                    <h2 class="brand-text mb-0">Admin</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" href="{{ url('admin/home') }}"
                                               data-toggle="collapse"><i
                            class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary"
                            data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
            data-icon-style="lines">
            <li class="nav-item">
                <a href="{{ url('admin/home') }}">
                    <i class="bx bx-home" data-icon="desktop"></i>
                    <span class="menu-title" data-i18n="">Dashboard</span>
                </a>
            </li>

            <li class="nav-item has-sub sidebar-group-active mt-1"><a href="admin/news"><i
                            class="bx bx-menu"
                            data-icon="notebook"><span></span></i><span
                            class="menu-title" data-i18n="Invoice">Bài viết</span></a>
                <ul class="menu-content" style="">
                    <li class="<?php if(Request::url() == url('admin/news')) { echo 'active'; }  ?>  hover"><a
                                href="admin/news"><i
                                    class="bx
                    bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="Invoice List">Tin tức</span></a>
                    </li>
                    <li class="<?php if(Request::url() == url('admin/events')) { echo 'active'; }  ?> "><a
                                href="admin/events"><i class="bx bx-right-arrow-alt"></i><span class="menu-item"
                                                                                                       data-i18n="Invoice">Event</span></a>
                    </li>

                </ul>
            </li>

            <li class="nav-item has-sub sidebar-group-active mt-1"><a href="#"><i
                            class="bx bx-menu"
                            data-icon="notebook"><span></span></i><span
                            class="menu-title" data-i18n="Invoice">Payment</span></a>
                <ul class="menu-content" style="">
                    <li class="<?php if(Request::url() == url('admin/payment/card')) { echo 'active'; }  ?>  hover"><a href="admin/payment/card"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item" data-i18n="Invoice List">Nạp thẻ</span></a>
                    </li>
                    <li class="<?php if(Request::url() == url('admin/payment/bank')) { echo 'active'; }  ?>"><a href="admin/payment/bank"><i class="bx bx-right-arrow-alt"></i><span
                                    class="menu-item"
                                                                                                  data-i18n="Invoice">Nạp bank</span></a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>
