<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <base href="{{asset('')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
          content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    @include('backend.layout.link')
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky fixed-footer  " data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
@include('backend.layout.header')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('backend.layout.sidebar')
<!-- END: Main Menu-->


<div class="app-content content">
    <div class="sidenav-overlay"></div>
    <!-- BEGIN: Content-->
@yield('container')
<!-- END: Content-->

</div>

<div class="drag-target"></div>

<!-- BEGIN: Footer-->
@include('backend.layout.foot')
<!-- END: Footer-->

@include('backend.layout.script')
<!-- BEGIN: Vendor JS-->

<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
