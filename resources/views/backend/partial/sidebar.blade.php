<div class="sidebar-menu sticky-sidebar-menu">

    <div class="logo">
        <h1><a href="{{url('admin')}}">Collective</a></h1>
    </div>



    <div class="logo-icon text-center">
        <a href="{{url('admin')}}" title="logo"><img src="{{asset('backend/images/logo.png')}}" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

        <!-- sidebar nav start -->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="active"><a href="{{url('admin')}}"><i class="fa fa-tachometer"></i><span>Trang chủ</span></a>
            </li>
            <li class="menu-list">
                <a href="{{url('/admin/setting')}}"><i class="fa fa-cogs"></i>
                    <span>Cài đặt <i class="lnr lnr-chevron-right"></i></span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{url('admin/setting/banner')}}">Banner quảng cáo</a> </li>
                    <li><a href="{{url('admin/setting/contact')}}">Liên hệ</a> </li>
                    <li><a href="people.html">Cuối trang</a></li>
                </ul>
            </li>
            <li><a href="{{url('/admin/news')}}"><i class="fa fa-table"></i> <span>Quản lý tin tức</span></a></li>
            <li><a href="{{url('/admin/media')}}"><i class="fa fa-th"></i> <span>Quản lý media</span></a></li>
            <li><a href="{{url('/admin/newsletter')}}"><i class="fa fa-envelope"></i> <span>Quản lý Newsletter</span></a></li>
            <li><a href="{{url('/admin/tuvan')}}"><i class="fa fa-question-circle"></i> <span>Tư vấn khách hàng</span></a></li>
            <li class="menu-list">
                <a href="{{url('/admin/blog')}}">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    <span>Blog<i class="lnr lnr-chevron-right"></i></span>
                </a>
                <ul class="sub-menu-list">
                    <li><a href="{{url('/admin/blog')}}">Blog</a> </li>
                    <li><a href="{{url('/admin/blog/danh-muc')}}">Quản trị danh mục Blog</a> </li>
                    <li><a href="{{url('/admin/blog/bai-viet')}}">Quản trị bài viết</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="{{url('/admin/tuyen-dung')}}">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span>Blog<i class="lnr lnr-chevron-right"></i></span>
                </a>
                <ul class="sub-menu-list">
                    <li><a href="{{url('/admin/tuyen-dung')}}">Tuyển Dụng</a> </li>
                    <li><a href="{{url('/admin/tuyen-dung/danh-muc')}}">Quản trị danh mục Tuyển Dụng</a> </li>
                    <li><a href="{{url('/admin/tuyen-dung/bai-viet')}}">Quản trị bài viết</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="{{url('/admin/dich-vu')}}">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <span>Dịch vụ<i class="lnr lnr-chevron-right"></i></span>
                </a>
                <ul class="sub-menu-list">
                    <li><a href="{{url('/admin/dich-vu')}}"></a>Dịch Vụ</li>
                    <li><a href="{{url('/admin/dich-vu/danh-muc')}}">Danh mục Dịch vụ</a> </li>
                    <li><a href="{{url('/admin/dich-vu/bai-viet')}}">Quản trị bài viết</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="{{url('/admin/gia-cuoc')}}">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <span>Giá cước <i class="lnr lnr-chevron-right"></i></span>
                </a>
                <ul class="sub-menu-list">
                    <li><a href="{{url('/admin/gia-cuoc')}}"></a>Giá cước</li>
                    <li><a href="{{url('/admin/gia-cuoc/danh-muc')}}">Danh mục Giá cước̣</a> </li>
                    <li><a href="{{url('/admin/gia-cuoc/bai-viet')}}">Quản trị bài viết</a></li>
                </ul>
            </li>
            <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li>
        </ul>
        <!-- //sidebar nav end -->
        <!-- toggle button start -->
        <a class="toggle-btn">
            <i class="fa fa-angle-double-left menu-collapsed__left"><span></span></i>
            <i class="fa fa-angle-double-right menu-collapsed__right"></i>
        </a>
        <!-- //toggle button end -->
    </div>
</div>
