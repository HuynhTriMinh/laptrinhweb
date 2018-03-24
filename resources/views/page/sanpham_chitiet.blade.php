@extends('layout.master')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-5">
                <div>
                    <div class="col home3">
                        <img src="images/sanpham/{{ $sanpham->urlHinhSP }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-7 thongtin">
                <h2>{{$sanpham->TenSP}}</h2>
                <hr>
                <div class="chitiet-gia">
                    <p>Giá cũ: <b>{{number_format($sanpham->GiaCu)}}VNĐ</b></p>
                    <p>Giá mới: <b>{{number_format($sanpham->GiaSP)}}VNĐ</b></p> 
                </div>
                <div class="chitiet-thuonghieu">
                    <p>Thương hiệu: <a href="#">{{$sanpham->HangSanXuat->TenHangSX}}</a></p>
                    <p>Tình trạng: Còn hàng</p>
                </div>
                <br>
                <div class="chitiet-mota">
                    <h4>Mô Tả:</h4>
                    
                    {!!$sanpham->MoTaSP!!}

                </div>
                <br>
                <div class="chitiet-soluong addtocart">
                    <label for="soluong">Số lượng</label>
                    <input type="number" title="soluong" value="1">
                    <a href="{{ route('muahang', $sanpham->idSP) }}">Mua hàng</a>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="thongtinchitiet">
                <h3>Thông Tin Chi Tiết</h3>
            </div>
            <div>
                {!! $sanpham->ChiTietSP !!}
            </div>
        </div>
    </div>
    <div class="container-fluid san-pham">
            <div class="row justify-content-md-center san-pham-noi-bat">
                <a href="#">SẢN PHẨM LIÊN QUAN</a>
            </div>
            <div class="row justify-content-md-center">
                <img src="images/icon_trang.png" alt="">
            </div>
            <div class="row home">

                @foreach ($sanpham_lienquan as $sp)
                <div class="col">
                    <div class="row">
                        <div class="col home2">
                            <img src="images/sanpham/{{ $sp->urlHinhSP }}">
                        </div>
                    </div>
                    <div class="row ghi-chu">
                        <ul>
                            <a href="{{route('chitietsanpham', $sp->idSP)}}">{{ $sp->TenSP }}</a>
                            <li>Giá cũ: {{ number_format($sp->GiaCu) }} VNĐ</li>
                            <li>Giá: {{ number_format($sp->GiaSP) }} VNĐ</li> 
                            <div class="addtocart">
                                <a href="{{route('muahang', $sp->idSP)}}">Mua hàng</a>
                            </div>
                        </ul>
                    </div>
                </div>
                @endforeach

            </div>

    </div>
@endsection