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
    list of permission
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> لیست مجوز ها </a></li>
                <li class="active">list of permissions</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> لیست مجوز ها</h5>
                <div class="heading-elements">
                    <a href="{{ route('admin.permissions.create') }}" type="button" class="btn btn-success "><i
                            class=" icon-stack position-left"></i> افزودن مجوز </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> نام </th>
                            <th> نام نمایشی </th>
                            <th class="text-center" style="width: 10px;">ویرایش </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->display_name }}</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="{{ route('admin.permissions.edit', ['permission' => $permission->id]) }}"
                                                type="button"
                                                class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                    class="icon-pencil7 text-success-600"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
