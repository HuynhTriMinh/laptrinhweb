@extends('layout.master')

@section('content')
 <div class="container-fluid san-pham">
        
        <div class="container">
        <div class="row" style="margin-top: 20px">
	        
	   
	        	<div class="row">
	        	
	        		<div class="col-md-8">
	        			<div class="row justify-content-md-center san-pham-noi-bat">
				            <a href="#">{{ $tin->LoaiTin->TieuDeLoaiTin }}</a>
				        </div>
				        <div>Ngày đăng : {{ $tin->NgayDang }}</div>
				        <div class="row justify-content-md-center">
				            <img src="images/icon_trang.png" alt="">
				        </div>
	        
	        			<p style="text-align: justify-all;">{!! $tin->NoiDung !!}</p>
	        		</div>
	        	</div>
			
	    	
	        </div>
        </div>
        </div>

    </div>
   
@endsection