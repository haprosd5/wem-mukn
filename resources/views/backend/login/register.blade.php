@extends('backend.login.master')
@section('content')
    <div class="card bg-authentication mb-0">
        <div class="row m-0">
            <!-- register section left -->
            <div class="col-md-6 col-12 px-0">
                <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                    <div class="card-header pb-1">
                        <div class="card-title">
                            <h4 class="text-center mb-2">Sign Up</h4>
                        </div>
                    </div>
                    <div class="text-center">
                        <p>
                            <small> Please enter your details to sign up and be part of our great community</small>
                        </p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{url('admin/register')}}" method="post">
{{--                                {{url('admin/register')}}--}}
                                @csrf
                                {{--<div class="form-row">
                                    <div class="form-group col-md-6 mb-50">
                                        <label for="inputfirstname4">first name</label>
                                        <input type="text" class="form-control" id="inputfirstname4"
                                               placeholder="First name">
                                    </div>
                                    <div class="form-group col-md-6 mb-50">
                                        <label for="inputlastname4">last name</label>
                                        <input type="text" class="form-control" id="inputlastname4"
                                               placeholder="Last name">
                                    </div>
                                </div>--}}
                                <div class="form-group mb-50">
                                    <label class="text-bold-600" for="exampleInputUsername1">username</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Username"></div>
                                <div class="form-group mb-50">
                                    <label class="text-bold-600" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Email address"></div>
                                <div class="form-group mb-2">
                                    <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password"
                                           id="password"
                                           placeholder="Password">
                                </div>
                                <div class="form-group mb-2">
                                    <label class="text-bold-600" for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                           id="password_confirmation"
                                           placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary glow position-relative w-100">SIGN UP<i
                                            id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <small class="mr-25">Already have an account?</small>
                                <a href="admin/login">
                                    <small>Sign in</small>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- image section right -->
            <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                <img class="img-fluid" src="backend/app-assets/images/pages/register.png" alt="branding logo">
            </div>
        </div>
    </div>
@endsection