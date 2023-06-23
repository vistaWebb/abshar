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
    index category
@endsection

@section('content')
    {{-- !-- Page header --> --}}
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li><a href="form_layout_vertical.html"> لیست دسته بندی دونیت ها </a></li>
                <li class="active">list of categories</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> لیست دسته بندی ها</h5>
                <div class="heading-elements">
                    <a href="{{ route('admin.categories.create') }}" type="button" class="btn btn-success "><i
                            class=" icon-stack position-left"></i> افزودن دسته بندی</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> ردیف</th>
                            <th> نام</th>
                            <th> دسته بندی</th>
                            <th> آیکن</th>
                            <th>وضعیت</th>
                            <th>توضیحات</th>
                            <th class="text-center" style="width: 10px;">نمایش </th>
                            <th class="text-center" style="width: 10px;">حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <td>
                                    {{ $categories->firstItem() + $key }}
                                </td>
                                <td> {{ $category->name }}</td>
                                <td>
                                    @if ($category->parent_id == 0)
                                        بدون والد
                                    @else
                                        {{ $category->parent->name }}
                                    @endif
                                </td>
                                <td><a href="#"
                                        class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                            class="{{ $category->icon }}"></i></a></td>
                                <td><span
                                        class="{{ $category->getRawOriginal('is_active') ? 'label label-success' : 'label label-default' }}">{{ $category->is_active }}</span>
                                </td>
                                <td>{{ $category->description }}</td>
                                <td class="text-left">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}"
                                                type="button"
                                                class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                    class="icon-task text-success-600"></i></a>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <form
                                            action="{{ route('admin.categories.destroy', ['category' => $category->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <li>
                                                <button class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-xs valign-text-bottom">
                                                    <i class="icon-cross text-warning-600"></i>
                                                </button>
                                            <li>
                                        </form>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic responsive table -->

        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank">09336344816 </a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
