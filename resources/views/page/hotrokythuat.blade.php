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
                <h2 style="margin-top: 20px; text-align: center; text-transform: uppercase; font-weight: bold; ">Hổ trợ kỹ thuật</h2>
                <img style="width: 100%" src="upload/hotrokythuat.png">
            </div>
        </div>
        <p style="margin-top: 20px">
        	<b>Dưới đây là một số thắc mắc thường gặp khi mua hàng online:</b> <Br>

			<b>Tôi muốn mua hàng phải làm sao?</b><Br>
			Bạn có thể tìm kiếm các sản phẩm bằng cách sử dụng các chức năng tìm kiếm tại website. Sau khi đã nắm bắt được đầy đủ thông tin về sản phẩm cần mua như : tên máy, phụ kiện kèm theo, giá và khuyến mãi tại thời điểm mua, bạn vui lòng thực hiện các bước sau:<Br>


			 <b>Cách 1:</b><Br> Gọi điện thoại đến tổng đài 0462.777.333 hoặc 043.1234.9999 từ 8h30-21h30 (cả CN & ngày lễ) nhân viên chúng tôi luôn sẵn sàng phục vụ bạn.<Br>
			 
			<b>Cách 2:</b> Gửi mail order chi tiết vào email didongshop.order@gmail.com<Br>
			 Mẫu Mail Order:<Br>
			 <b>Tên Khách Hàng:</b> Nguyễn Văn A; SĐT: 0988XXXXX; Email: hotrodidongshop@gmail.com<Br>
			 <b>Sản Phẩm Đặt Hàng:</b> LG Optimus G Brandnew<Br>
			 <b>Địa chỉ nhận hàng:</b> Chi nhánh: 180 Cao Lỗ - P4 Q.8 TP.HCM<Br>
			 <b>Yêu Cầu Thêm:</b> Cài OS cao nhất, tiếng việt, các game, từ điển..<Br>
			Hệ thống didongshop.tk sẽ gửi thông tin xác nhận mua hàng vào email và SMS đến số điện thoại di động mà quý khách đã cung cấp. Tối đa 2 giờ sau khi đặt hàng (trong giờ làm việc 8h - 22h) nhân viên bán hàng trực tiếp của didongshop.tk sẽ liên hệ với quý khách hàng để làm thủ tục giao hàng.<Br>
			</p></div>
        </div>
        </div>

    </div>

    @stop