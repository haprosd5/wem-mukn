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
                    <h5 class="content-header-title float-left pr-1 mb-0">List giftcode</h5>
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
                    
                        <form action="admin/giftcode/create-giftcode" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h4 class="card-title primary">Thêm gift code</h4>
                                    </div>
                                    <div class="card-body">
                                      <div class="row">
            
                                        <div class="col-md-4 col-sm-6">
                                            <label for="floating-label1">GiftCode</label>
                                          <fieldset class="form-label-group">
                                            <input type="text" class="form-control" id="code" name="code" placeholder="Nhập giftcode mới">
                                            @error('code')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                          </fieldset>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-6">
                                            <label for="floating-label1">Giá tiền Giftcode</label>
                                            <fieldset class="form-label-group">
                                              <input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá giftcode">
                                              @error('price')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label for="floating-label1">Số lượng</label>
                                            <fieldset class="form-label-group">
                                              <input type="text" class="form-control" id="number" name="number" placeholder="Nhập số lượng">
                                              @error('number')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                            </fieldset>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary glow invoice-create" 
                                               aria-pressed="true">Đồng ý thêm</button>
                                               @if(session()->has('success'))
                                               <div class="alert-success mt-2" role="alert">
                                                   {{ session()->get('success') }}
                                               </div>
                                           @endif
                                        </div>
                                    </div>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                        </form>
                    
                    <div class="clear"></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Price</th>
                                <th>Number</th>
                                <th>User</th>
                                <th>Trạng thái</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @isset($list_giftcode)
                                @foreach ($list_giftcode as $item)
                                    <tr>
                                        <td >{{ $item->id }}</td>
                                        <td class="text-bold-200" style="width: 400px;">{{ $item->code }}</td>
                                        <td style="width: 248px;">{{ $item->price }}</td>
                                        <td class="text-bold-200" style="width: 700px;">{{ $item->number}}</td>
                                        <td style="width: 248px;">{{ $item->name }}</td>
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
                            {{-- {{ $list_giftcode->render('vendor.pagination') }} --}}
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
