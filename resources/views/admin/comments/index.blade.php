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
    list of comment
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> لیست کامنت ها </a></li>
                <li class="active">list of comments</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> لیست کامنت ها</h5>
            </div>

            <!-- Tabs content -->
            <div class="tab-content panel-body">
                <div class="tab-pane active fade in">
                    <ul class="media-list">
                        @foreach ($comments as $comment)
                            <li class="media">
                                <div class="media-left">
                                    <img src="{{ asset('/images/placeholder.jpg') }}" class="img-circle img-xs"
                                        alt="">
                                    <span class="badge bg-danger-400 media-badge">2</span>
                                </div>

                                <div class="media-body">
                                    <a href="#">
                                        {{ $comment->subject }}
                                        <span class="media-annotation pull-right">{{ verta($comment->created_at) }}</span>
                                    </a>

                                    <span class="display-block text-muted">{{ $comment->text }}</span>
                                    <span class="display-block text-muted">{{ $comment->name }}</span>

                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <!-- /tabs content -->

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
