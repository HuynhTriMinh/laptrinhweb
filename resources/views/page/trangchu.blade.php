@extends('layout.master')

@section('content')
 <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="#">Sản Phẩm Nổi Bật</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($sanpham_noibat as $sp)
             <div class="col">
                <div class="row">
                    <div class="col home1">
                        <img src="images/sanpham/{{ $sp->urlHinhSP }}">
                    </div>
                </div>
                <div class="row ghi-chu">
                    <ul>
                        <a href="{{route('chitietsanpham', $sp->idSP)}}">{{$sp->TenSP}}</a>
                        <li>Giá cũ: {{number_format($sp->GiaCu)}} VNĐ</li>
                        <li>Giá: {{number_format($sp->GiaSP)}} VNĐ</li>
                        <div class="addtocart">
                            <a href="{{ route('muahang', $sp->idSP) }}">Mua hàng</a>
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="{{ route('trangdienthoai') }}">Điện Thoại</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($dienthoai as $sp)
            <div class="col">
                <div class="row">
                    <div class="col home1">
                        <img src="images/sanpham/{{ $sp->urlHinhSP }}">
                    </div>
                </div>
                <div class="row ghi-chu">
                    <ul>
                        <a href="{{route('chitietsanpham', $sp->idSP)}}">{{$sp->TenSP}}</a>
                        <li>Giá cũ: {{number_format($sp->GiaCu)}} VNĐ</li>
                        <li>Giá: {{number_format($sp->GiaSP)}} VNĐ</li>
                        <div class="addtocart">
                            <a href="{{ route('muahang', $sp->idSP) }}">Mua hàng</a>
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="{{ route('trangipad') }}">Máy Tính Bảng</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($maytinhbang as $sp)
            <div class="col">
                <div class="row">
                    <div class="col home4">
                        <img src="images/sanpham/{{ $sp->urlHinhSP }}">
                    </div>
                </div>
                <div class="row ghi-chu">
                    <ul>
                        <a href="{{route('chitietsanpham', $sp->idSP)}}">{{$sp->TenSP}}</a>
                        <li>Giá cũ: {{number_format($sp->GiaCu)}} VNĐ</li>
                        <li>Giá: {{number_format($sp->GiaSP)}} VNĐ</li>
                        <div class="addtocart">
                            <a href="{{ route('muahang', $sp->idSP) }}">Mua hàng</a>
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="{{ route('tranglaptop') }}">LAPTOP</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($laptop as $sp)
            <div class="col">
                <div class="row">
                    <div class="col home4">
                        <img src="images/sanpham/{{ $sp->urlHinhSP }}">
                    </div>
                </div>
                <div class="row ghi-chu">
                    <ul>
                        <a href="{{route('chitietsanpham', $sp->idSP)}}">{{$sp->TenSP}}</a>
                        <li>Giá cũ: {{number_format($sp->GiaCu)}} VNĐ</li>
                        <li>Giá: {{number_format($sp->GiaSP)}} VNĐ</li>
                        <div class="addtocart">
                            <a href="{{ route('muahang', $sp->idSP) }}">Mua hàng</a>
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="{{ route('trangphukien') }}">Linh Phụ Kiện</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($phukien as $sp)
            <div class="col">
                <div class="row">
                    <div class="col home4">
                        <img src="images/sanpham/{{ $sp->urlHinhSP }}">
                    </div>
                </div>
                <div class="row ghi-chu">
                    <ul>
                        <a href="{{route('chitietsanpham', $sp->idSP)}}">{{$sp->TenSP}}</a>
                        <li>Giá cũ: {{number_format($sp->GiaCu)}} VNĐ</li>
                        <li>Giá: {{number_format($sp->GiaSP)}} VNĐ</li>
                        <div class="addtocart">
                            <a href="{{ route('muahang', $sp->idSP) }}">Mua hàng</a>
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection