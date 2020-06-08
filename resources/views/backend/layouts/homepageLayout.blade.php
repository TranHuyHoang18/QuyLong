<!doctype html>
<html lang="en">

<head>
    <title>
        @yield('title')
    </title>
    @include('backend.partial.head')

    @yield('style')

</head>

<body class="sidebar-menu-collapsed">
<div class="se-pre-con"></div>

<section>
@include('backend.partial.sidebar')
@include('backend.partial.header')
<div class="main-content">
    <div class="container-fluid content-top-gap">
        @yield('content')
    </div>
</div>



@include('backend.partial.footer')
@include('backend.partial.script')
</section>
</body>
</html>

