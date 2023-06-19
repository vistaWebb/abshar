<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{ asset('/images/user_image.png') }}"
                            class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">
                            محمد حدادزاده
                            {{-- {{auth()->user()->name }} --}}
                        </span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;مشهد - ایران
                        </div>
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
                    <li class="navigation-header"><span>داشبورد</span> <i class="icon-menu" title="اصلی pages"></i></li>
                    <li class="{{ request()->is('admin_panel/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}"><i class="icon-home4">
                            </i> <span>میز کاربری</span></a></li>

                    <li class="{{ request()->is('admin_panel/management/users*') ? 'active' : '' }}
                        {{ request()->is('admin_panel/management/roles*') ? 'active' : '' }}
                        {{ request()->is('admin_panel/management/permissions*') ? 'active' : '' }}"
                        >
                        <a href="#"><i class="icon-users4"></i>
                            <span>مدیریت کاربران </span></a>
                        <ul>
                            <li class="{{ request()->is('admin_panel/management/users') ? 'active' : '' }}"><a href="{{ route('admin.users.index') }}">لیست کاربران </a></li>
                            <li class="{{ request()->is('admin_panel/management/roles') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">گروه های کاربری</a></li>
                            <li class="{{ request()->is('admin_panel/management/permissions') ? 'active' : '' }}"><a href="{{ route('admin.permissions.index') }}">لیست مجوز ها </a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('admin_panel/management/donations*') ? 'active' : '' }}
                        {{ request()->is('admin_panel/management/categories*') ? 'active' : '' }}">
                        <a href="#"><i class="icon-clipboard2"></i>
                            <span>دونیت ها </span></a>
                        <ul>
                            <li class="{{ request()->is('admin_panel/management/donations') ? 'active' : '' }}"><a href="{{ route('admin.donations.index') }}">لیست دونیت ها </a></li>
                            <li class="{{ request()->is('admin_panel/management/categories') ? 'active' : '' }}"><a href="{{ route('admin.categories.index') }}">دسته بندی دونیت ها </a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('admin_panel/management/charities*') ? 'active' : '' }}
                        {{ request()->is('admin_panel/management/expiations*') ? 'active' : '' }}
                        {{ request()->is('admin_panel/management/fitrahs') ? 'active' : '' }}">
                        <a href="#"><i class="icon-cash2"></i>
                            <span>وجوهات </span></a>
                        <ul>
                            <li class="{{ request()->is('admin_panel/management/charities') ? 'active' : '' }}"><a href="{{ route('admin.charities.index') }}"> صدقات </a></li>
                            <li class="{{ request()->is('admin_panel/management/expiations') ? 'active' : '' }}"><a href="{{ route('admin.expiations.index') }}"> کفاره </a></li>
                            <li class="{{ request()->is('admin_panel/management/fitrahs') ? 'active' : '' }}"><a href="{{ route('admin.fitrahs.index') }}"> فطریه </a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('admin_panel/management/orders*') ? 'active' : '' }}">
                        <a href="#"><i class="icon-stats-growth"></i>
                            <span>تراکنش ها </span></a>
                        <ul>
                            <li class="{{ request()->is('admin_panel/management/orders') ? 'active' : '' }}"><a href="{{ route('admin.orders.index') }}">لیست تراکنش ها </a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('admin_panel/management/comments*') ? 'active' : '' }}">

                        <a href="#"><i class="icon-bubbles5"></i>
                            <span>کامنت ها </span></a>
                        <ul>
                            <li class="{{ request()->is('admin_panel/management/comments') ? 'active' : '' }}"><a href="{{ route('admin.comments.index') }}">لیست کامنت ها </a></li>
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
