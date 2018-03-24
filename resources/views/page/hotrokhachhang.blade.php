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
                <h2 style="margin-top: 20px; text-align: center; text-transform: uppercase; font-weight: bold; ">Hổ trợ khách hàng</h2>
                <img style="width: 100%" src="upload/hotrokhachhang.jpg">
            </div>
        </div>
        <p style="">
        	<b>Điều kiện đổi trả:</b><br>

			Còn đầy đủ hộp sản phẩm (mất hộp thu phí 2%).<br>
			Trong trường hợp máy không lên nguồn hoặc không xác định được lỗi, phải chuyển Trung Tâm Bảo Hành của Hãng thẩm định trước khi ra quyết định nhập đổi, nhập trả.<br>
			Còn đầy đủ phiếu bảo hành (nếu có) và phụ kiện đi kèm (mất thu phí theo qui định và lớn nhất là 5% trên giá hoá đơn).<br>
			<b>Quà khuyến mãi:</b> thu phí theo giá hoàn lại do TGDĐ công bố khi bán sản phẩm. Nếu không công bố giá trị khuyến mãi thì sẽ thu phí không lớn hơn 5% giá trị cho mỗi món quà khuyến mãi .<br>
			Lưu ý: đối với sản phẩm mua trả góp:<br>

			<b>Trong 14 ngày đầu tiên:</b> huỷ hợp đồng, không chịu phí.<br>
			Sau 14 ngày: quý khách phải thanh lý hợp đồng và chịu phí theo từng công ty trả góp<br>

			 Đối với ốp lưng, bao da, miếng dán mua cùng với máy (điện thoại, máy tính bảng): Hỗ trợ nhập trả lại ốp lưng, bao da, miếng dán trong trường hợp khách hàng nhập trả lại điện thoại/máy tính bảng bị lỗi.<br>

			<b>- Quy trình bảo hành:</b><br>

			Trong quá trình sử dụng nếu sản phẩm bị lỗi, quý khách vui lòng mang sản phẩm lỗi đến siêu thị Thế Giới Di Động gần nhất để được hỗ trợ.<br>

			<b>- Đối với phụ kiện chính hãng Apple:</b><br>

			<b>- Thời gian áp dụng:</b> Từ 09/10/2017.<br>

			- Khách hàng mang hóa đơn và hộp sản phẩm (bắt buộc) đến tại cửa hàng Apple để được bảo hành hoặc tại tất cả các cửa hàng của Thế Giới Di Động trên toàn quốc. Thế Giới Di Động sẽ hỗ trợ chuyển sản phẩm bảo hành giúp khách hàng tới trung tâm bảo hành của Apple. Việc quyết định tình trạng lỗi có thuộc diện bảo hành hay không sẽ do Apple quyết định.<br>

			- Đối với phụ kiện chỉ bán online, quý khách có 2 lựa chọn:<br>

			<b>+ Lựa chọn 1:</b> Khách hàng có thể đổi ngay sản phẩm có tại siêu thị với điều kiện là sản phẩm được đổi phải cùng nhóm hàng với sản phẩm lỗi và bù chênh lệch ( nếu có).<br>

			<b>VD:</b> Pin sạc dự phòng chỉ bán online giá 400.000đ khi bị lỗi sẽ được đổi Pin sạc dự phòng giá 400.000đ ( hoặc khác giá và bù/nhận lại tiền chênh lệch) có tại siêu thị.<br>

			<b>+ Lựa chọn 2:</b> Siêu thị Thế Giới Di Động sẽ tiếp nhận và trong 7-10 ngày làm việc sẽ chuyển hàng cần đổi về siêu thị để đổi cho quý khách.<br>
			</p></div>
        </div>
        </div>

    </div>

    @stop