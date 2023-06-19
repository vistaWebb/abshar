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
    index user
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> لیست دسته بندی دونیت ها </a></li>
                <li class="active">list of users</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> لیست کاربران</h5>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> ردیف</th>
                            <th> نام</th>
                            <th> ایمیل</th>
                            <th>وضعیت</th>
                            <th class="text-center" style="width: 30px;"><i class="icon-menu-open2"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>
                                    {{ $users->firstItem() + $key }}
                                </td>
                                <td> {{ $user->name }}</td>
                                <td> {{ $user->email }}</td>
                                <td><span
                                        class="{{ $user->getRawOriginal('status') ? 'label label-success' : 'label label-default' }}">{{ $user->status }}</span>
                                </td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a class="btn btn-sm btn-outline-info mr-3"
                                                        href="{{ route('admin.users.edit', ['user' => $user->id]) }}">
                                                        ویرایش </a></i>
                                                <li><a class="btn btn-sm btn-outline-info mr-3"
                                                        href="{{ route('admin.users.show', ['user' => $user->id]) }}">
                                                        نمایش </a></i>
                                            </ul>
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
            &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank">09336344816 </a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
