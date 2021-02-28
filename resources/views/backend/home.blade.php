@extends('backend.layout.index')
@section('title')
    Trang quản trị game
@endsection
@section('link')
    @parent
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="backend/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="backend/app-assets/css/pages/dashboard-ecommerce.css">
    <!-- END: Page CSS-->
@endsection
@section('container')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Fixed Layout</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="sk-layout-2-columns.html"><i
                                                class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Starter Kit</a>
                                </li>
                                <li class="breadcrumb-item active">Fixed Layout
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Description -->
            <section id="description" class="card">
                <div class="card-header">
                    <h4 class="card-title">Description</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>The fixed layout has a fixed navbar, navigation menu and footer, only content section is
                                scrollable to user. In this page you can experience it. Fixed layout provide seamless UI
                                on different screens.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Description -->
            <!-- CSS Classes -->
            <section id="css-classes" class="card">
                <div class="card-header">
                    <h4 class="card-title">CSS Classes</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>This table contains all classes related to the fixed layout. This is a custom layout
                                classes for fixed layout page requirements.</p>
                            <p>All these options can be set via following classes:</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><code>.navbar-sticky</code></th>
                                        <td>To set navbar fixed you need to add <code>navbar-sticky</code> class in
                                            <code>&lt;body&gt;</code> tag.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.fixed-top</code></th>
                                        <td>To set navbar fixed you need to add <code>fixed-top</code> class in <code>&lt;nav&gt;</code>
                                            tag.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.menu-fixed</code></th>
                                        <td>To set the main navigation fixed on page <code>menu-fixed</code> class needs
                                            to add in navigation wrapper.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.fixed-footer</code></th>
                                        <td>To set the main footer fixed on page <code>fixed-footer</code> class needs
                                            to add in <code>&lt;body&gt;</code> tag.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ CSS Classes -->
            <!-- HTML Markup -->
            <section id="html-markup" class="card">
                <div class="card-header">
                    <h4 class="card-title">HTML Markup</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>This section contains HTML Markup to create fixed layout. This markup define where to add
                                css classes to make navbar, navigation & footer fixed.</p>
                            <p>Frest has a ready to use starter kit, you can use this layout directly by using the
                                starter kit pages from the <code>frest-clean-bootstrap-admin-dashboard-template/starter-kit</code>
                                folder.</p>
                            <pre class="language-html">

        </pre>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ HTML Markup -->

        </div>
    </div>
@endsection

@section('script')
    @parent
    <!-- BEGIN: Page JS-->
    <script src="backend/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->
@endsection