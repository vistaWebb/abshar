@extends('admin.layouts.admin')

@section('script')
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/tables/footable/footable.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/table_responsive.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/pages/animations_css3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <!-- /theme JS files -->
    <!-- select input JS files -->
    <script type="text/javascript" src="{{ asset('/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/selects/select2.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/form_select2.js') }}"></script>
    <!-- /theme JS files -->

    <!-- multiselect form JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/notifications/pnotify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/form_multiselect.js') }}"></script>
    <!-- /theme JS files -->
@endsection

@section('title')
    show donation
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> نمایش دونیت </a></li>
                <li class="active">show donation</li>
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

                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title"> نمایش دونیت </h5>
                    </div>


                    <div class="panel-body">
                        <div class="col-md-12">
                            <div
                                class="thumbnail p-100 panel {{ $donation->remaining_amount ? 'panel-success' : 'panel-warning' }} panel-bordered ">
                                <div class="thumb">
                                    <img src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $donation->description) }}"
                                        alt="">
                                    <div class="caption-overflow">
                                        <span>
                                            <a href="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $donation->description) }}"
                                                class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i
                                                    class="icon-plus2"></i></a>
                                            <a href="{{ route('admin.donations.show', ['donation' => $donation->id]) }}"
                                                class="btn bg-success-400 btn-icon btn-xs"><i class="icon-link"></i></a>
                                        </span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h2 class="text-semibold no-margin">
                                        نام دونیت : {{ $donation->name }}
                                    </h2>
                                    <h5>
                                          دسته بندی : {{$donation->category->name}}
                                    </h5>
                                    <h5>
                                        کل مبلغ : {{ number_format($donation->total_amount) }}
                                    </h5>
                                    <h5>
                                         کی شروع شده؟  {{ verta($donation->start_date) }}
                                    </h5>
                                    <h5>
                                        تا کی وقت داره؟  {{ verta($donation->end_date) }}
                                    </h5>
                                    <h5>
                                        چقدر جمع شده؟ : {{ number_format($donation->collected_amount) }}
                                    </h5>
                                    <h5>
                                        چقدر کم داره؟ : {{ number_format($donation->remaining_amount) }}
                                    </h5>
                                    <h5>
                                          وضعیت : {{ $donation->is_active }}
                                    </h5>
                                    {{-- <h5>
                                          توضیحات : {{ $donation->description }}
                                    </h5> --}}
                                    {{-- <h5>
                                        چقدر کم داره؟ : {{ number_format($donation->remaining_amount) }}
                                    </h5> --}}

                                    <ul class="icons-list mt-20">
                                        <li> <a href="{{ route('admin.donations.index') }}"
                                                type="button"
                                                class="btn {{ $donation->remaining_amount ? 'text-success-600 border-success-600' : 'text-warning-600 border-warning-600' }}  btn-flat btn-rounded btn-icon btn-xs"><span
                                                    class="{{ $donation->remaining_amount ? 'text-success-600' : 'text-warning-600' }}">بازگشت</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /basic layout -->

            </div>


        </div>
        <!-- /vertical form options -->


        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank">09336344816 </a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
