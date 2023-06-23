@extends('admin.layouts.admin')

@section('script')
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/form_layouts.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/pages/animations_css3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
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

            <ul class="breadcrumb-elements">
                <li><a href="#"><i class="icon-comment-discussion position-left"></i>پشتیبانی</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        تنظیمات
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> لیست گروه کاربری ها</h5>
                <div class="heading-elements">
                    <a href="{{ route('admin.roles.create') }}" type="button" class="btn btn-success "><i
                            class=" icon-stack position-left"></i> افزودن گروه کاربری </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th> نام </th>
                            <th> نام نمایشی </th>
                            <th class="text-center" style="width: 30px">نمایش</th>
                            <th class="text-center" style="width: 30px">ویرایش</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->display_name }}</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="{{ route('admin.roles.show', ['role' => $role->id]) }}" type="button"
                                                class="btn border-info text-info btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                    class="icon-screen-full text-info-600"></i></a>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="{{ route('admin.roles.edit', ['role' => $role->id]) }}" type="button"
                                                class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                    class="icon-task text-success-600"></i></a>
                                        </li>
                                    </ul>
                                </td>

                                {{-- <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a class="btn btn-sm btn-outline-info mr-3"
                                                        href="{{ route('admin.roles.edit', ['role' => $role->id]) }}">
                                                        ویرایش </a></i>
                                                <li><a class="btn btn-sm btn-outline-info mr-3"
                                                        href="{{ route('admin.roles.show', ['role' => $role->id]) }}">
                                                        نمایش </a></i>
                                            </ul>
                                        </li>
                                    </ul> --}}
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
