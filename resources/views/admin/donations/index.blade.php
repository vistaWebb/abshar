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
                    </div>
                </div>
                {{-- <div class="panel-heading">
                    <div class="heading-elements ">

                        <a href="{{ route('admin.donations.create') }}" type="button"
                        class="btn btn-add"><i class=" icon-stack position-left"></i> افزودن دونیت </a>

                    </div>
                </div> --}}

            </div>
            <div class="panel-body">
                @foreach ($donations as $donation)
                    <div class="col-md-4">
                        <div
                            class="panel {{ $donation->remaining_amount ? 'panel-success' : 'panel-warning' }} panel-bordered ">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    {{ $donation->name }}
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
                                            <h6 class="media-heading"> کل مبلغ :
                                                {{ number_format($donation->total_amount) }}</h6>
                                            <h6 class="media-heading"> چقد جمع شده؟
                                                {{ number_format($donation->collected_amount) }}</h6>
                                            <h6 class="media-heading">چقد مونده؟
                                                {{ number_format($donation->remaining_amount) }}</h6>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <a href="{{ route('admin.donations.show', ['donation' => $donation->id]) }}"
                                                type="button"
                                                class="btn {{ $donation->remaining_amount ? 'btn-success' : 'btn-warning' }} btn-icon heading-btn pull-right"><i
                                                    class="icon-screen-full"></i></a>
                                        </div>
                                        <div class="media-left">
                                            <a href="{{ route('admin.donations.edit', ['donation' => $donation->id]) }}"
                                                type="button"
                                                class="btn {{ $donation->remaining_amount ? 'btn-success' : 'btn-warning' }} btn-icon heading-btn pull-right"><i
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

        <!-- Basic responsive table -->
        {{-- <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> لیست دونیت ها</h5>
                <div class="heading-elements">
                    <a href="{{ route('admin.donations.create') }}" type="button" class="btn btn-success "><i
                            class=" icon-stack position-left"></i> افزودن دونیت </a>
                </div>

            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> نام</th>
                            <th> مبلغ </th>
                            <th> دسته بندی</th>
                            <th> مبلغ جمع آوری شده</th>
                            <th>مبلغ باقیمانده</th>
                            <th>تاریخ شروع </th>
                            <th>تاریخ اتمام </th>
                            <th>وضعیت</th>
                            <th>توضیحات</th>
                            <th class="text-center" style="width: 30px;"><i class="icon-menu-open2"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donations as $donation)
                            <tr>
                                <td>{{ $donation->name }}</td>
                                <td>{{ number_format($donation->total_amount) }}</td>
                                <td>{{ $donation->category->name }}</td>
                                <td>{{ number_format($donation->collected_amount) }}</td>
                                <td>{{ number_format($donation->remaining_amount) }}</td>
                                <td>{{ verta($donation->start_date) }}</td>
                                <td>{{ verta($donation->end_date) ? 'جاری' : verta($donation->end_date) }}</td>

                                <td><span
                                        class="{{ $donation->getRawOriginal('is_active') ? 'label label-success' : 'label label-default' }}">{{ $donation->is_active }}</span>
                                </td>
                                <td>{{ $donation->description }}</td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <form
                                                    action="{{ route('admin.donations.destroy', ['donation' => $donation->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <li class="w-100"><button
                                                            class="btn btn-sm btn-custom text-center w-100">حذف </button>
                                                    <li>
                                                </form>
                                                <li><a class="btn btn-sm btn-outline-info mr-3"
                                                        href="{{ route('admin.donations.edit', ['donation' => $donation->id]) }}">
                                                        ویرایش </a></i>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> --}}
        <!-- /basic responsive table -->

        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank"> 09336344816</a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
