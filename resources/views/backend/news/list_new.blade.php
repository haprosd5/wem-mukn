@extends('backend.layout.index')
@section('title')
    Trang quản trị game
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
                                    <button class="btn border dropdown-toggle mr-2" type="button"
                                            id="invoice-options-btn" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Options
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right"
                                         aria-labelledby="invoice-options-btn">
                                        <a class="dropdown-item" href="javascript:;">Delete</a>
                                        <a class="dropdown-item" href="javascript:;">Edit</a>
                                        <a class="dropdown-item" href="javascript:;">View</a>
                                        <a class="dropdown-item" href="javascript:;">Send</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <table class="table invoice-data-table dt-responsive nowrap dataTable no-footer dtr-column"
                               style="width: 100%;" id="DataTables_Table_0" role="grid">
                            <thead>
                            <tr role="row">
                                <th class="control sorting_disabled" rowspan="1" colspan="1"
                                    style="width: 0px; display: none;" aria-label=""></th>
                                <th class="dt-checkboxes-cell dt-checkboxes-select-all sorting_disabled" tabindex="0"
                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 1px;"
                                    data-col="1" aria-label=""><input type="checkbox"></th>
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 144px;" aria-sort="ascending" aria-label="
                                        Invoice#
                                    : activate to sort column descending">
                                    <span class="align-middle">Invoice#</span>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 144px;"
                                    aria-label="Amount: activate to sort column ascending">Amount
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 105px;"
                                    aria-label="Date: activate to sort column ascending">Date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 248px;"
                                    aria-label="Customer: activate to sort column ascending">Customer
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 153px;"
                                    aria-label="Tags: activate to sort column ascending">Tags
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 216px;"
                                    aria-label="Status: activate to sort column ascending">Status
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 116px;"
                                    aria-label="Action: activate to sort column ascending">Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr role="row" class="odd">
                                <td class=" control" tabindex="0" style="display: none;"></td>
                                <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes"></td>
                                <td class="sorting_1">
                                    <a href="app-invoice.html">INV-00123</a>
                                </td>
                                <td><span class="invoice-amount">$15,900</span></td>
                                <td>
                                    <small class="text-muted">23-07-19</small>
                                </td>
                                <td><span class="invoice-customer">Toyota Motor</span></td>
                                <td>
                                    <span class="bullet bullet-primary bullet-sm"></span>
                                    <small class="text-muted">Car</small>
                                </td>
                                <td><span class="badge badge-light-success badge-pill">PAID</span></td>
                                <td>
                                    <div class="invoice-action">
                                        <a href="app-invoice.html" class="invoice-action-view mr-1">
                                            <i class="bx bx-show-alt"></i>
                                        </a>
                                        <a href="app-invoice-edit.html" class="invoice-action-edit cursor-pointer">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="bottom">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"
                                                                            data-dt-idx="0" tabindex="0"
                                                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                                                                    aria-controls="DataTables_Table_0"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                                                              aria-controls="DataTables_Table_0"
                                                                              data-dt-idx="2" tabindex="0"
                                                                              class="page-link">2</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
                                                                                                               aria-controls="DataTables_Table_0"
                                                                                                               data-dt-idx="3"
                                                                                                               tabindex="0"
                                                                                                               class="page-link">Next</a>
                                    </li>
                                </ul>
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
    <script src="backend/app-assets/js/scripts/pages/app-todo.js"></script>

    <!-- END: Page JS-->
@endsection
