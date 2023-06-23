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
    list of donation
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> لیست دونیت ها </a></li>
                <li class="active">list of donations</li>
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
                    <h6 class="panel-title">لیست دونیت ها </h6>
                    <div class="heading-elements ">
                        <ul class="heading-thumbnails pull-right">
                            <li>
                                <form class="heading-form" action="{{ route('admin.search.donation') }}">
                                    <div class="form-group ">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control"
                                                placeholder="دنبال چی میگردی؟">
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-success btn-icon"><i
                                                        class=" icon-spinner3"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li>
                                <a href="{{ route('admin.donations.create') }}" type="button" class="btn btn-add"><i
                                        class=" icon-stack position-left"></i> افزودن دونیت </a>
                            </li>
                            <ul>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                @foreach ($donations as $donation)
                    <div class="col-lg-3 col-md-6">
                        <div
                            class="thumbnail no-padding panel {{ $donation->remaining_amount ? 'panel-success' : 'panel-warning' }} panel-bordered ">
                            <div class="thumb">
                                <img src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $donation->description) }}"
                                    alt="">
                                <div class="caption-overflow">
                                    <span>
                                        <a href="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $donation->description) }}"
                                            class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i
                                                class="icon-plus2"></i></a>
                                        <a href="{{ route('admin.donations.show', ['donation' => $donation->id]) }}" class="btn bg-success-400 btn-icon btn-xs"><i
                                                class="icon-link"></i></a>
                                    </span>
                                </div>
                            </div>

                            <div class="caption text-center">
                                <h6 class="text-semibold no-margin">
                                    {{ $donation->name }}
                                    <small class="display-block">
                                        کل مبلغ : {{ number_format($donation->total_amount) }}
                                    </small>
                                    <small class="display-block">
                                     کمک شده : {{ number_format($donation->collected_amount) }}
                                    </small>
                                    <small class="display-block">
                                         باقیمانده : {{ number_format($donation->remaining_amount) }}
                                    </small>
                                </h6>
                                <ul class="icons-list mt-20">
                                    <li> <a href="{{ route('admin.donations.show', ['donation' => $donation->id]) }}"
                                            type="button"
                                            class="btn {{ $donation->remaining_amount ? 'text-success-600 border-success-600' : 'text-warning-600 border-warning-600' }}  btn-flat btn-rounded btn-icon btn-xs"><span class="{{ $donation->remaining_amount ? 'text-success-600' : 'text-warning-600' }}"><i
                                                class="icon-screen-full"></i></a>
                                    </li>
                                    <li> <a href="{{ route('admin.donations.edit', ['donation' => $donation->id]) }}"
                                            type="button"
                                            class="btn {{ $donation->remaining_amount ? 'text-success-600 border-success-600' : 'text-warning-600 border-warning-600' }}  btn-flat btn-rounded btn-icon btn-xs"><span class=" {{ $donation->remaining_amount ? 'text-success-600' : 'text-warning-600' }}"><i
                                                class="icon-task"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div>
                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank"> 09336344816</a>
                    </div>
                    <!-- /footer -->
                </div>
                <!-- /content area -->
            </div>
        @endsection
