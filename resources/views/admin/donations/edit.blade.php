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
    <!-- input data picker JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/notifications/jgrowl.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/pickers/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/pickers/anytime.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/pickers/pickadate/picker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/pickers/pickadate/picker.date.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/pickers/pickadate/picker.time.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/pickers/pickadate/legacy.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/picker_date.js') }}"></script>
    <!-- /theme JS files -->

    <!--choose file files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/form_inputs.js') }}"></script>
    <!-- /theme JS files -->
@endsection

@section('title')
    edit donation
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> ویرایش دونیت </a></li>
                <li class="active">edit donation</li>
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
                <form action="{{ route('admin.donations.update', ['donation' => $donation->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title"> ویرایش دونیت</h5>
                        </div>
                        <div class="panel panel-body">
                            <ul class="media-list ">
                                <li class="media stack-media-on-mobile">
                                    <div class="media-left">
                                        <div class="thumb ">
                                            <a href="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $donation->description) }}">
                                                <img src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $donation->description) }}"
                                                    class="img-responsive img-rounded media-preview" alt="">
                                                <span class="zoom-image"><i class="icon-play3"></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <div class="form-group col-md-9">
                                            <label>انتخاب تصویر <span class="text-danger">*</span> :</label>
                                            <input name="description" type="file" class="file-styled">
                                            <span class="help-block">فرمت مورد قبول: gif, png, jpg. حداکثر حجم فایل
                                                2Mb</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-6">
                                <label>نام دونیت:</label>
                                <input name="name" type="text" class="form-control" value="{{ $donation->name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>مبلغ:</label>
                                <input name="total_amount" type="text" class="form-control"
                                    value="{{ $donation->total_amount }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label> انتخاب دسته بندی :</label>
                                <select name="category_id" class="select-search">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $donation->category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>مبلغ جمع آوری شده:</label>
                                <input name="collected_amount" type="text" class="form-control"
                                    value="{{ $donation->collected_amount }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>مبلغ باقیمانده:</label>
                                <input name="remaining_amount" type="text" class="form-control"
                                    value="{{ $donation->remaining_amount }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label> تاریخ شروع:</label>
                                <input name="start_date" type="text" class="form-control"
                                    value="{{ verta($donation->start_date) }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label> تاریخ اتمام:</label>
                                <input name="end_date" type="text" class="form-control"
                                    value="{{ verta($donation->end_date) ? 'دونیت در حال انجام' : verta($donation->end_date) }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="display-block">وضعیت:</label>

                                <label class="radio-inline">
                                    <input type="radio" class="styled" name="is_active" value="1"
                                        {{ $donation->getRawOriginal('is_active') ? 'checked="checked"' : '' }}>
                                    در حال جمع آوری
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" class="styled" name="is_active" value="0"
                                        {{ $donation->getRawOriginal('is_active') ? '' : 'checked="checked"' }}>
                                    اتمام دونیت
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <label>توضیحات :</label>
                                <textarea name="description" rows="5" cols="5" class="form-control">{{ $donation->description }}</textarea>
                            </div>

                            <div class="text-right ">
                                <button type="submit" class="btn btn-success">ارسال <i
                                        class="icon-arrow-left13 position-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /basic layout -->

            </div>


        </div>
        <!-- /vertical form options -->

        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank"> 09336344816</a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
