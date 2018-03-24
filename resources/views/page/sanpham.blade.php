@extends('layout.master')

@section('content')
 <div class="container-fluid san-pham">

    <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="#">{{$tieude}}</a>
            
        </div>
        <p>@if(isset($sosanpham)) Có {{($sosanpham)}} sản phẩm.  @endif</p>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($sanpham as $sp)
            <div class="col">
                <div class="row">
                    <div class="col home2">
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
</div>
@endsection