@extends('user.layout.index')
@section('link')
@endsection

@section('container')
<div class="container">
    <div class="row mb-3">
        <div class="col-lg-12 col-md-12 mb-lg-0">
            <!--Card-->
            <div class="card testimonial-card blue-gradient border-0">
                <!--Background color-->
                <div class="card-up"></div>
                <!--Avatar-->
                <div class="avatar mx-auto white">
                    <img id="avatar" src="/assets/img/avatar_2x.png" class="rounded-circle img-fluid">
                </div>
                <div class="card-body text-center">
                    <!--Name-->
                    <div class="verifyShow" id="verifyShow"></div>
                    <h4 class="font-weight-bold mb-4 fullname_txt text-light">{{Auth::user()->name}}</h4>
                    <button onclick="attendance();" type="button" class="btn btn-info ">
                        Điểm danh <span class="badge badge-warning">nhận <i class="fas fa-gem"></i> Gem</span>
                    </button>
                    <a href="/user/quick-play-tramyeu" type="button" class="btn btn-warning ">
                        Vào game
                    </a>
                </div>
            </div>
            <!--Card-->
        </div>
    </div>
    <div class="content">
        <div class="row ">
            <div class="col mb-2 masthead">
                <div class="px-4 masthead-cards">
                    <div class="d-flex">
                        <a href="user/payment" class="w-50 pr-3 pb-4">
                            <div class="card border-0 border-bottom-red shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="red fas fa-wallet fa-4x my-2"></i>
                                    </div>
                                    Nạp xu
                                </div>
                            </div>
                        </a>
                        <a href="exchange" class="w-50 pl-3 pb-4">
                            <div class="card border-0 border-bottom-blue shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="blue fas fa-exchange-alt fa-4x my-2"></i>
                                    </div>
                                    Chuyển vào game
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex">
                        <a href="user/giftcode" class="w-50 pl-3 pb-4">
                            <div class="card border-0 border-bottom-green shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="green fa fa-4x fa-gift my-2"></i>
                                    </div>
                                    Giftcode
                                </div>
                            </div>
                        </a>
                        <a href="user/vongquay" class="w-50 pl-3 pb-4">
                            <div class="card border-0 border-bottom-nonebit shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="nonebit fas fa-dharmachakra fa-4x my-2"></i>
                                    </div>
                                    Vòng quay may mắn
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="shape"></div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-first">
                <!-- left bar -->
                @include("user.layout.leftbar")
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection