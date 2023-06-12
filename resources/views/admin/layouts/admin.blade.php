<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from www.mwhtml.ir/limitless/layout_1/RTL/default/datatable_advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jan 2022 04:57:39 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>abshar atefeha _ @yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    @yield('script')

</head>

<body>

    <!-- اصلی navbar -->
    @include('admin.sections.navbar')
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- اصلی sidebar -->
            @include('admin.sections.sidebar')
            <!-- /main sidebar -->


            <!-- اصلی content -->
            <div class="content-wrapper">

               @yield('content')

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

<!-- Mirrored from www.mwhtml.ir/limitless/layout_1/RTL/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jan 2022 04:52:01 GMT -->

</html>
