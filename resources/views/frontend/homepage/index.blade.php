@extends('frontend.layouts.MainLayout')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="row shipping-service">
        <div class="row" style="margin-top: 50px;margin-bottom: 50px">
            <h3 style="text-align: center; color:#6a6a6a;font-weight: bold"> DỊCH VỤ VẬN CHUYỂN CHÍNH</h3>
        </div>
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                <div class="col-sm-3" style="background-color: white; ">
                    <div class="row col1_4_content" style="width: 90%;margin: 10px ;box-shadow: 5px 5px grey;border-radius: 5px;border: 1px solid #6a6a6a">
                        <div class="row" style="margin-left: 5%;margin-right: 5%">
                            <img src="{{asset('images/front/service/vcnhanh_icon.png')}}"  style="width: 90%">
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%">
                            <h4 style="color: #f5c000;text-align: center">Vận chuyển nhanh</h4>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%; width: 90%">
                            <p style="color:#6a6a6a;text-align: center">Gửi hàng đi Hà Nội chỉ mất 48h, Đà Nẵng chỉ mất 24h
                                mà giá cước gần như không đổi so với cước thường.</p>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%;display: flex;align-items: center;justify-content: center;">
                            <img src="{{asset('images/front/service/bt1.png')}}" height="30px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" style="background-color: white;">
                    <div class="row col1_4_content" style="width: 90%;margin: 10px ;box-shadow: 5px 5px grey;border-radius: 5px;border: 1px solid #6a6a6a">
                        <div class="row" style="margin-left: 5%;margin-right: 5%">
                            <img src="{{asset('images/front/service/vc_tietkiem_icon.png')}}"  style="width: 90%">
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%">
                            <h4 style="color: #f5c000;text-align: center">Vận chuyển tiết kiệm</h4>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%; width: 90%">
                            <p style="color:#6a6a6a;text-align: center">Dịch vụ giao hàng tiêu chuẩn với giá cước cực rẻ nhằm tiết kiệm tối đa chi phí cho doanh nghiệp của bạn.</p>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%;display: flex;align-items: center;justify-content: center;">
                            <img src="{{asset('images/front/service/bt2.png')}}" height="30px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" style="background-color: white;">
                    <div class="row col1_4_content" style="width: 90%;margin: 10px ;box-shadow: 5px 5px grey;border-radius: 5px;border: 1px solid #6a6a6a">
                        <div class="row" style="margin-left: 5%;margin-right: 5%">
                            <img src="{{asset('images/front/service/vc_xemay_icon.png')}}"  style="width: 90%">
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%">
                            <h4 style="color: #f5c000;text-align: center">Vận chuyển xe máy</h4>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%; width: 90%">
                            <p style="color:#6a6a6a;text-align: center">BacNamtrans là đơn vị đầu tiên chuẩn hóa chuyên nghiệp dịch vụ vận chuyển xe máy trên toàn quốc.</p>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%;display: flex;align-items: center;justify-content: center;">
                            <img src="{{asset('images/front/service/bt3.png')}}" height="30px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" style="background-color: white;">
                    <div class="row col1_4_content" style="width: 90%;margin: 10px ;box-shadow: 5px 5px grey;border-radius: 5px;border: 1px solid #6a6a6a">
                        <div class="row" style="margin-left: 5%;margin-right: 5%">
                            <img src="{{asset('images/front/service/vc_logitis_icon.png')}}"  style="width: 90%">
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%">
                            <h4 style="color: #f5c000;text-align: center">Vận chuyển Logistics</h4>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%; width: 90%">
                            <p style="color:#6a6a6a;text-align: center">Kết hợp và tối ưu vận chuyển đa phương thức nhằm cung ứng tối đa dịch vụ Logistics cho doanh nghiệp cảu bạn.</p>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%;display: flex;align-items: center;justify-content: center;">
                            <img src="{{asset('images/front/service/bt4.png')}}" height="30px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
    </div>
    <div class="row intro">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="row" STYLE="margin-top: 20px">
                <div class="col-sm-6">
                    <h3 STYLE="color: #6a6a6a;font-weight: bold;text-align: center"> CHÚNG TÔI LÀ AI ?</h3>
                </div>
                <div class="col-sm-6">
                    <h3 STYLE="color: #6a6a6a;font-weight: bold;text-align: center"> SỐ LIỆU THỐNG KÊ</h3>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <div class="row">
                        <p style="color: grey;font-size: 14px">BacNamtrans là đội ngũ trẻ xuất thân từ các doanh nghiệp logistics
                            lớn nhưng còn nặng về quy trình vận hành. Nhằm mang tới dịch vụ
                            tốt nhất cho khách hàng, chúng tôi áp dụng công nghệ nhằm tăng trải
                            nghiệm, vận hành đơn hàng, quản lý dễ dàng nhằm giảm cước vận
                            chuyển hiện đang quá cao so với các nước trong khu vực.</p>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div style="background: dimgray; height: 250px" ></div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <p style="text-align: center;font-size: 15px">Video giới thiệu BacNamtrans</p>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                    <div class="row" style="">
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/car.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">89</h3>
                                    <p style="color: #636b6f">Xe tải vận chuyển</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/custom.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">209</h3>
                                    <p style="color: #636b6f">Khách hàng tin dùng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/acount.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">27</h3>
                                    <p style="color: #636b6f">Nhân viên toàn quốc</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/box.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">12.970</h3>
                                    <p style="color: #636b6f">Đơn hàng đang vận chuyển</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/home.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">1.928</h3>
                                    <p style="color: #636b6f; ">Điểm gửi hàng toàn quốc</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/traidat.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">63</h3>
                                    <p style="color: #636b6f">Tỉnh thành phủ sóng</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 50px">
                        <img src="{{asset('images/front/icon/img.png')}}" style="width: 100%;height: 240px">
                    </div>
                </div>

            </div>

        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row trans">
        <div class="row" style="margin-top: 40px">
            <h3 style="text-align: center;color: white">TRA CỨU CƯỚC VẬN CHUYỂN TẠI ĐÂY</h3>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-7">

            </div>
            <div class="col-sm-5">
                <div class="row">
                    <ul>
                        <li style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                            <a href="#" style="color:dimgray;">Hàng hóa</a>
                        </li>
                        <li style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                            <a href="#" style="color:dimgray;">Xe máy</a>
                        </li>
                        <li style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                            <a href="#" style="color:dimgray;">Thú cưng</a>
                        </li>
                        <li style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                            <a href="#" style="color:dimgray;">Chuyển nhà</a>
                        </li>
                    </ul>
                </div>
                <div class="row" style="background-color: white;border-radius: 5px;box-shadow: 5px 5px grey">
                    <form action="#" method="post">
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
    <div class="row reason">
        <div class="row" style="text-align: center;margin-top: 40px">
            <h3 style="color: white;"><span style="color:#efaf3d;font-weight: bold">1001+</span> LÝ DO NÊN CHỌN QUY LONG LOGISTICS</h3>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="row" style="margin-top: 30px">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/cup.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#f5c000;margin-left: 5px">Giao hàng nhanh nhất</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #bfbaba">
                                    Thời gian giao nhanh hơn đơn vị khác<br>
                                    <span style="font-weight: bold">Nha Trang</span> - giao nhanh hơn 6 giờ<br>
                                    <span style="font-weight: bold">Đà Nẵng</span> - giao nhanh hơn 12 giờ<br>
                                    <span style="font-weight: bold">Hà Nội</span> - giao nhanh hơn 24 giờ.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/box_1.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#f5c000;margin-left: 5px">Đa dạng gói dịch vụ</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #bfbaba">
                                    Đơn vị đầu tiên có các gói vận chuyển
                                    <span style="font-weight: bold">Vận chuyển tốc độ</span> - giao siêu nhanh
                                    <span style="font-weight: bold">Vận chuyển tiết kiệm</span> - an toàn, tiết kiệm
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/traidat.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#f5c000;margin-left: 5px">Phủ sóng toàn quốc</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #bfbaba">
                                    Năng lực vận chuyển giao hàng<br>
                                    đi khắp 63 tỉnh thành.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/lich.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#f5c000;margin-left: 5px">Tra cứu,quản lý dễ dàng</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #bfbaba">
                                    Tra cứu giá cước tự động, minh bạch<br>
                                    Quản lý, theo dõi đơn hàng theo thời<br>
                                    gian thực<br>
                                    Xua tan nỗi lo không biết đơn hàng<br>
                                    của mình đang ở đâu<br>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/tien.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#f5c000;margin-left: 5px">Tiết kiệm chi phí</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #bfbaba">
                                    Công đoạn hỏi giá, tình trạng đơn hàng,<br>
                                    hàng giao trễ đang làm mất quá nhiều<br>
                                    thời gian và chi phí cho doanh nghiệp.<br>
                                    Hãy yên tâm vì tất cả được kiểm soát qua<br>
                                    hệ thống của Quy Long Logistics
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/dongho.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#f5c000;margin-left: 5px">Dịch vụ ổn định nhất</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #bfbaba">
                                    Tỷ lệ giao hàng đúng hẹn 96,72%<br>
                                    Tỷ lệ đền bù, hoàn trả chỉ 0,86%<br>
                                    Tỷ lệ khách hàng hài lòng tới 92,52%<br>

                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 100px"></div>
    </div>
    <div class="row newreason">
        <div class="row" style="text-align: center">
            <h3 style="color: #5a5a5a; text-align: center">THÊM <span style="color: #efaf3d;font-weight: bold;font-size: 40px">1</span> LÝ DO KHÁCH HÀNG LUÔN HÀI LÒNG</h3>
        </div>
        <div class="row" style="text-align: center;margin-top: 10px">
            <h4 style="color: #999898; text-align: center">Chúng tôi có hệ thống theo dõi quản lý đơn hàng theo thời gian thực</h4>
        </div>
        <div class="row" style="margin-top: 15px">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <div class="row">
                    <h4 style="color: #5a5a5a;">HỆ THỐNG QUẢN LÝ CHUYÊN NGHIỆP</h4>
                </div>
                <div class="row">
                    <h5 style="color: #5a5a5a;"><i class="fa fa-check-circle" aria-hidden="true" style="color: #efaf3d;margin-right: 5px;font-size: 30px"></i> Giao diện trực quan dễ sử dụng</h5>
                    <ul>
                        <li style="list-style: none"><h5 style="color:  #999898;"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Tạo đơn hàng cực đơn giản</h5></li>
                        <li style="list-style: none"><h5 style="color:  #999898;"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Theo dõi đơn hàng theo thời gian thực</h5></li>
                        <li style="list-style: none"><h5 style="color:  #999898;"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Tra cứu giá cước nhanh chóng</h5></li>
                        <li style="list-style: none"><h5 style="color:  #999898;"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Quản lý danh sách đơn hàng dễ dàng</h5></li>
                        <li style="list-style: none"><h5 style="color:  #999898;"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Quản lý chi phí, công nợ vận chuyển</h5></li>
                        <li style="list-style: none"><h5 style="color:  #999898;"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Sử dụng trên đa thiết bị</h5></li>
                    </ul>
                </div>
                <div class="row" style="margin-top: 20px;text-align: center">
                    <button class="btn btn1" STYLE="text-align: center;color: white;border-radius: 10px;width: 50%;">XEM HƯỚNG DẪN</button>
                </div>
            </div>
            <div class="col-sm-5">
                <img src="{{asset('images/front/banner/banner_1.png')}}" style="width: 100%">
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <div class="row lienhe" id="tuvanngay">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row" style="text-align: center;margin-top: 30px">
                        <h3 style="color: #5a5a5a;font-weight: bold;text-align: center">LIÊN HỆ ĐỂ ĐƯỢC PHỤC VỤ TỐT HƠN</h3>
                    </div>
                    <div class="row" style="margin-top:40px">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('images/front/icon/phone_1.png')}}" style="width: 40px">
                                </div>
                                <div class="col-sm-10">
                                    <p style="font-weight: bold;font-size: 30px;color:#5a5a5a ">190018210</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('images/front/icon/dongho_1.png')}}" style="width: 40px">
                                </div>
                                <div class="col-sm-10">
                                    <p style="font-size: 16px;color: #aca9a9" >Thời gian làm việc:<br>
                                        07:00 - 21:00 (Thứ hai - Chủ nhật)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('images/front/icon/acount_1.png')}}" style="width: 40px">
                                </div>
                                <div class="col-sm-10">
                                    <p style="font-weight: bold;font-size: 16px;color:#5a5a5a ">
                                        <span style="font-weight: bold;font-size: 20px;">190018210</span><br>
                                        (call 24/7)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('images/front/icon/mail.png')}}" style="width: 40px">
                                </div>
                                <div class="col-sm-10">
                                    <p style="font-size: 16px;color: #aca9a9" >cskh@vantaibacnam.vn
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <p style="text-align: center;font-size: 16px;color: #aca9a9">Dành cho khách hàng muốn nhận thông tin và cập nhật bảng giá tốt nhất</p>
                    </div>
                    <div class="row" style="width: 80%;background-color:#454343;border-radius: 5px;margin-left: 40px">
                        <form method="post" action="{{url('/newsletter/add')}}">
                            @csrf
                            <div class="col-sm-8">
                                <input type="text" name="email" placeholder=" Nhập email" style="width: 100%;background-color: white;border: 1px solid;border-radius: 10px;height: 30px;margin: 10px 10px 10px 20px;">
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn1" style="margin-top: 8px">Đăng ký ngay</button>
                            </div>
                            <div class="col-sm-2"></div>
                        </form>
                    </div>
                    <div class="row" style="margin-top: 10px;width:95%">
                        <img src="{{asset('images/front/banner/banner_2.png')}}" style="width: 100%">
                    </div>
                </div>
                <div class="col-sm-4">
                    <form method="post" action="{{url('transport/support')}}" style="width: 100%;margin-top: 10px">
                        @csrf
                        <div class="row form-tv" style="padding-bottom: 20px">
                            <div class="row" style="text-align: center">
                                <h3 style="color:white;text-align: center;margin-left: 10px">NHẬN TƯ VẤN VẬN CHUYỂN</h3>
                            </div>
                            <div class="row" style="margin-top: 20px">
                                <ul>
                                    <li style="background-color: #1d1d1d;text-align: center;height: 70px;width: 70px">
                                        <p style="font-size: 16px; color: white"><span style="font-size: 30px">00</span>
                                            <br>Ngày</p>
                                    </li>
                                    <li style="background-color: #1d1d1d;text-align: center;height: 70px;width: 70px">
                                        <p style="font-size: 16px; color: white"><span style="font-size: 30px">12</span>
                                            <br>Giờ</p>
                                    </li>
                                    <li style="background-color: #1d1d1d;text-align: center;height: 70px;width: 70px">
                                        <p style="font-size: 16px; color: white"><span style="font-size: 30px">42</span>
                                            <br>Phút</p>
                                    </li>
                                    <li style="background-color: #1d1d1d;text-align: center;height: 70px;width: 70px">
                                        <p style="font-size: 16px; color: white"><span style="font-size: 30px">24</span>
                                            <br>Giây</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="row" style="margin-top: 15px;text-align: center">
                                <p style="color:darkgrey;font-size: 16px;width: 90%;margin: 0px auto">
                                    Quý khách để lại thông tin hàng hóa cần vận
                                    chuyển sẽ nhận ngay ưu đãi lên tới 20% cước và
                                    chúng tôi sẽ gọi tư vấn ngay trong vòng 02 phút
                                </p>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="name" placeholder="Tên đơn vị" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="phone" placeholder="Số điện thoại" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="email" placeholder="Nhập email" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="name_product" placeholder="Tên mặt hàng" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="weight" placeholder="Trọng lượng/Cân nặng" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="address_s" placeholder="Địa chỉ gửi hàng" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px;margin-bottom: 20px">
                                <input type="text" name="address_r" placeholder="Địa chỉ nhận hàng" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin:0px auto;text-align: center">
                                <button type="submit" class="btn btn1" style="margin-top: 8px;color: white;font-weight: bold;font-size: 18px;width: 70%;text-align: center">Nhận tư vấn ngay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row tuyenduong">
        <img src="{{asset('images/front/banner/banner_3.png')}}" width="100%">
    </div>
    <div class="row HD_send">
        <div class="row" style="margin-left: 46%;margin-top: 10px" >
            <div class="row" style="width: 250px;background-color: white;box-shadow: 5px 5px dimgrey">
                <div class="row" style="width: 80%;height: 100px;background-color: #5a5a5a;margin: 0px auto;margin-top: 5px">

                </div>
                <div class="row" style="margin-top: 5px;text-align: center;width: 90%;margin-left: 10px">
                    <a href="#" style="text-align: center;"><p style="color: #9e9d9d"><span style="color: #efaf3d">[VIDEO]</span> Hướng dẫn gửi hàng dành
                            cho đối tác lần đầu sử dụng...</p></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 54%;margin-top: 10px">
            <div class="row" style="width: 250px;background-color: white;box-shadow: 5px 5px dimgrey">
                <div class="row" style="width: 80%;height: 100px;background-color: #5a5a5a;margin: 0px auto;margin-top: 5px">

                </div>
                <div class="row" style="margin-top: 5px;text-align: center;width: 90%;margin-left: 10px">
                    <a href="#" style="text-align: center;"><p style="color: #9e9d9d"><span style="color: #efaf3d">[VIDEO]</span> Hướng dẫn gửi hàng dành
                            cho đối tác lần đầu sử dụng...</p></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 60%;margin-top: 10px">
            <div class="row" style="width: 250px;background-color: white;box-shadow: 5px 5px dimgrey">
                <div class="row" style="width: 80%;height: 100px;background-color: #5a5a5a;margin: 0px auto;margin-top: 5px">

                </div>
                <div class="row" style="margin-top: 5px;text-align: center;width: 90%;margin-left: 10px">
                    <a href="#" style="text-align: center;"><p style="color: #9e9d9d"><span style="color: #efaf3d">[VIDEO]</span> Hướng dẫn gửi hàng dành
                            cho đối tác lần đầu sử dụng...</p></a>
                </div>
            </div>

        </div>
        <div class="row" style="margin-left: 54%;margin-top: 10px">
            <div class="row" style="width: 250px;background-color: white;box-shadow: 5px 5px dimgrey">
                <div class="row" style="width: 80%;height: 100px;background-color: #5a5a5a;margin: 0px auto;margin-top: 5px">

                </div>
                <div class="row" style="margin-top: 5px;text-align: center;width: 90%;margin-left: 10px">
                    <a href="#" style="text-align: center;"><p style="color: #9e9d9d"><span style="color: #efaf3d">[VIDEO]</span> Hướng dẫn gửi hàng dành
                            cho đối tác lần đầu sử dụng...</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row cate_product">
        <img src="{{asset('images/front/banner/banner_5.png')}}" width="100%">
    </div>
    <div class="row doitac">
        <div class="row" style="margin-top: 5%;text-align: center">
            <h3 style="text-align: center;color: #454343">NHỮNG ĐỐI TÁC LUÔN TIN DÙNG</h3>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/1.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/2.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/3.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/4.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/5.png')}}" style="width: 80%;height: 60px">
                    </div>

                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/1.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/2.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/3.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/4.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/5.png')}}" style="width: 80%;height: 60px">
                    </div>

                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/1.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/2.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/3.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/4.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/5.png')}}" style="width: 80%;height: 60px">
                    </div>

                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/1.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/2.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/3.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/4.png')}}" style="width: 80%;height: 60px">
                    </div>
                    <div class="col-sm-2" >
                        <img src="{{asset('images/front/icon/5.png')}}" style="width: 80%;height: 60px">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row news">
        <div class="row" style="text-align: center;margin-top: 5%">
            <h3 style="font-weight: bold;color: #5a5a5a;text-align: center">TIN TỨC - KHUYẾN MẠI</h3>
        </div>
        <div class="row" style="margin-top:5%">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="row">
                    @foreach($news as $new)
                        <div class="col-sm-3">
                            <div class="row"  style="float:left;border-radius: 5px;box-shadow: 5px 5px gainsboro;width: 95%">
                                <div class="row" style="background-color: #6a6a6a;height: 150px">
                                    <?php
                                    $images = isset($new->images) ? json_decode($new->images) : array();
                                    ?>
                                    @if(!empty($images))
                                        <a href="{{url('/news/detail/'.$new->id)}}"><img src="{{asset($images['0'])}}" alt="" style="width: 100%;height: 100%" /></a>
                                    @endif
                                </div>
                                <div class="row" style="background-color: white;">
                                    <div class="row">
                                        <h5 style="color: #efaf3d">{{$new->name}}</h5>
                                    </div>
                                    <div class="row" style="padding-right: 10px">
                                        <h5 style="color: black;font-weight: bold">
                                            {{$new->intro}}
                                        </h5>
                                    </div>
                                    <div class="row">
                                        <h5 style="color: #999898">{{$new->updated_at}}</h5>
                                    </div>
                                    <div class="row" style="margin-bottom:10px ">
                                        <a href="{{url('/news/detail/'.$new->id)}}" style="float: right;color: #efaf3d;padding-right: 10px">Xem thêm ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row" style="margin-left: 5%">
                    {{$news->links()}}
                </div>

               {{-- <div class="row">
                    <div class="col-sm-3">
                            <div class="row"  style="float:left;border-radius: 5px;box-shadow: 5px 5px gainsboro;width: 95%">
                                <div class="row" style="background-color: #6a6a6a;height: 150px"></div>
                                <div class="row" style="background-color: white;">
                                    <div class="row">
                                        <h5 style="color: #efaf3d">Blog Quy long</h5>
                                    </div>
                                    <div class="row" style="padding-right: 10px">
                                        <h5 style="color: black;font-weight: bold">
                                            Quy Long Logistics chung tay giảm cước
                                            hỗ trợ doanh nghiệp chống dịch Covid-19
                                        </h5>
                                    </div>
                                    <div class="row">
                                        <h5 style="color: #999898">29/04/2020 | 17:43</h5>
                                    </div>
                                    <div class="row" style="margin-bottom:10px ">
                                        <a href="#" style="float: right;color: #efaf3d;padding-right: 10px">Xem thêm ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm-3">
                        <div class="row"  style="float:left;border-radius: 5px;box-shadow: 5px 5px gainsboro;width: 95%">
                            <div class="row" style="background-color: #6a6a6a;height: 150px"></div>
                            <div class="row" style="background-color: white;">
                                <div class="row">
                                    <h5 style="color: #efaf3d">Blog Quy long</h5>
                                </div>
                                <div class="row" style="padding-right: 10px">
                                    <h5 style="color: black;font-weight: bold">
                                        Quy Long Logistics chung tay giảm cước
                                        hỗ trợ doanh nghiệp chống dịch Covid-19
                                    </h5>
                                </div>
                                <div class="row">
                                    <h5 style="color: #999898">29/04/2020 | 17:43</h5>
                                </div>
                                <div class="row" style="margin-bottom:10px ">
                                    <a href="#" style="float: right;color: #efaf3d;padding-right: 10px">Xem thêm ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row"  style="border-radius: 5px;box-shadow: 5px 5px #c6c2c2;width: 95%">
                            <div class="row" style="background-color: #6a6a6a;height: 150px"></div>
                            <div class="row" style="background-color: white;">
                                <div class="row">
                                    <h5 style="color: #efaf3d">Blog Quy long</h5>
                                </div>
                                <div class="row" style="padding-right: 10px">
                                    <h5 style="color: black;font-weight: bold">
                                        Quy Long Logistics chung tay giảm cước
                                        hỗ trợ doanh nghiệp chống dịch Covid-19
                                    </h5>
                                </div>
                                <div class="row">
                                    <h5 style="color: #999898">29/04/2020 | 17:43</h5>
                                </div>
                                <div class="row" style="margin-bottom:10px ">
                                    <a href="#" style="float: right;color: #efaf3d;padding-right: 10px">Xem thêm ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <div class="row" style="margin-bottom: 5%">
                </div>
            </div>
        </div>
    </div>

@endsection
