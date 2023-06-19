@extends('admin.layouts.admin')

@section('script')
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/tables/footable/footable.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/pages/table_responsive.js') }}"></script>

	<script type="text/javascript" src="{{asset('/js/pages/animations_css3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/core/app.js')}}"></script>
    <!-- /theme JS files -->
    <!-- select input JS files -->
    <script type="text/javascript" src="{{ asset('/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/selects/select2.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/pages/form_select2.js') }}"></script>
    <!-- /theme JS files -->
@endsection

@section('title')
    edit category
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> ویرایش دسته بندی </a></li>
                <li class="active">edit category</li>
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
                <form action="{{ route('admin.categories.update', ['category' => $category->id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title"> ویرایش دسته بندی</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-6">
                                <label>نام دسته بندی<span class="text-danger">*</span> : </label>
                                <input name="name" type="text" class="form-control" value="{{ $category->name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>آیکن <span class="text-danger">*</span> : </label>
                                <input name="icon" type="text" class="form-control" value="{{ $category->icon }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label> انتخاب دسته بندی <span class="text-danger">*</span> :</label>
                                <select name="parent_id" class="select-search">
                                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="display-block">وضعیت:</label>

                                <label class="radio-inline">
                                    <input type="radio" class="styled" name="is_active" value="1"
                                        {{ $category->getRawOriginal('is_active') ? 'checked="checked"' : '' }}>
                                    فعال
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" class="styled" name="is_active" value="0"
                                        {{ $category->getRawOriginal('is_active') ? '' : 'checked="checked"' }}>
                                    غیر فعال
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <label>توضیحات :</label>
                                <textarea name="description" rows="5" cols="5" class="form-control">{{ $category->description }}</textarea>
                            </div>

                            <div class="text-right ">
                                <button type="submit" class="btn btn-primary">ارسال <i
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
            &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank">09336344816 </a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
