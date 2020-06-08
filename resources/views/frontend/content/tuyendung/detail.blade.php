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
                    <h5 style="color: #FFAA00">Trang chủ <span style="color:#707070 "> ></span> Tuyển dụng<span style="color:#707070 "> ></span>{{$name}} </h5>
                </div>
                <div class="row" style="margin-left: 5%">
                    <h3 style="font-weight: bold; color: black">{{$page[0]->name}}</h3>
                    <div class="row">
                        <h5 style="color: #b8b6b6;margin-left: 1%">Ngày khởi tạo : {{$page[0]->created_at}}   <span style="color: #FFAA00;margin-left: 50px">Hạn nộp hồ sơ : {{$page[0]->date}}</span></h5>
                    </div>
                    <div class="row">
                        <?php
                            echo $page[0]->desc;
                        ?>
                    </div>
                </div>

            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection

