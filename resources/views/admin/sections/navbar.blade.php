<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index-2.html"><img src="assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>
        </ul>
        <div class="navbar-right">
            <ul class="nav navbar-nav">

                @php
                    $comments = App\models\Comment::all();
                @endphp

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="visible-xs-inline-block position-right">comments</span>
                        <span class="badge bg-warning-400">{{ $comments->count() }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-content width-350">
                        <div class="dropdown-content-heading">
                            comments
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-compose"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body">
                            @foreach ($comments as $comment)
                                <li class="media">
                                    <div class="media-left">
                                        <img src="{{asset('/images/placeholder.jpg')}}" class="img-circle img-sm"
                                            alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">{{$comment->name}}</span>
                                            <span class="media-annotation pull-right">{{$comment->created_at}}</span>
                                        </a>

                                        <span class="text-muted">{{$comment->subject}}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="#" data-popup="tooltip" title="All messages"><i
                                    class="icon-menu display-block"></i></a>
                        </div>
                    </div>
                </li>

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/images/placeholder.jpg" alt="">
                        <span>محمد</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        {{-- <li><a href="#"><i class="icon-user-plus"></i>پروفایل من</a></li> --}}
                        <li><a href="{{route('admin.comments.index')}}"><span class="badge bg-blue pull-right">{{ $comments->count() }}</span> <i
                                    class="icon-comment-discussion"></i>پیام ها</a></li>
                        <li class="divider"></li>
                        {{-- <li><a href="#"><i class="icon-cog5"></i>تنظیمات اکانت</a></li> --}}
                        <li><a href="{{route('logout')}}"><i class="icon-switch2"></i> خروج</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
