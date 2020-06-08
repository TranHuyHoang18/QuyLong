@extends('frontend.layouts.NoBanner')
@section('title')
    Tra cứu
@endsection
@section('content')
    <div class="container">
        <div class="row trans" style="z-index: 4;">
            <div class="row" style="margin-top: 40px">
                <h3 style="text-align: center;color: white">TRA CỨU CƯỚC VẬN CHUYỂN TẠI ĐÂY</h3>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-7">
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <ul>
                            <li id="11" style="background: white;padding: 10px 15px 10px 15px;">
                                <a onclick="openK(1)" style="color:dimgray;">Hàng hóa</a>
                            </li>
                            <li id="12" style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                                <a onclick="openK(2)" style="color:dimgray;">Xe máy</a>
                            </li>
                            <li id="13" style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                                <a onclick="openK(3)" style="color:dimgray;">Thú cưng</a>
                            </li>
                            <li id="14" style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                                <a onclick="openK(4)" style="color:dimgray;">Chuyển nhà</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row" style="background-color: white;border-radius: 5px;box-shadow: 5px 5px grey">
                        <form action="#" method="post" id="1" style="display: block">
                            <div class="row" style="margin-left: 10px">
                                <div class="col-sm-7" >
                                    <h5 style="color: black">Gửi từ</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Tỉnh/TP'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Quận/Huyện'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Hình thức vận chuyển</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn hình thức</option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 10px;margin-top: 10px">
                                <div class="col-sm-7" >
                                    <h5 style="color: black">Gửi đến</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Tỉnh/TP'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Quận/Huyện'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Hình thức vận chuyển</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn hình thức</option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 10px;margin-top: 10px">
                                <div class="col-sm-7" >
                                    <div class="row" >
                                        <div class="col-sm-6">
                                            <h5 style="color: black">Cân nặng</h5>
                                            <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                                <input type="text" name="kg" placeholder="100" style="width: 80%;border: none; margin-left: 10px;height: 100%">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 style="color: black">Đơn vị</h5>
                                            <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;width: 100%">
                                                <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 5px" >
                                                    <option >Kg</option>
                                                    <option>Túi</option>
                                                    <option>Xe</option>
                                                    <option>Bọc</option>
                                                </select>
                                                <i class="fa fa-tasks" aria-hidden="true" ></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Thu hồi biên bản</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn </option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center;margin-top: 20px;margin-bottom: 20px">
                                <button class="btn" style="background-color: #efaf3d; color: white;font-weight: bold;font-size:18px;text-align: center;width: 60%">Tra cứu ngay</button>
                            </div>
                        </form>
                        <form action="#" method="post" id="2" style="display: none">
                            <div class="row" style="margin-left: 10px">
                                <div class="col-sm-7" >
                                    <h5 style="color: black">Gửi từ</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Tỉnh/TP'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Quận/Huyện'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Hình thức vận chuyển</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn hình thức</option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 10px;margin-top: 10px">
                                <div class="col-sm-7" >
                                    <h5 style="color: black">Gửi đến</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Tỉnh/TP'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Quận/Huyện'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Hình thức vận chuyển</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn hình thức</option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 10px;margin-top: 10px">
                                <div class="col-sm-7" >
                                    <div class="row" >
                                        <div class="col-sm-6">
                                            <h5 style="color: black">Cân nặng</h5>
                                            <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                                <input type="text" name="kg" placeholder="100" style="width: 80%;border: none; margin-left: 10px;height: 100%">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 style="color: black">Đơn vị</h5>
                                            <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;width: 100%">
                                                <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 5px" >
                                                    <option >Kg</option>
                                                    <option>Túi</option>
                                                    <option>Xe</option>
                                                    <option>Bọc</option>
                                                </select>
                                                <i class="fa fa-tasks" aria-hidden="true" ></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Thu hồi biên bản</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn </option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center;margin-top: 20px;margin-bottom: 20px">
                                <button class="btn" style="background-color: #efaf3d; color: white;font-weight: bold;font-size:18px;text-align: center;width: 60%">Tra cứu ngay</button>
                            </div>
                        </form>
                        <form action="#" method="post" id="3" style="display: none">
                            <div class="row" style="margin-left: 10px">
                                <div class="col-sm-7" >
                                    <h5 style="color: black">Gửi từ</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Tỉnh/TP'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Quận/Huyện'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Hình thức vận chuyển</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn hình thức</option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 10px;margin-top: 10px">
                                <div class="col-sm-7" >
                                    <h5 style="color: black">Gửi đến</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Tỉnh/TP'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Quận/Huyện'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Hình thức vận chuyển</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn hình thức</option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 10px;margin-top: 10px">
                                <div class="col-sm-7" >
                                    <div class="row" >
                                        <div class="col-sm-6">
                                            <h5 style="color: black">Cân nặng</h5>
                                            <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                                <input type="text" name="kg" placeholder="100" style="width: 80%;border: none; margin-left: 10px;height: 100%">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 style="color: black">Đơn vị</h5>
                                            <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;width: 100%">
                                                <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 5px" >
                                                    <option >Kg</option>
                                                    <option>Túi</option>
                                                    <option>Xe</option>
                                                    <option>Bọc</option>
                                                </select>
                                                <i class="fa fa-tasks" aria-hidden="true" ></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Thu hồi biên bản</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn </option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center;margin-top: 20px;margin-bottom: 20px">
                                <button class="btn" style="background-color: #efaf3d; color: white;font-weight: bold;font-size:18px;text-align: center;width: 60%">Tra cứu ngay</button>
                            </div>
                        </form>
                        <form action="#" method="post" id="4" style="display: none">
                            <div class="row" style="margin-left: 10px">
                                <div class="col-sm-7" >
                                    <h5 style="color: black">Gửi từ</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Tỉnh/TP'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Quận/Huyện'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Hình thức vận chuyển</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn hình thức</option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 10px;margin-top: 10px">
                                <div class="col-sm-7" >
                                    <h5 style="color: black">Gửi đến</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Tỉnh/TP'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                        <select name="city" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >{{'    Chọn Quận/Huyện'}}</option>
                                            <option>   Thái Bình f</option>
                                            <option>   Thái ygyhBình</option>
                                            <option>   Thái Bình</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Hình thức vận chuyển</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn hình thức</option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 10px;margin-top: 10px">
                                <div class="col-sm-7" >
                                    <div class="row" >
                                        <div class="col-sm-6">
                                            <h5 style="color: black">Cân nặng</h5>
                                            <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                                <input type="text" name="kg" placeholder="100" style="width: 80%;border: none; margin-left: 10px;height: 100%">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 style="color: black">Đơn vị</h5>
                                            <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;width: 100%">
                                                <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 5px" >
                                                    <option >Kg</option>
                                                    <option>Túi</option>
                                                    <option>Xe</option>
                                                    <option>Bọc</option>
                                                </select>
                                                <i class="fa fa-tasks" aria-hidden="true" ></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h5 style="color: black">Thu hồi biên bản</h5>
                                    <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                        <select name="city" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                            <option >Chọn </option>
                                            <option>   a</option>
                                            <option>   b</option>
                                            <option>   c</option>
                                        </select>
                                        <i class="fa fa-tasks" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center;margin-top: 20px;margin-bottom: 20px">
                                <button class="btn" style="background-color: #efaf3d; color: white;font-weight: bold;font-size:18px;text-align: center;width: 60%">Tra cứu ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function openK(id)
        {
            document.getElementById(11).style="background: #9e9d9d;padding: 10px 15px 10px 15px;";
            document.getElementById(12).style="background: #9e9d9d;padding: 10px 15px 10px 15px;";
            document.getElementById(13).style="background: #9e9d9d;padding: 10px 15px 10px 15px;";
            document.getElementById(14).style="background: #9e9d9d;padding: 10px 15px 10px 15px;";
            document.getElementById(1).style="display: none";
            document.getElementById(2).style="display: none";
            document.getElementById(3).style="display: none";
            document.getElementById(4).style="display: none";
            document.getElementById(id).style="display: block";
            document.getElementById(id+10).style="background: white;padding: 10px 15px 10px 15px;";
        }
    </script>
@endsection

