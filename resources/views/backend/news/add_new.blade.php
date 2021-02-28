@extends('backend.layout.index')
@section('title')
    Trang quản trị game
@endsection
@section('link')
    @parent
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="backend/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="backend/app-assets/css/pages/app-invoice.css">
    <link rel="stylesheet" type="text/css" href="backend/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- END: Page CSS-->

@endsection
@section('container')
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">List bài viết</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0 pl-1">
                                <li class="breadcrumb-item"><a href="admin/home"><i class="bx bx-home-alt"></i></a>
                                </li>
                                @isset($data)
                                    @foreach ($data as $item)
                                        <li class="breadcrumb-item">{{$item}}
                                        </li>
                                    @endforeach
                                @endisset
                            </ol>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- app invoice View Page -->
            <section class="invoice-edit-wrapper">
                <div class="row">
                    <!-- invoice view page -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body pb-0 mx-25">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title primary">Thêm bài viết mới</h4>
                                        </div>
                                        <div class="card-body">
                                            <form id="jquery-val-form" method="post" novalidate="novalidate">
                                                <div class="form-group">
                                                    <label class="form-label" for="title">Tiêu đề</label>
                                                    <input type="text" class="form-control" id="title"
                                                           name="title" placeholder="Nhập tiêu đề">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="description">Trích
                                                        yếu</label>
                                                    <textarea class="form-control" rows="4"
                                                              placeholder="Nhập trích yếu của bài viết"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Ảnh đại diện bài viết</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="feature_img"
                                                               name="feature_img">
                                                        <label class="custom-file-label" for="feature_img">Choose profile
                                                            pic</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="d-block" for="validationBio">Nội dung</label>
                                                    <textarea class="form-control" id="content"
                                                              name="content" rows="10"></textarea>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary" name="submit"
                                                                value="Submit">Lưu bài viết
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- invoice action  -->
                    <div class="col-xl-3 col-md-4 col-12">
                        <div class="card invoice-action-wrapper shadow-none border">
                            <div class="card-body">
                                <div class="invoice-action-btn mb-1">
                                    <a href="#" class="btn btn-primary btn-block invoice-send-btn">
                                        <i class="bx bx-send"></i>
                                        <span>Đăng ngay</span>
                                    </a>
                                </div>
                                <div class="invoice-action-btn mb-1">
                                    <button class="btn btn-light-danger btn-block">
                                        <span>Xóa bài viết</span>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="invoice-payment">
                            <div class="invoice-payment-option mb-2">
                                <p>Thể loại bài viết</p>

                            </div>
                            <div class="invoice-terms">
                                <div class="d-flex justify-content-between py-50">
                                    <span class="invoice-terms-title">Tin tức</span>
                                    <div class="custom-control custom-switch custom-switch-glow">
                                        <input type="checkbox" class="custom-control-input" id="paymentstub">
                                        <label class="custom-control-label" for="paymentstub">
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-50">
                                    <span class="invoice-terms-title">Sự kiện</span>
                                    <div class="custom-control custom-switch custom-switch-glow">
                                        <input type="checkbox" class="custom-control-input" id="paymentstub">
                                        <label class="custom-control-label" for="paymentstub">
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection

@section('script')
    @parent
    <!-- BEGIN: Page JS-->
    <script src="backend/app-assets/js/scripts/pages/app-invoice.js"></script>
    <script src="backend/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="backend/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="backend/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
        CKEDITOR.replace( 'content', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

        } );
    </script>
    @include('ckfinder::setup')
    <!-- END: Page JS-->
@endsection
