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
    list of order
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> لیست تراکنش ها </a></li>
                <li class="active">list of orders</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> لیست تراکنش ها</h5>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> نام خیّر</th>
                            <th> پروژه </th>
                            <th> مبلغ </th>
                            <th> درگاه پرداخت </th>
                            {{-- <th> ref_id</th> --}}
                            <th> وضعیت </th>
                            <th>تاریخ واریزی </th>
                            <th>توضیحات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->f_name ? $order->f_name : $order->phone}}</td>
                                <td>{{ $order->category->name }}</td>
                                <td>{{ number_format($order->amount) }}</td>
                                <td>{{ $order->gateway_name }}</td>
                                {{-- <td>{{ $order->transaction->id}}</td> --}}
                                <td><span
                                    class="{{ $order->getRawOriginal('status') ? 'label label-success' : 'label label-default' }}">{{ $order->status }}</span>
                                </td>
                                <td>{{ verta($order->created_at) }}</td>
                                <td>{{ $order->description }}</td>
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
