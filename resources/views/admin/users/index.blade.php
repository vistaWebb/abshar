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

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title">لیست کاربران </h6>
                    <div class="heading-elements ">
                        <form class="heading-form" action="{{ route('admin.search.user') }}">
                            <div class="form-group ">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control"
                                        placeholder="دنبال کی میگردی؟">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-success btn-icon"><i
                                                class=" icon-spinner3"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel-body">
                    @foreach ($users as $user)
                        <div class="col-md-4">
                            <div class="panel {{ $user->getRawOriginal('status') ? 'panel-success' : 'panel-warning' }} panel-bordered ">
                                <div class="panel-heading">
                                    <h6 class="panel-title">
                                        {{ $user->f_name . $user->l_name ? $user->f_name . ' ' . $user->l_name : $user->name }}
                                    </h6>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="close"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-body">
                                                <h6 class="media-heading">{{ $user->name }}</h6>
                                                شماره تماس: {{ $user->phone }}
                                            </div>

                                            <div class="media-right">
                                                <a href="{{ route('admin.users.show', ['user' => $user->id]) }}"
                                                    type="button"
                                                    class="btn {{$user->getRawOriginal('status') ? 'btn-success' : 'btn-warning'}} btn-icon heading-btn pull-right"><i
                                                        class="icon-screen-full"></i></a>

                                            </div>
                                            <div class="media-right">
                                                <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                                                    type="button"
                                                    class="btn {{$user->getRawOriginal('status') ? 'btn-success' : 'btn-warning'}} btn-icon heading-btn pull-right"><i
                                                        class="icon-task"></i></a>
                                            </div>

                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

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
