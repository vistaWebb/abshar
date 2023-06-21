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
                        <div class="form-group col-md-3">
                            <label>نام دونیت : </label>
                            <input name="name" type="text" class="form-control" value="{{ $donation->name }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>دسته بندی : </label>
                            <input name="email" type="email" class="form-control"
                                value="{{ $donation->category->name }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label> تاریخ شروع : </label>
                            <input name="email" type="email" class="form-control"
                                value="{{ verta($donation->start_date) }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label> تاریخ اتمام : </label>
                            <input name="email" type="email" class="form-control"
                                value="{{ verta($donation->end_date) }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label> مبلغ کل : </label>
                            <input name="email" type="email" class="form-control"
                                value="{{ number_format($donation->total_amount) }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label> مبلغ جمع آوری شده : </label>
                            <input name="email" type="email" class="form-control"
                                value="{{ number_format($donation->collected_amount) }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label> مبلغ باقیمانده : </label>
                            <input name="email" type="email" class="form-control"
                                value="{{ number_format($donation->remaining_amount) }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="display-block">وضعیت:</label>

                            <label class="radio-inline">
                                <input type="radio" class="styled" name="is_active" value="1"
                                    {{ $donation->getRawOriginal('is_active') ? 'checked="checked"' : '' }}>
                                فعال
                            </label>

                            <label class="radio-inline">
                                <input type="radio" class="styled" name="is_active" value="0"
                                    {{ $donation->getRawOriginal('is_active') ? '' : 'checked="checked"' }}>
                                غیر فعال
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label> {{ $donation->description }}</label>
                        </div>
                        <div class="text-right ">
                            <a href="{{route('admin.donations.index')}}"  class="btn btn-success">بازگشت <i
                                    class="icon-arrow-left13 position-right"></i>
                            </a>
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
