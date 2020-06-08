@extends('backend.layouts.homepageLayout')
@section('title')
    Setting Liên hệ
@endsection
@section('style')
    <style type="text/css">
        .row
        {
            background-color: white;
            margin-top: 3%;
            padding-left: 5%;
            padding-right: 5%;
        }
        .row h4
        {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin: 0px auto;
        }
        .row label
        {
            font-size: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
            <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Cấu hình Liên hệ</h4>
            <form action="{{url('/admin/setting/contact/edit')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Chỉnh sửa liên hệ</label>
                    <div class="col-sm-10">
                            <textarea type="text" name="desc" class="form-control mytinymce" id="descl3"
                                      placeholder="Mô tả chi tiết" required=""><?php echo($contact->desc); ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script type="text/javascript">
        let route_prefix = "{{url('/filemanager')}}";
        $('.lfm-btn').filemanager('image', {prefix: route_prefix});

    </script>

@endsection
