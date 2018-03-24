@extends('layout.master')

@section('content')
<div class="container">
        <div class="row giohang">
            <div class="col giohang1">Hình Sản Phẩm</div>
            <div class="col giohang1">Tên Sản Phẩm</div>
            <div class="col giohang1">Số Lượng</div>
            <div class="col giohang1">Giá</div>
            <div class="col giohang1">Cập Nhật</div>
            <div class="col giohang1">Xóa</div>
            <div class="col giohang1">Tổng Cộng</div>
        </div>
        <form action="" method="POST">
        {!! csrf_field() !!}
            @foreach ($content as $sp)
            
            <div class="row">
                <div class="col giohang1">
                    <a href="{{ route('chitietsanpham', $sp->id) }}"><img src="images/sanpham/{{$sp->options->img}}" alt=""></a>
                </div>
                <div class="col giohang1 sanpham"><a href="{{ route('chitietsanpham', $sp->id) }}">{{ $sp->name }}</a></div>
                <div class="col giohang1 sanpham">
                    <input type="text" id="qty{!!$sp->rowId!!}" value="{{$sp->qty }}" >
                </div>
                <div class="col giohang1 sanpham">{{number_format($sp->price)}}</div>
                <div class="col giohang1 sanpham">
                    <a href="#" class="btnCapNhat" id="{!!$sp->rowId!!}" onclick="return false;">Cập Nhật</a>
                </div>
                <div class="col giohang1 sanpham">
                    <a href="{{ route('xoasanpham', $sp->rowId) }}">Xóa</a>
                </div>
                <div class="col giohang1 sanpham">{{number_format($sp->price * $sp->qty)}}đ</div>
            </div>

        @endforeach
        </form>
            <hr>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3 tong-tien">
                    <p>Tổng Tiền: {{$total}}đ</p>
                    <hr>

                        <a href='{{route('thanhtoan')}}' title="btndat-hang">Đặt Hàng</a>

                </div>
            </div>
        
        
    </div>

    <Script src="js/jquery-3.2.1.min.js"></Script>
    <script>
    
    $(document).ready(function(){

        $('.btnCapNhat').click(function(){

            var rowid=$(this).attr('id');
            var qty= $("#qty"+rowid).val();
            var token = $('input[name="_token"]').val();
          
            $.ajax({
                url: 'capnhat/'+rowid+'/'+qty,
                type:'GET',
                cache:false,
                data:{"_token":token,"id":rowid, "qty":qty},
                success:function(data){
                   
                        window.location="giohang";
                }
            });
        });

    });

    </script>   
@endsection