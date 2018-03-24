@extends('layout.master')

@section('content')
 <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="#">Tin Tức</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="container">
        <div class="row" style="margin-top: 20px">
	        <div class="col-md-2"></div>
	        <div class="col-md-8">
	        @foreach($tintuc as $tin)
	        	<div class="row">
	        		<div class="col-md-4 tintuc">
	        			<img src="images/tintuc/{{ $tin->urlHinhTin }}" height="200px">
	        		</div>
	        		<div class="col-md-8">
	        			<h4>{{ $tin->TieuDe }}</h4>
	        			<p>{!! $tin->TomTat !!}</p>
	        			<a href="{{ route('chitiettin',$tin->idTin) }}" class="btn btn-info" style="margin-bottom: 30px;">Xem chi tiết</a>
	        		</div>
	        	</div>
			@endforeach
	        </div>	
	        </div>
        </div>
        </div>

    </div>
   
@endsection