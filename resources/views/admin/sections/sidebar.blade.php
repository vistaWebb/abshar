<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('/images/placeholder.jpg')}}" class="img-circle img-sm"
                            alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold"> نام کاربر</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;مشهد - ایران
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- اصلی navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- اصلی -->
                    <li class="navigation-header"><span>اصلی</span> <i class="icon-menu" title="اصلی pages"></i></li>
                    <li class="active"><a href="{{ route('dashboard') }}"><i class="icon-home4">
                        </i> <span>میز کاربری</span></a></li>
                    <li>
                        <a href="#"><i class="icon-users4"></i>
                            <span>مدیریت کاربران </span></a>
                        <ul>
                            <li><a href="{{ route('admin.users.index') }}">لیست کاربران </a></li>
                            <li><a href="{{ route('admin.roles.index') }}">گروه های کاربری</a></li>
                            <li><a href="{{ route('admin.permissions.index') }}">لیست مجوز ها </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-clipboard2"></i>
                            <span>دونیت ها </span></a>
                        <ul>
                            <li><a href="{{ route('admin.donations.index') }}">لیست دونیت ها </a></li>
                            <li><a href="{{ route('admin.categories.index') }}">دسته بندی دونیت ها </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class=" icon-magic-wand2"></i>
                            <span>وجوهات </span></a>
                        <ul>
                            <li><a href="{{ route('admin.charities.index') }}"> صدقات </a></li>
                            <li><a href="{{ route('admin.expiations.index') }}"> کفاره </a></li>
                            <li><a href="{{ route('admin.fitrahs.index') }}"> فطریه </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class=" icon-magic-wand2"></i>
                            <span>تراکنش ها </span></a>
                        <ul>
                            <li><a href="{{ route('admin.transactions.index') }}">لیست تراکنش ها </a></li>
                          </ul>
                    </li>

                </ul>
                </li>
                <!-- /page kits -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
