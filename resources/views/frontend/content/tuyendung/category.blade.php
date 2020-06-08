@extends('frontend.layouts.NoBanner')
@section('title')
    Trang tuyển dụng
@endsection
@section('content')
    <div class="container" style="margin-top: 2%">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="row">
                    <h5 style="color: #FFAA00"><a href="{{url('/')}}" style="color: #FFAA00">Trang chủ</a> <span style="color:#707070 "> ></span><a href="{{url('/tuyen-dung')}}" style="color: #FFAA00">Tuyển dụng </a><span style="color:#707070 "> ></span> <a href="{{url('/tuyen-dung/danh-muc/'.$cate->slug)}}"  style="color:#FFAA00 ">{{$name}}</a></h5>
                </div>
                <div class="row" style="margin-left: 5%">
                     <h3 style="font-weight: bold; color: black">Trang {{$name}}</h3>
                    <div class="row">
                        <h5 style="color: #b8b6b6;margin-left: 1%">Tổng hợp các thông tin {{$name}} của ccông ty,... </h5>
                    </div>
                </div>
                @foreach($pages as $page)
                    <div class="row" style="margin-left: 5%;margin-top: 2%">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <?php
                            $images = isset($page->image) ? json_decode($page->image) : array();
                            ?>
                            @if(!empty($images))
                                @foreach($images as $image)
                                    <img src="{{ asset($image) }}" style="width: 100%;max-height: 120px; border: 2px solid #8e8e8e; max-width: 200px ">
                                @endforeach
                            @endif
                        </div>
                        <div class="col-sm-7">
                            <div class="row" style="width: 75%;">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold">Vị trí tuyển: </label>
                                </div>
                                <div class="col-sm-8" style="color:#707070 ">
                                    {{$page->name}}
                                </div>
                            </div>
                            <div class="row" style="width: 75%;">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold">Hạn nộp: </label>
                                </div>
                                <div class="col-sm-8" style="color:#707070 ">
                                    {{$page->date}}
                                </div>
                            </div>
                            <div class="row" style="width: 75%;">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold">Ngày đăng: </label>
                                </div>
                                <div class="col-sm-8" style="color:#707070 ">
                                    {{$page->created_at}} - VN
                                </div>
                            </div>
                            <div class="row" style="width: 75%;">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold">Views: </label>
                                </div>
                                <div class="col-sm-8" style="color:#707070 ">
                                    {{$page->views}}
                                </div>
                            </div>
                            <div class="row" style="width: 75%;">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold">Comments: </label>
                                </div>
                                <div class="col-sm-8" style="color:#707070 ">
                                    {{$page->comments}}
                                </div>
                            </div>
                            <div class="row" style="width: 75%;">
                                <a href="{{url('tuyen-dung/bai-viet/'.$slug.'/'.$page->slug)}}" ><button class="btn btn-success" style="text-align: center;float: right">Chi tiết</button></a>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection

