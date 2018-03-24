@extends('layout.master')

@section('content')

@if (Session::has('thongbao'))
<div class="alert alert-success">{{ Session::get('thongbao') }}</div>
@endif

 <div class="container">
        <div class="row">
            <div class="col dat-hang">
                <h2>Đặt Hàng</h2>
            </div>
        </div>

        <form action="{{route('thanhtoan')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-6 form">
                    <h3>Thông Tin Khách Hàng</h3>
                    <hr>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Họ và tên *</label>
                                    <input type="text" class="form-control" name="hoten" required="" placeholder="Nhập họ tên">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số Điện Thoại *</label>
                                    <input type="text" class="form-control" name="sodienthoai" required="" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Email *</label>
                                    <input type="email" class="form-control" name="email" required="" placeholder="sadlove@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Giới tính: &nbsp;&nbsp;&nbsp;</label>
                                    <label><input type="radio" name="gioitinh" value="1"> Nam</label>&nbsp;
                                    <label><input type="radio" name="gioitinh" value="0"> Nữ</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Địa chỉ *</label>
                                    <input type="text" class="form-control" name="diachi" required="" placeholder="Nhập địa chỉ nhận hàng">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Ghi chú:</label>
                                    <textarea rows="4" class="form-control" name="ghichu" required=""></textarea>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="col-md-6">
                    <h3>Thông Tin Sản Phẩm</h3>
                    <hr>
                    @foreach($content as $sp)
                    <div class="col-md-12">
                        <div class="cart-listing">
                            <div class="media" id="media5">
                                <div class="media-left">
                                    <a href="#"><img width="30%" src="images/sanpham/{{$sp->options->img}}" alt="" class="img-responsive"></a>
                                </div>
                                <div class="media-body ">
                                    <a id="remove-ajax" style="float: right;" href="#" class="remove-cart-item" value="5">×</a>
                                        <h4 style="font-size: 18px">{{$sp->name}}</h4>
                                        <div class="mini-cart-qty">Số lượng: {{$sp->qty}}</div>
                                        <div class="mini-cart-price">Giá: {{number_format($sp->price)}}đ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <hr>
                    <div class="col-md-12 text-right">
                        <p style="margin-top: 20px; color: red; font-size: 18px">Tổng tiền: {{$total}}đ</p>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group text-right" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-danger btn-md fwb">
                                <i class="fa fa-shopping-cart"> Đặt hàng</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@stop