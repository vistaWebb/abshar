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
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/pages/form_layouts.js')}}"></script>
    <!-- /theme JS files -->
    @yield('script')

</head>

<body class="login-container">

    <!-- اصلی navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="index-2.html"><img src="assets/images/logo_light.png" alt=""></a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to
                            website</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact
                            admin</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-cog3"></i>
                        <span class="visible-xs-inline-block position-right"> Options</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- اصلی content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">


                    <!-- Vertical form options -->
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Basic layout-->
                            <form action="{{ route('home.payment') }}" method="POST">
                                @csrf
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"> صفحه بررسی پرداخت</h5>
                                    </div>

                                    <div class="panel-body">
                                        <div class="form-group col-md-6">
                                            <label>نام :</label>
                                            <input name="f_name" type="text" class="form-control"
                                                placeholder=" نام خود را وارد کنید ">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>نام خانوادگی:</label>
                                            <input name="l_name" type="text" class="form-control"
                                                placeholder="نام خانوادگی خود را وارد کنید">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>ایمیل:</label>
                                            <input name="email" type="email" class="form-control"
                                                placeholder="ایمیل خود را وارد کنید">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>شماره تلفن همراه <span class="text-danger">*</span> :</label>
                                            <input name="phone" type="text" class="form-control"
                                                placeholder="شماره تلفن خود را وارد کنید">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>موضوع اهدا :</label>
                                            <select name="category_id" class="select">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>انتخاب دونیت  :</label>
                                            <select name="donation_id" class="select">
                                                <option></option>
                                                @foreach ($donations as $donation)
                                                <option value="{{ $donation->id }}">{{ $donation->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>مبلغ اهدا <span class="text-danger">*</span>  :</label>
                                            <input name="amount" type="text" class="form-control"
                                                placeholder="میزان مبلغ نباید کمتر از 1000تومان باشد">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>درگاه پرداخت :</label>
                                            <select name="gateway_name" class="select">
                                                <option value="zarinpal"> درگاه زرین پال</option>
                                                <option value="pay"> درگاه پی</option>
                                                <option value="melli">بانک ملی</option>
                                                <option value="mellat">بانک ملت</option>
                                                <option value="saman">بانک سامان</option>
                                                <option value="parsian">بانک پارسیان</option>
                                            </select>
                                        </div>
                                        <div class="text-right col-md-12">
                                            <button type="submit" class="btn btn-primary">پرداخت  <i
                                                    class="icon-arrow-left13 position-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /basic layout -->

                        </div>

                    </div>
                    <!-- /vertical form options -->

                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank">
                            09336344816</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    @include('sweetalert::alert')

</body>

<!-- Mirrored from www.mwhtml.ir/limitless/layout_1/RTL/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jan 2022 04:52:01 GMT -->

</html>
