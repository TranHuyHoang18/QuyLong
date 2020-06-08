@extends('frontend.layouts.NoBanner')
@section('title')
    {{$parent->name}} | {{$page->name}}
@endsection
@section('content')
    <div class="container" style="margin-top: 2%">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="row">
                    <h5 style="color: #FFAA00"><a href="{{url('/')}}" style="color: #FFAA00">Trang chủ</a> <span style="color:#707070 "> ></span><a href="{{url('/gia-cuoc')}}" style="color: #FFAA00">Giá cước </a><span style="color:#707070 "> ></span> <a href="{{url('/dich-vu/'.$parent->slug)}}"  style="color:#FFAA00 ">{{$parent->name}}</a></h5>
                </div>
                <div class="row" style="margin-left: 5%">
                    <h3 style="font-weight: bold; color: black">{{$page->name}}</h3>
                    <div class="row">
                        <h5 style="color: #b8b6b6;margin-left: 1%">Ngày khởi tạo : {{$page->created_at}}   </h5>
                    </div>
                    <div class="row">
                        <?php
                            echo $page->desc;
                        ?>
                    </div>
                </div>

            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection

