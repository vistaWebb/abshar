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
            <div class="col-lg-3 ">
                <ul class="list-inline text-center">
                    <li>
                        <div class="stats-icon bg-red-2">
                            <i class="stats-icon-i icon-cash lh-0"></i>
                        </div>
                    </li>
                    <li class="text-left">
                        <div class="text-semibold">هفته اخیر  </div>
                        <div class="text-muted"><span class="text-success-600">
                                    {{ number_format($sumWeek) }}</span></div>
                    </li>
                </ul>

                <div class="col-lg-10 col-lg-offset-1">
                    <div class="chart content-group" id="new-sessions"></div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <ul class="list-inline text-center">
                    <li>
                        <div class="stats-icon bg-blue-2">
                            <i class="stats-icon-i icon-calendar52 lh-0"></i>
                        </div>
                    </li>
                    <li class="text-left">
                        <div class="text-semibold">ماه اخیر  </div>
                        <div class="text-muted"><span class="text-success-600">
                                    {{ number_format($sumMonth) }}</span></div>
                    </li>
                </ul>

                <div class="col-lg-10 col-lg-offset-1">
                    <div class="chart content-group" id="new-sessions"></div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <ul class="list-inline text-center">
                    <li>
                        <div class="stats-icon bg-orange">
                            <i class="stats-icon-i icon-calendar3 lh-0"></i>
                        </div>
                    </li>
                    <li class="text-left">
                        <div class="text-semibold">سال اخیر  </div>
                        <div class="text-muted"><span class="text-success-600">
                                    {{ number_format($sumYear) }}</span></div>
                    </li>
                </ul>

                <div class="col-lg-10 col-lg-offset-1">
                    <div class="chart content-group" id="new-sessions"></div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <ul class="list-inline text-center">
                    <li>
                        <div class="stats-icon bg-green-2">
                            <i class="stats-icon-i icon-cash4 lh-0"></i>
                        </div>
                    </li>
                    <li class="text-left">
                        <div class="text-semibold"> موجودی صندوق  </div>
                        <div class="text-muted"><span class="text-success-600">
                                    {{ number_format($totalAmount) }}</span></div>
                    </li>
                </ul>

                <div class="col-lg-10 col-lg-offset-1">
                    <div class="chart content-group" id="new-sessions"></div>
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
                            <th>تاریخ واریزی </th>
                            <th>توضیحات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expiations as $expiation)
                            <tr>
                                <td>{{ $expiation->f_name ? $expiation->f_name : $expiation->phone }}</td>
                                <td>
                                    <span class="text-success-600">
                                        {{ number_format($expiation->amount) }}
                                    </span>
                                </td>
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
