@extends('backend.layout.index')
@section('title')
    Trang quản lý tất cả bài viết
@endsection
@section('link')
    @parent
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="backend/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="backend/app-assets/css/pages/app-file-manager.css">
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
            <!-- invoice list -->
            <section class="invoice-list-wrapper">
                <!-- create invoice button-->
                <div class="invoice-create-btn mb-1">
                    <a href="admin/news/add-new" class="btn btn-primary glow invoice-create" role="button"
                       aria-pressed="true">Thêm bài viết</a>
                       @if(session()->has('success'))
                       <div class="alert-success mt-2" role="alert">
                           {{ session()->get('success') }}
                       </div>
                   @endif
                </div>
                <!-- Options and filter dropdown button-->
                <div class="action-dropdown-btn d-none">


                </div>
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="top d-flex flex-wrap">
                            <div class="action-filters flex-grow-1">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">

                                    <input
                                            type="search" class="form-control form-control-range"
                                            placeholder="Search Invoice" aria-controls="DataTables_Table_0">

                                </div>
                            </div>
                            <div class="actions action-btns d-flex align-items-center ml-2">

                                <div class="dropdown invoice-options">
                                    <button class="btn border mr-2" type="button"
                                            id="invoice-options-btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Tìm kiếm
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Ngày viết</th>
                                    <th>Trích yếu</th>
                                    <th>Trạng thái</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($list_news)
                                    @foreach ($list_news as $item)
                                        <tr>
                                            <td >{{ $item->id }}</td>
                                            <td class="text-bold-200" style="width: 400px;">{{ $item->title }}</td>
                                            <td style="width: 248px;">{{ $item->updated_at }}</td>
                                            <td class="text-bold-200" style="width: 700px;">{{ $item->descriptions
                                            }}</td>
                                            <td style="width: 248px;">{{ ($item->status == 0) ? 'Chưa đăng' : 'Đã đăng' }}</td>
                                            <td style="width: 248px;">
                                                <a href="admin/news/delete-new/{{ $item->id }}">
                                                    <i class="badge-circle badge-circle-light-danger bx bx-trash
                                            font-medium-1"></i>
                                                </a>
                                                <a href="admin/news/edit-new/{{ $item->id }}">
                                                    <i class="badge-circle badge-circle-light-info bx bx-edit ml-1
                                            font-medium-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                        <div class="bottom">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                {{ $list_news->render('vendor.pagination') }}
                            </div>
                        </div>
                        @endisset
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('script')
    @parent
    <!-- BEGIN: Page JS-->
    <script src="backend/app-assets/js/scripts/pages/app-todo.js"></script>

    <!-- END: Page JS-->
@endsection
