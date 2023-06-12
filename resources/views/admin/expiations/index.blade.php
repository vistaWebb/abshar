@extends('admin.layouts.admin')

@section('script')
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/form_layouts.js') }}"></script>
    <!-- /theme JS files -->
@endsection

@section('title')
    list of expiation
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> لیست کفاره ها </a></li>
                <li class="active">list of expiations</li>
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


                <!-- Sales stats -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">وضعیت صندوق کفاره </h6>

                    </div>

                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i
                                            class="icon-calendar5 position-left text-slate"></i> {{number_format($sumWeek)}} تومان
                                        </h5>
                                    <span class="text-muted text-size-small">کمک های هفته اخیر </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i
                                            class="icon-calendar52 position-left text-slate"></i> {{number_format($sumMonth)}} تومان
                                    </h5>
                                    <span class="text-muted text-size-small"> کمک های ماه اخیر</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i
                                            class="icon-calendar52 position-left text-slate"></i> {{number_format($sumYear)}} تومان
                                    </h5>
                                    <span class="text-muted text-size-small"> کمک های سال اخیر</span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"><i
                                            class="icon-cash3 position-left text-slate"></i> {{number_format($totalAmount)}} تومان
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
                <h5 class="panel-title"> لیست کفاره ها</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> نام خیّر</th>
                            <th> مبلغ </th>
                            <th> ref_id</th>
                            <th>تاریخ واریزی </th>
                            <th>توضیحات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expiations as $expiation)
                            <tr>
                                <td>{{ $expiation->user->name }}</td>
                                <td>{{ number_format($expiation->amount) }}</td>
                                <td>{{ $expiation->ref_id }}</td>
                                <td>{{ verta($expiation->created_at) }}</td>
                                <td>{{ $expiation->description }}</td>
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
