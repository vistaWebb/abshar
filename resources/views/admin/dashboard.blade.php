@extends('admin.layouts.admin')

@section('script')
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/selects/select2.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/pages/datatables_advanced.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/pages/animations_css3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <!-- /theme JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/plugins/pickers/daterangepicker.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/core/app.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/js/pages/%c3%99%c2%85%c3%9b%c2%8c%c3%98%c2%b2%20%c3%9a%c2%a9%c3%98%c2%a7%c3%98%c2%b1%c3%98%c2%a8%c3%98%c2%b1%c3%9b%c2%8c.html') }}">
    </script>
    <!-- /theme JS files -->
@endsection

@section('title')
    dashboard
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index-2.html"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">میز کاربری</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- اصلی charts -->
        <div class="row">
            <div class="col-lg-7">
                <!-- موجودی صندوق ها   -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title"> موجودی صندوق ها </h6>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list-inline text-center">
                                    <li>
                                        <a href="#"
                                            class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                class=" icon-coin-dollar"></i></a>
                                    </li>
                                    <li class="text-left">
                                        <div class="text-semibold">فطریه </div>
                                        <div class="text-muted"><span class="text-success-600"><i
                                                    class="icon-stats-growth2 position-left"></i>
                                                {{ number_format($fitrahs) }}</span></div>
                                    </li>
                                </ul>

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="chart content-group" id="new-visitors"></div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <ul class="list-inline text-center">
                                    <li>
                                        <a href="#"
                                            class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                class=" icon-cash4"></i></a>
                                    </li>
                                    <li class="text-left">
                                        <div class="text-semibold">صندوق کفاره </div>
                                        <div class="text-muted"><span class="text-success-600"><i
                                                    class="icon-stats-growth2 position-left"></i>
                                                {{ number_format($charities) }}</span></div>
                                    </li>
                                </ul>

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="chart content-group" id="new-sessions"></div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <ul class="list-inline text-center">
                                    <li>
                                        <a href="#"
                                            class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                class="icon-umbrella"></i></a>
                                    </li>
                                    <li class="text-left">
                                        <div class="text-semibold"> صدقه صندوق</div>
                                        <div class="text-muted"><span class="text-success-600"><i
                                                    class="icon-stats-growth2 position-left"></i>
                                                {{ number_format($expiations) }}</span></div>
                                    </li>
                                </ul>

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="chart content-group" id="total-online"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart position-relative" id="traffic-sources"></div>
                </div>
                <!-- /traffic sources -->
            </div>

            <div class="col-lg-5">
                <!-- Sales stats -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">موجودی کل </h6>
                    </div>

                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin">
                                        <a href="#"
                                            class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs"><i
                                                class="icon-calendar5 "></i></a><span class="text-success-600">
                                            {{ number_format($sumWeek) }}</span>
                                    </h5>
                                    <span class="text-muted text-size-small">هفته اخیر </span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin"> <a href="#"
                                            class="btn border-danger text-danger btn-flat btn-rounded btn-icon btn-xs"><i
                                                class="icon-calendar52 "></i></a>
                                        <span class="text-success-600">
                                            {{ number_format($sumMonth) }}</span>
                                    </h5>
                                    <span class="text-muted text-size-small">ماه اخیر </span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content-group">
                                    <h5 class="text-semibold no-margin">
                                        <a href="#"
                                            class="btn border-indigo text-indigo btn-flat btn-rounded btn-icon btn-xs"><i
                                                class="icon-cash3 "></i></a>
                                        <span class="text-success-600">
                                            {{ number_format($sumYear) }}</span>
                                    </h5>
                                    <span class="text-muted text-size-small">سال اخیر </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart content-group-sm" id="app_sales"></div>
                    <div class="chart" id="monthly-sales-stats"></div>
                </div>
                <!-- /sales stats -->
            </div>
        </div>
        <!-- /main charts -->

        <!-- میز کاربری content -->
        <div class="row">
            <div class="col-lg-8">
                <!-- وضعیت دونیت ها-->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title"> وضعیت دونیت ها</h6>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>دونیت</th>
                                    <th class="col-md-2">دسته بندی</th>
                                    <th class="col-md-2">مبلغ جمع اوری شده</th>
                                    <th class="col-md-2">مبلغ باقیمانده</th>
                                    <th class="col-md-2">وضعیت</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donations as $donation)
                                    <tr>
                                        <td>
                                            <div class="media-left media-middle">
                                                <a href="#"><img src="{{ asset('/images/placeholder.jpg') }}"
                                                        class="img-circle img-xs" alt=""></a>
                                            </div>
                                            <div class="media-left">
                                                <div class=""><a href="#"
                                                        class="text-default text-semibold">{{ $donation->name }}</a></div>
                                                {{-- <div class="text-muted text-size-small">
                                                <span class="status-mark border-blue position-left"></span>
                                                02:00 - 03:00
                                            </div> --}}
                                            </div>
                                        </td>
                                        <td><span class="text-muted">{{ $donation->category->name }}</span></td>
                                        <td><span class="text-success-600"><i
                                                    class="icon-stats-growth2 position-left"></i>
                                                {{ number_format($donation->collected_amount) }}</span>
                                        </td>
                                        <td>
                                            <h6 class="text-danger-600">{{ number_format($donation->remaining_amount) }}
                                            </h6>
                                        </td>
                                        <td><span class="label bg-success">{{ $donation->is_active }}</span></td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /marketing campaigns -->


                <!-- Quick stats boxes -->
                <div class="row">
                    <div class="col-lg-4">

                        <!-- Members online -->
                        <div class="panel bg-teal-400">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <span class="heading-text badge bg-teal-800">+6%</span>
                                </div>

                                <h3 class="no-margin">5320225</h3>
                                افراد تحت سرپرستی
                                <div class="text-muted text-size-small"> 25 نفر در این ماه </div>
                            </div>

                            <div class="container-fluid">
                                <div class="chart" id="members-online"></div>
                            </div>
                        </div>
                        <!-- /members online -->

                    </div>

                    <div class="col-lg-4">

                        <!-- Current server load -->
                        <div class="panel bg-pink-400">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <span class="heading-text badge bg-danger-800">+8%</span>
                                </div>

                                <h3 class="no-margin">546,545,000</h3>
                                موجودی صندوق
                                <div class="text-muted text-size-small">32,847,000 افزایش موجودی</div>
                            </div>

                            <div class="chart" id="server-load"></div>
                        </div>
                        <!-- /current server load -->

                    </div>

                    <div class="col-lg-4">

                        <!-- امروز's revenue -->
                        <div class="panel bg-blue-400">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <span class="heading-text badge bg-indigo-800">+2/8%</span>
                                </div>
                                <h3 class="no-margin">12,247</h3>
                                پرسنل
                                <div class="text-muted text-size-small">3 نفر افزایش</div>
                            </div>

                            <div class="chart" id="today-revenue"></div>
                        </div>
                        <!-- /today's revenue -->

                    </div>
                </div>
                <!-- /quick stats boxes -->


                <!-- واریزی ها -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">آخرین واریزی ها </h6>
                        <div class="heading-elements">
                            <a href="{{ route('admin.orders.index') }}"
                                class="btn btn-link daterange-ranges heading-btn text-semibold">
                                <i class="icon-calendar3 position-left"></i> <span></span> <b class="caret"></b>
                            </a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 100px">زمان</th>
                                    <th style="width: 300px;">مبلغ</th>
                                    <th>موضوع اهدا</th>
                                    <th class="text-center" style="width: 300px;"><i class="icon-arrow-down12"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td class="text-center">
                                            <h6 class="no-margin">{{ $transaction->created_at->format('H:i:s') }} <small
                                                    class="display-block text-size-small no-margin">hours</small>
                                            </h6>
                                        </td>
                                        <td>
                                            <div class="media-left media-middle">
                                                <a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <a href="#"
                                                    class="display-inline-block text-default text-semibold letter-icon-title">
                                                    {{ $transaction->amount }}
                                                </a>

                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-default display-inline-block">
                                                <span class="text-semibold"> {{ $transaction->category->name }}</span>
                                                <span class="display-block text-muted">
                                                    {{ $transaction->description }}</span>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.orders.index') }}"
                                                class="btn btn-link daterange-ranges heading-btn text-semibold">
                                                <i class="icon-calendar3 position-left"></i> <span></span> <b
                                                    class="caret"></b>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /support tickets -->


                <!-- آخرین مطالب -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">آخرین مطالب</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="media-list content-group">
                                    <li class="media stack-media-on-mobile">
                                        <div class="media-left">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/placeholder.jpg"
                                                        class="img-responsive img-rounded media-preview" alt="">
                                                    <span class="zoom-image"><i class="icon-play3"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="#">جشن اهدا 313 جهیزیه تبریز با حضور
                                                    مقامات دولتی و استانی</a></h6>
                                            <ul class="list-inline list-inline-separate text-muted mb-5">
                                                <li><i class="icon-book-play position-left"></i> Video
                                                    tutorials</li>
                                                <li>https://absharatefeha.ir/b343</li>
                                            </ul>
                                            روز پنج‌شنبه 11 خرداد سال 1402 همزمان با دومین روز آغاز به کار نمایشگاه
                                            توانمندی‌های بنیاد آبشار عاطفه‌ها در سالن اجتماعات مصلی اعظم امام خمینی تبریز،
                                            جشن اهدا 313 سری جهیزیه ...
                                        </div>
                                    </li>

                                    <li class="media stack-media-on-mobile">
                                        <div class="media-left">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/placeholder.jpg"
                                                        class="img-responsive img-rounded media-preview" alt="">
                                                    <span class="zoom-image"><i class="icon-play3"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="#">افتتاح مرکز مشارکت‌ مردمی طفلان
                                                    مسلم، دریچه سوم به سوی روشنای امید</a></h6>
                                            <ul class="list-inline list-inline-separate text-muted mb-5">
                                                <li><i class="icon-book-play position-left"></i> Video
                                                    tutorials</li>
                                                <li>https://absharatefeha.ir/d841</li>
                                            </ul>
                                            سومین مرکز مشارکت‌ها و ارتباطات مردمی خیریه آبشار عاطفه ها در مشهد با نام «طفلان
                                            مسلم» کار خود را در هجدهم خرداد ماه جاری در منطقه 6 شهر مشهد آغاز کرد.
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul class="media-list content-group">
                                    <li class="media stack-media-on-mobile">
                                        <div class="media-left">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/placeholder.jpg"
                                                        class="img-responsive img-rounded media-preview" alt="">
                                                    <span class="zoom-image"><i class="icon-play3"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="#">سنندج و ایلام میزبان رزمایشات
                                                    بهاری بنیاد آبشار عاطفه‌ها</a></h6>
                                            <ul class="list-inline list-inline-separate text-muted mb-5">
                                                <li><i class="icon-book-play position-left"></i> Video
                                                    tutorials</li>
                                                <li>https://absharatefeha.ir/b99b</li>
                                            </ul>
                                            همزمان با واپسین روزهای گرم بهار در روز سه‌شنبه 23 خرداد سال 1402 دو نمایندگی‌
                                            بنیاد بین‌المللی خیریه آبشار عاطفه‌ها یعنی امورشعب سنندج و شعبه موسی‌بن
                                            جعفر(عام) ایلام رزمایش سبد غذایی را با تهیه 600 و 50 سبد برگزار کردند
                                        </div>
                                    </li>

                                    <li class="media stack-media-on-mobile">
                                        <div class="media-left">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/placeholder.jpg"
                                                        class="img-responsive img-rounded media-preview" alt="">
                                                    <span class="zoom-image"><i class="icon-play3"></i></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="#">همزمان با میلاد امام هشتم و برپایی
                                                    نمایشگاه تبریز: برگزاری نشست خبری و جشن‌ شعب</a></h6>
                                            <ul class="list-inline list-inline-separate text-muted mb-5">
                                                <li><i class="icon-book-play position-left"></i> FAQ
                                                    section</li>
                                                <li>https://absharatefeha.ir/ffc4</li>
                                            </ul>
                                            فولاد و مدیران بنیاد آبشار عاطفه‌ها در نشستی صمیمی با حضور برخی مسؤولین تبریز و
                                            خبرنگاران کشور به معرفی خدمات و دستاوردهای برجسته این مجموعه در حوزه‌های مختلف
                                            پرداختند.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /latest posts -->

            </div>

            <div class="col-lg-4">

                <!-- Progress counters -->
                <div class="row">
                    <div class="col-md-6">

                        <!-- Available hours -->
                        <div class="panel text-center">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li class="dropdown text-muted">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                    class="icon-cog3"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-sync"></i> Update
                                                        data</a></li>
                                                <li><a href="#"><i class="icon-list-unordered"></i> Detailed
                                                        log</a></li>
                                                <li><a href="#"><i class="icon-pie5"></i> آمار</a>
                                                </li>
                                                <li><a href="#"><i class="icon-cross3"></i> Clear
                                                        list</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Progress counter -->
                                <div class="chart content-group-sm svg-center position-relative"
                                    id="hours-available-progress"></div>
                                <!-- /progress counter -->


                                <!-- Bars -->
                                <div class="chart" id="hours-available-bars"></div>
                                <!-- /bars -->

                            </div>
                        </div>
                        <!-- /available hours -->

                    </div>

                    <div class="col-md-6">

                        <!-- Productivity goal -->
                        <div class="panel text-center">
                            <div class="panel-body">
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li class="dropdown text-muted">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                    class="icon-cog3"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-sync"></i> Update
                                                        data</a></li>
                                                <li><a href="#"><i class="icon-list-unordered"></i> Detailed
                                                        log</a></li>
                                                <li><a href="#"><i class="icon-pie5"></i> آمار</a>
                                                </li>
                                                <li><a href="#"><i class="icon-cross3"></i> Clear
                                                        list</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Progress counter -->
                                <div class="chart content-group-sm svg-center position-relative" id="goal-progress"></div>
                                <!-- /progress counter -->

                                <!-- Bars -->
                                <div class="chart" id="goal-bars"></div>
                                <!-- /bars -->

                            </div>
                        </div>
                        <!-- /productivity goal -->

                    </div>
                </div>
                <!-- /progress counters -->

                {{--
                <!-- Daily sales -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">آمار فروش روزانه</h6>
                        <div class="heading-elements">
                            <span class="heading-text">Balance: <span
                                    class="text-bold text-danger-600 position-right">$4,378</span></span>
                            <ul class="icons-list">
                                <li class="dropdown text-muted">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon-cog3"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-sync"></i> Update data</a>
                                        </li>
                                        <li><a href="#"><i class="icon-list-unordered"></i>
                                                Detailed log</a></li>
                                        <li><a href="#"><i class="icon-pie5"></i> آمار</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-cross3"></i> Clear list</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="chart" id="sales-heatmap"></div>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>Application</th>
                                    <th>Time</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Sigma
                                                    application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i
                                                    class="icon-checkmark3 text-size-mini position-left"></i>
                                                New order</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">06:28 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$49.90</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Alpha
                                                    application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i
                                                    class="icon-spinner11 text-size-mini position-left"></i>
                                                Renewal</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">04:52 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$90.50</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-indigo-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Delta
                                                    application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i
                                                    class="icon-lifebuoy text-size-mini position-left"></i>پشتیبانی
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">01:26 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$60.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Omega
                                                    application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i
                                                    class="icon-lifebuoy text-size-mini position-left"></i>پشتیبانی
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">11:46 am</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$55.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Alpha
                                                    application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i
                                                    class="icon-spinner11 text-size-mini position-left"></i>
                                                Renewal</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">10:29 am</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$90.50</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /daily sales --> --}}
                <!-- Application status -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title"> دونیت ها </h6>

                        <div class="heading-elements">
                            <div class="heading-text">
                                <span class="status-mark border-success position-left"></span>
                                فعال
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <ul class="progress-list">

                            @foreach ($donations as $key => $donation)
                                @php
                                    $percentage = ($donation->collected_amount / $donation->total_amount) * 100;
                                    $colorClass = 'progress-bar-color-' . (($key % 5) + 1); // یک کلاس منحصر به فرد بر اساس شمارنده حلقه ایجاد می‌شود
                                @endphp

                                <li>
                                    <label>{{ $donation->name }} <span>{{ $percentage }}%</span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar {{ $colorClass }}"
                                            style="width: {{ $percentage }}%">
                                            <span class="sr-only">{{ $percentage }}% کامل شده</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- /application status -->


                <!-- پیغام های من -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">پیام های من</h6>
                        <div class="heading-elements">
                            <span class="heading-text"><i class="icon-history text-warning position-left"></i> شنبه 3
                                تیرماه </span>
                            <span class="label bg-success heading-text">آنلاین</span>
                        </div>
                    </div>

                    <!-- Numbers -->
                    <div class="container-fluid">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <div class="content-group">
                                    <h6 class="text-semibold no-margin"><i
                                            class="icon-clipboard3 position-left text-slate"></i> 1
                                    </h6>
                                    <span class="text-muted text-size-small">این هفته</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content-group">
                                    <h6 class="text-semibold no-margin"><i
                                            class="icon-calendar3 position-left text-slate"></i> 2
                                    </h6>
                                    <span class="text-muted text-size-small"> این ماه</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="content-group">
                                    <h6 class="text-semibold no-margin"><i
                                            class="icon-comments position-left text-slate"></i>{{ $comments->count() }}
                                    </h6>
                                    <span class="text-muted text-size-small"> کل پیام ها</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /numbers -->


                    <!-- Area chart -->
                    <div class="chart" id="messages-stats"></div>
                    <!-- /area chart -->


                    <!-- Tabs -->
                    <ul
                        class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300">
                        <li class="active">
                            <a href="#messages-tue" class="text-size-small text-uppercase" data-toggle="tab">
                                سه شنبه
                            </a>
                        </li>

                        <li>
                            <a href="#messages-mon" class="text-size-small text-uppercase" data-toggle="tab">
                                دوشنبه
                            </a>
                        </li>

                        <li>
                            <a href="#messages-fri" class="text-size-small text-uppercase" data-toggle="tab">
                                جمعه
                            </a>
                        </li>
                    </ul>
                    <!-- /tabs -->


                    <!-- Tabs content -->
                    <div class="tab-content">
                        <div class="tab-pane active fade in has-padding" id="messages-tue">
                            <ul class="media-list">
                                @foreach ($comments as $comment)
                                    <li class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('/images/placeholder.jpg') }}" class="img-circle img-xs"
                                                alt="">
                                            <span class="badge bg-danger-400 media-badge"></span>
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                {{ $comment->name }}
                                                <span
                                                    class="media-annotation pull-right">{{ $comment->created_at->format('H:i:s') }}
                                                </span>
                                            </a>

                                            <span class="display-block text-muted">
                                                {{ $comment->text }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="tab-pane fade has-padding" id="messages-mon">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Isak Temes
                                            <span class="media-annotation pull-right">Tue, 19:58</span>
                                        </a>

                                        <span class="display-block text-muted">Reasonable palpably rankly
                                            expressly grimy...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Vittorio Cosgrove
                                            <span class="media-annotation pull-right">Tue, 16:35</span>
                                        </a>

                                        <span class="display-block text-muted">Arguably therefore more
                                            unexplainable fumed...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Hilary Talaugon
                                            <span class="media-annotation pull-right">Tue, 12:16</span>
                                        </a>

                                        <span class="display-block text-muted">Nicely unlike porpoise a
                                            kookaburra past more...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Bobbie Seber
                                            <span class="media-annotation pull-right">Tue, 09:20</span>
                                        </a>

                                        <span class="display-block text-muted">Before visual vigilantly
                                            fortuitous tortoise...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Walther Laws
                                            <span class="media-annotation pull-right">Tue, 03:29</span>
                                        </a>

                                        <span class="display-block text-muted">Far affecting more leered
                                            unerringly dishonest...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade has-padding" id="messages-fri">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Owen Stretch
                                            <span class="media-annotation pull-right">Mon, 18:12</span>
                                        </a>

                                        <span class="display-block text-muted">Tardy rattlesnake seal
                                            raptly earthworm...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Jenilee Mcnair
                                            <span class="media-annotation pull-right">Mon, 14:03</span>
                                        </a>

                                        <span class="display-block text-muted">Since hello dear pushed
                                            amid darn trite...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Alaster Jain
                                            <span class="media-annotation pull-right">Mon, 13:59</span>
                                        </a>

                                        <span class="display-block text-muted">Dachshund cardinal dear
                                            next jeepers well...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Sigfrid Thisted
                                            <span class="media-annotation pull-right">Mon, 09:26</span>
                                        </a>

                                        <span class="display-block text-muted">Lighted wolf yikes less
                                            lemur crud grunted...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/placeholder.jpg" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#">
                                            Sherilyn Mckee
                                            <span class="media-annotation pull-right">Mon, 06:38</span>
                                        </a>

                                        <span class="display-block text-muted">Less unicorn a however
                                            careless husky...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /tabs content -->

                </div>
                <!-- /my messages -->


                <!-- گردش مالی -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">گردش مالی</h6>
                        <div class="heading-elements">
                            <form class="heading-form" action="#">
                                <div class="form-group">
                                    <label class="checkbox checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                        <input type="checkbox" class="switcher" id="realtime" checked="checked">
                                        Realtime
                                    </label>
                                </div>
                            </form>
                            <span class="badge bg-danger-400 heading-text">+86</span>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="chart content-group-xs" id="bullets"></div>

                        <ul class="media-list">
                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-pink text-pink btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-statistics"></i></a>
                                </div>

                                <div class="media-body">
                                    Stats for July, 6: 1938 orders, $4220 revenue
                                    <div class="media-annotation">2 hours ago</div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-arrow-right13"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-checkmark3"></i></a>
                                </div>

                                <div class="media-body">
                                    فاکتور <a href="#">#4732</a> and <a href="#">#4734</a>
                                    have been paid
                                    <div class="media-annotation">Dec 18, 18:36</div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-arrow-right13"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-alignment-unalign"></i></a>
                                </div>

                                <div class="media-body">
                                    Affiliate commission for June has been paid
                                    <div class="media-annotation">36 minutes ago</div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-arrow-right13"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-spinner11"></i></a>
                                </div>

                                <div class="media-body">
                                    Order <a href="#">#37745</a> from July, 1st has been refunded
                                    <div class="media-annotation">4 minutes ago</div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-arrow-right13"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#"
                                        class="btn border-teal-400 text-teal btn-flat btn-rounded btn-icon btn-xs"><i
                                            class="icon-redo2"></i></a>
                                </div>

                                <div class="media-body">
                                    Invoice <a href="#">#4769</a> has been sent to <a href="#">Robert
                                        Smith</a>
                                    <div class="media-annotation">Dec 12, 05:46</div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-arrow-right13"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /daily financials -->

            </div>
        </div>
        <!-- /میز کاربری content -->


        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2023. <a href="#">VistaWebb</a> by <a href="#" target="_blank">09336344816 </a>
        </div>
        <!-- /footer -->


    </div>
    <!-- /content area -->
@endsection
