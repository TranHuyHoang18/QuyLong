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
                    <h5 style="color: #FFAA00"><a href="{{url('/')}}"  style="color: #FFAA00">Trang chủ</a> <span style="color:#707070 "> ></span> <a href="{{url('/tuyen-dung')}}" style="color: #FFAA00"> Tuyển dụng</a></h5>
                </div>
                <div class="row" style="margin-left: 5%">
                    <h3 style="font-weight: bold; color: black">Trang tuyển dụng</h3>
                    <div class="row">
                        <h5 style="color: #b8b6b6;margin-left: 1%">Tổng hợp các thông tin tuyển dụng của công ty,... </h5>
                    </div>
                </div>
                @foreach($categories as $category)
                    @if(count($pages[$category->id]) > 0)
                    <div class="row" style="margin-left: 5%;margin-top: 2%">
                        <a href="{{url('tuyen-dung/danh-muc/tuyen-dung-ke-toan-truong')}}"> <h4 style="margin-left:1%;font-weight: bold;border-bottom: 3px solid #ffaa00;color: #707070;width: 25%">{{$category->name}}</h4></a>
                        <div class="row" style="margin-top: 1%">
                            <div class="col-sm-5" style="margin-top: 5%">
                                <div class="row" style="width: 90%; height: 200px; ">
                                    <?php
                                    $images = isset($pages[$category->id][0]->image) ? json_decode($pages[$category->id][0]->image) : array();
                                    ?>
                                    @if(!empty($images))
                                        @foreach($images as $image)
                                            <img src="{{ asset($image) }}" style="width: 90%;max-height: 200px; border: 2px solid #8e8e8e">
                                        @endforeach
                                    @endif
                                </div>
                                <div class="row" style="width: 90%;">
                                    <h5 style="color:#707070 ">{{$pages[$category->id][0]->name}}</h5>
                                    <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][0]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>

                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6" >
                                        @if(count($pages[$category->id]) > 1)
                                            <div class="row" style="width: 75%; height: 100px;">
                                                <?php
                                                $images = isset($pages[$category->id][1]->image) ? json_decode($pages[$category->id][1]->image) : array();
                                                ?>
                                                @if(!empty($images))
                                                    @foreach($images as $image)
                                                        <img src="{{ asset($image) }}" style="width: 100%;max-height: 100px; border: 2px solid #8e8e8e">
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="row" style="width: 75%;">
                                                <h5 style="color:#707070 ">{{$pages[$category->id][1]->name}}</h5>
                                                <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][1]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-sm-6" >
                                        @if(count($pages[$category->id]) > 2)
                                            <div class="row" style="width: 75%; height: 100px; ">
                                                <?php
                                                $images = isset($pages[$category->id][2]->image) ? json_decode($pages[$category->id][2]->image) : array();
                                                ?>
                                                @if(!empty($images))
                                                    @foreach($images as $image)
                                                        <img src="{{ asset($image) }}" style="width: 100%;max-height: 100px; border: 2px solid #8e8e8e">
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="row" style="width: 75%;">
                                                <h5 style="color:#707070 ">{{$pages[$category->id][2]->name}}</h5>
                                                <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][2]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>

                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 2%">
                                    <div class="col-sm-6" >
                                        @if(count($pages[$category->id]) > 3)
                                            <div class="row" style="width: 75%; height: 100px; ">
                                                <?php
                                                $images = isset($pages[$category->id][3]->image) ? json_decode($pages[$category->id][3]->image) : array();
                                                ?>
                                                @if(!empty($images))
                                                    @foreach($images as $image)
                                                        <img src="{{ asset($image) }}" style="width: 100%;max-height: 100px; border: 2px solid #8e8e8e">
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="row" style="width: 75%;">
                                                <h5 style="color:#707070 ">{{$pages[$category->id][3]->name}}</h5>
                                                <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][3]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>

                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-sm-6" >
                                        @if(count($pages[$category->id]) > 4)
                                            <div class="row" style="width: 75%; height: 100px; ">
                                                <?php
                                                $images = isset($pages[$category->id][4]->image) ? json_decode($pages[$category->id][4]->image) : array();
                                                ?>
                                                @if(!empty($images))
                                                    @foreach($images as $image)
                                                        <img src="{{ asset($image) }}" style="width: 100%;max-height:100px; border: 2px solid #8e8e8e">
                                                    @endforeach
                                                @endif
                                            </div>

                                            <div class="row" style="width: 75%;">
                                                <h5 style="color:#707070 ">{{$pages[$category->id][4]->name}}</h5>
                                                <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][4]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>

                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection

