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
                <h2 style="margin-top: 20px; text-align: center; text-transform: uppercase; font-weight: bold; ">Tư vấn miễn phí</h2>
                <img style="width: 100%" src="upload/tuvanmienphi.jpg">
            </div>
        </div>
        <p style="margin-top: 20px;">
        	<b>Tổng đài didongshop.tk là nơi chuyên cung cấp thông tin, giải đáp các thắc mắc và hỗ trợ khách hàng chuyên nghiệp. Từ ngày 01/08/2016, didongshop.tk miễn phí toàn bộ cước gọi đến tổng đài chăm sóc khách hàng. Khi khách hàng gọi đến tổng đài didongshop.tk dù dùng nội mạng hay ngoại mạng cũng đều được miễn phí tất cả các cuộc gọi.</b><br>
			Các đầu số tổng đài didongshop.tk nên biết<br>

			Để phục vụ khách hàng tốt nhất, Viettel chia ra làm các nhóm ngành dịch vụ riêng biệt và có các tổng đài tương ứng. Ví dụ:<br>

			<b>- Tổng đài 18008098:</b> tư vấn và giải đáp thông tin dịch vụ không dây: di dộng, HomePhone, Dcom.<br>

			<b>- Tổng đài 18008119:</b> Tư vấn, báo hỏng và hỗ trợ khách hàng sử dụng các dịch vụ cố định (điện thoại cố định), truyền hình, internet có dây (ADSL, FTTH).<br>

			<b>- Tổng đài 18008000:</b> Giải đáp các thắc mắc dành cho doanh nghiệp, trường học, hỗ trợ thông tin dịch vụ kênh Leasedline, Office-wan, dịch vụ quản lý phần mềm, quản lý phương tiện vận tải, chữ ký số,...<br>
			</p></div>
        </div>
        </div>

    </div>

    @stop