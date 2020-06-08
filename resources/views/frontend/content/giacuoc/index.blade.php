@extends('frontend.layouts.NoBanner')
@section('title')
    Giá Cước | Quy Long
@endsection
@section('content')
    <div class="container" style="margin-top: 2%">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="row">
                    <h5 style="color: #FFAA00"><a href="{{url('/')}}"  style="color: #FFAA00">Trang chủ</a> <span style="color:#707070 "> ></span> <a href="{{url('/gia-cuoc')}}" style="color: #FFAA00">Giá cước</a></h5>
                </div>
                <div class="row" style="margin-left: 5%">
                    <h3 style="font-weight: bold; color: black">Trang Giá cước</h3>
                    <div class="row">
                        <h5 style="color: #b8b6b6;margin-left: 1%">Tổng hợp các thông tin bảng giá cước vận chuyển của công ty,... </h5>
                    </div>
                </div>
                @foreach($categories as $category)
                    <div class="row" style="margin-left: 5%;margin-top: 2%">
                            <a href="{{url('dich-vu/'.$category->slug)}}"> <h4 style="margin-left:1%;font-weight: bold;border-bottom: 3px solid #ffaa00;color: #707070;width: 25%">{{$category->name}}</h4></a>
                            @if(count($pages[$category->id]) > 0)
                            <div class="row" style="margin-top: 1%;margin-left: 2%">
                                <div class="col-sm-5" style="margin-top: 5%">
                                    <div class="row" style="width: 90%; height: 200px; ">
                                        <img src="{{ $pages[$category->id][0]->image }}" style="width: 90%;max-height: 200px; border: 2px solid #8e8e8e">

                                    </div>
                                    <div class="row" style="width: 90%;">
                                        <h5 style="color:#707070 ">{{$pages[$category->id][0]->name}}</h5>
                                        <a href="{{url('dich-vu/bai-viet/'.$category->slug.'/'.$pages[$category->id][0]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>

                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6" >
                                            @if(count($pages[$category->id]) > 1)
                                                <div class="row" style="width: 75%; height: 100px;">
                                                    <img src="{{ $pages[$category->id][1]->image}}" style="width: 100%;max-height: 100px; border: 2px solid #8e8e8e">
                                                </div>

                                                <div class="row" style="width: 75%;">
                                                    <h5 style="color:#707070 ">{{$pages[$category->id][1]->name}}</h5>
                                                    <a href="{{url('dich-vu/bai-viet/'.$category->slug.'/'.$pages[$category->id][1]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-sm-6" >
                                            @if(count($pages[$category->id]) > 2)
                                                <div class="row" style="width: 75%; height: 100px; ">
                                                    <img src="{{ $pages[$category->id][2]->image }}" style="width: 100%;max-height: 100px; border: 2px solid #8e8e8e">
                                                </div>

                                                <div class="row" style="width: 75%;">
                                                    <h5 style="color:#707070 ">{{$pages[$category->id][2]->name}}</h5>
                                                    <a href="{{url('dich-vu/bai-viet/'.$category->slug.'/'.$pages[$category->id][2]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>

                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 2%">
                                        <div class="col-sm-6" >
                                            @if(count($pages[$category->id]) > 3)
                                                <div class="row" style="width: 75%; height: 100px; ">
                                                    <img src="{{ $pages[$category->id][3]->image }}" style="width: 100%;max-height: 100px; border: 2px solid #8e8e8e">
                                                </div>

                                                <div class="row" style="width: 75%;">
                                                    <h5 style="color:#707070 ">{{$pages[$category->id][3]->name}}</h5>
                                                    <a href="{{url('dich-vu/bai-viet/'.$category->slug.'/'.$pages[$category->id][3]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>

                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-sm-6" >
                                            @if(count($pages[$category->id]) > 4)
                                                <div class="row" style="width: 75%; height: 100px; ">
                                                    <img src="{{ $pages[$category->id][4]->image }}" style="width: 100%;max-height:100px; border: 2px solid #8e8e8e">
                                                </div>

                                                <div class="row" style="width: 75%;">
                                                    <h5 style="color:#707070 ">{{$pages[$category->id][4]->name}}</h5>
                                                    <a href="{{url('dich-vu/bai-viet/'.$category->slug.'/'.$pages[$category->id][4]->slug)}}" style="color:#FFAA00;">   Xem thêm > </a>

                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>

                @endforeach
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection

