@extends('layout.master')

@section('content')

@if (Session::has('thongbao'))
<div class="alert alert-success">{{ Session::get('thongbao') }}</div>
@endif

 <div class="container">

        <div class="container">
        <div class="row">
        <div class="col-md-8">
        <div class="row">
            <div class="col dat-hang">
                <h2 style="margin-top: 20px; text-align: center; text-transform: uppercase; font-weight: bold; ">UY TÍN CHẤT LƯỢNG</h2>
                <img style="width: 100%" src="upload/uytinchatluong.jpg">
            </div>
        </div>
        <p style="margin-top: 20px;">
        	Chúng tôi rất trân trọng sự tin yêu của Quý khách đã sử dụng dịch vụ Online trong thời gian qua, đó cũng là động lực để chúng tôi không ngừng nỗ lực và hoàn thiện mình ngày một tốt hơn.<br>

			Với năng lực tiếp nhận vẫn còn nhiều giới hạn nên trong thời gian gần đây chúng tôi có thể chưa phục vụ hết 100% khách hàng trọn vẹn với cam kết trên.<br> Do đó, chúng tôi xin phép được <b>"ƯU TIÊN PHỤC VỤ"</b> những khách hàng thật sự có nhu cầu thật sự cần tư vấn hoặc mua hàng, đồng thời <b>HẠN CHẾ PHỤC VỤ</b> các khách hàng liên hệ tổng đài 1800.1060 nhiều lần nhưng chưa rõ mục đích, hoặc yêu cầu đặt hàng nhiều lần trên website nhưng không nhận hàng.<br> Điều này có thể giúp chúng tôi phục vụ những khách hàng thật sự một cách tốt nhất và nhanh nhất.<br> Trong một vài trường hợp, Quy trình phục vụ làm Quý khách phiền lòng, mong quý khách thông cảm và vui lòng phản hồi cho chúng tôi kiểm tra và khắc phục.<br> didongshop.tk cam kết luôn nỗ lực để phục vụ khách hàng ngày một tốt hơn!

			Trân trọng,
			</p></div>
        </div>
        </div>

    </div>

    @stop