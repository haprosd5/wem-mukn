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

        <div class="content-body">
            <h4>Chào mừng bạn đến với trang quản trị game</h4>
        </div>
    </div>
@endsection

@section('script')
    @parent
    <!-- BEGIN: Page JS-->
    <script src="backend/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->
@endsection