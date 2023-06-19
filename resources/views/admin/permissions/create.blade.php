@extends('admin.layouts.admin')

@section('script')
  	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('/js/plugins/tables/footable/footable.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/pages/table_responsive.js')}}"></script>

	<script type="text/javascript" src="{{asset('/js/pages/animations_css3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/core/app.js')}}"></script>
	<!-- /theme JS files -->
    <!-- select input JS files -->
    <script type="text/javascript" src="{{ asset('/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/selects/select2.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/form_select2.js') }}"></script>
    <!-- /theme JS files -->

@endsection

@section('title')
    create permission
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> افزودن دسته بندی </a></li>
                <li class="active">create permission</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">
                <!-- Basic layout-->
                <form action="{{ route('admin.permissions.store') }}" method="POST">
                    @csrf
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title"> ایجاد مجوز</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-6">
                                <label>نام   <span class="text-danger">*</span> : </label>
                                <input name="name" type="text" class="form-control" placeholder="نام لاتین مجوز را وارد کنید">
                            </div>
                            <div class="form-group col-md-6">
                                <label>نام نمایشی <span class="text-danger">*</span> : </label>
                                <input name="display_name" type="text" class="form-control" placeholder="نام فارسی مجوز را وارد کنید" >
                            </div>
                            <div class="text-right ">
                                <button type="submit" class="btn btn-primary">ارسال <i
                                        class="icon-arrow-left13 position-right"></i>
                                </button>
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
            &copy; 2023. <a href="#">VistaWebb</a> by <a
                href="#"
                target="_blank"> 09336344816</a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection


