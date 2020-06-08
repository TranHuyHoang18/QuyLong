<div class="header sticky-header">

    <!-- notification menu start -->
    <div class="menu-right">
        <div class="navbar user-panel-top">
            <div class="search-box">
                <form action="#search-results.html" method="get">
                    <input class="search-input" placeholder="Search Here..." type="search" id="search">
                    <button class="search-submit" value=""><span class="fa fa-search"></span></button>
                </form>
            </div>
            <div class="user-dropdown-details d-flex">
                <div class="profile_details_left">
                    <ul class="nofitications-dropdown">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new notifications</h3>
                                    </div>
                                </li>
                                <li><a href="#" class="grid">
                                        <div class="user_img"><img src="{{asset('backend/
images/avatar1.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Johnson purchased template</p>
                                            <span>Just Now</span>
                                        </div>
                                    </a></li>
                                <li class="odd"><a href="#" class="grid">
                                        <div class="user_img"><img src="{{asset('backend/images/avatar2.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>New customer registered </p>
                                            <span>1 hour ago</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="grid">
                                        <div class="user_img"><img src="{{asset('backend/images/avatar3.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <span>2 hours ago</span>
                                        </div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#all" class="bg-primary">See all notifications</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 4 new messages</h3>
                                    </div>
                                </li>
                                <li><a href="#" class="grid">
                                        <div class="user_img"><img src="{{asset('backend/images/avatar1.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Johnson purchased template</p>
                                            <span>Just Now</span>
                                        </div>
                                    </a></li>
                                <li class="odd"><a href="#" class="grid">
                                        <div class="user_img"><img src="{{asset('backend/images/avatar2.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>New customer registered </p>
                                            <span>1 hour ago</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="grid">
                                        <div class="user_img"><img src="{{asset('backend/images/avatar3.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <span>2 hours ago</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="grid">
                                        <div class="user_img"><img src="{{asset('backend/images/avatar1.jpg')}}" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Johnson purchased template</p>
                                            <span>Just Now</span>
                                        </div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#all" class="bg-primary">See all messages</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="profile_details">
                    @if(Auth::user()==NULL)
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/login')}}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('admin.register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('admin/register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                               aria-expanded="false">
                                <div class="profile_img">
                                    <img src="{{asset('backend/images/profileimg.jpg')}}" class="rounded-circle" alt="" />
                                    <div class="user-active">
                                        <span></span>
                                    </div>
                                </div>
                            </a>

                            <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                                <li class="user-info">
                                    <h5 class="user-name"><?php echo Auth::user()->name?></h5>
                                    <span class="status ml-2"><?php echo Auth::user()->email?></span>
                                </li>
                                <li> <a href="#"><i class="lnr lnr-user"></i>My Profile</a> </li>
                                <li> <a href="#"><i class="lnr lnr-users"></i>1k Followers</a> </li>
                                <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>
                                <li> <a href="#"><i class="lnr lnr-heart"></i>100 Likes</a> </li>
                                <li class="logout"> <a href="{{ url('admin/logout') }}"><i class="fa fa-power-off"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <!--notification menu end -->
</div>
