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
    list of fitrah
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> لیست فطریه ها </a></li>
                <li class="active">list of fitrahs</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">


        <!-- Sales stats -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">وضعیت صندوق فطریه </h6>

            </div>

            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="content-group">
                            <h5 class="text-semibold no-margin">
                                <a href="#"
                                    class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-xs"><i
                                        class="icon-calendar5"></i></a>
                                <span class="text-success-600">
                                    {{ number_format($sumWeek) }}</span>
                            </h5>
                            <span class="text-muted text-size-small">کمک های هفته اخیر </span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="content-group">
                            <h5 class="text-semibold no-margin">
                                <a href="#"
                                    class="btn border-indigo text-indigo btn-flat btn-rounded btn-icon btn-xs"><i
                                        class="icon-calendar52"></i></a>
                                <span class="text-success-600">
                                    {{ number_format($sumMonth) }}</span>
                            </h5>
                            <span class="text-muted text-size-small"> کمک های ماه اخیر</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="content-group">
                            <h5 class="text-semibold no-margin">
                                <a href="#"
                                    class="btn border-danger-800 text-danger-800 btn-flat btn-rounded btn-icon btn-xs"><i
                                        class="icon-calendar3"></i></a>
                                <span class="text-success-600">
                                    {{ number_format($sumYear) }}</span>
                            </h5>
                            <span class="text-muted text-size-small"> کمک های سال اخیر</span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="content-group">
                            <h5 class="text-semibold no-margin">
                                <a href="#"
                                    class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs"><i
                                        class="icon-cash3"></i></a>
                                <span class="text-success-600">
                                    {{ number_format($totalAmount) }}</span>
                            </h5>
                            <span class="text-muted text-size-small"> مبلغ کل</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chart content-group-sm" id="app_sales"></div>
            <div class="chart" id="monthly-sales-stats"></div>
        </div>
        <!-- /sales stats -->

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> لیست فطریه ها</h5>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> نام خیّر</th>
                            <th> مبلغ </th>
                            <th>تاریخ واریزی </th>
                            <th>توضیحات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fitrahs as $fitrah)
                            <tr>
                                <td>{{ $fitrah->f_name ? $fitrah->f_name : $fitrah->phone }}</td>
                                <td>
                                    <span class="text-success-600">
                                        {{ number_format($fitrah->amount) }}</span>
                                </td>
                                <td>{{ verta($fitrah->created_at) }}</td>
                                <td>{{ $fitrah->description }}</td>
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
