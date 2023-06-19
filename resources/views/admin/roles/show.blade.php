@extends('admin.layouts.admin')

@section('script')
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/form_layouts.js') }}"></script>

	<script type="text/javascript" src="{{asset('/js/pages/animations_css3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/core/app.js')}}"></script>
    <!-- /theme JS files -->
@endsection

@section('title')
    list of role
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> لیست گروه کاربری ها </a></li>
                <li class="active">list of roles</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> مشخصات گروه کاربری </h5>
            </div>
            <div class="panel panel-flat">
                <div class="panel-body">
                    <div class="form-group col-md-6">
                        <label>نام  : </label>
                        <input name="name" type="text" class="form-control"
                        value="{{ $role->name }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>نام نمایشی  : </label>
                        <input name="display_name" type="text" class="form-control"
                        value="{{ $role->display_name }}">
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn bg-success btn-labeled"><b><i
                                    class="icon-reading"></i></b> لیست مجوزها</button>

                        <div class="panel panel-body border-top-success text-center">
                            @foreach ($role->permissions as $permission)
                            <div class="col-md-3">
                                <span>{{$permission->display_name}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /basic responsive table -->
        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank"> 09336344816</a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
