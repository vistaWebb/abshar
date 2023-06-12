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
    {{--
	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('/js/core/app.js')}}"></script>
	<!-- /theme JS files --> --}}

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

                    <!-- Simple login form -->

                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                                </div>
                                <h5 class="content-group">Login to your account <small class="display-block">Enter your
                                        credentials below</small></h5>
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" class="form-control"
                                    placeholder="name" name="name" required="required" value="{{ old('name') }}">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                                @error('name')
                                    <div class="input-error-validation">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="email" class="form-control" placeholder="email" name="email"
                                    required="required" value="{{ old('email') }}">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                                @error('email')
                                <div class="input-error-validation">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required="required"  value="{{ old('password') }}">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                                @error('password')
                                <div class="input-error-validation">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control" placeholder="password_confirmation"
                                    name="password_confirmation" required="required" value="{{ old('password_confirmation') }}">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                                @error('password_confirmation')
                                <div class="input-error-validation">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sign in <i
                                        class="icon-circle-left2 position-right"></i></button>
                            </div>

                            <div class="text-center">
                                <a href="login_password_recover.html">Forgot password?</a>
                            </div>
                        </div>
                    </form>
                    <!-- /simple login form -->

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

</body>

<!-- Mirrored from www.mwhtml.ir/limitless/layout_1/RTL/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jan 2022 04:52:01 GMT -->

</html>
