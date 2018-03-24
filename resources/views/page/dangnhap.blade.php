<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>SadL0v3</title>
</head>
<body>
	<h2 style="text-align: center;" class="dangnhap">Đăng Nhập</h2>
	<div class="container">
		<div class="row">
			<div class="col"></div>
			
			<div class="col">
			<form action="{{route('dangnhap')}}" method="POST">{{csrf_field()}}
		        <div class="form-group">
		            <label class="control-label">Tên Đăng Nhập:</label>
		            <input type="text" class="form-control" name="tendangnhap" required="" placeholder="Nhập tên đăng nhập">
		        </div>
		        <div class="form-group">
		            <label class="control-label">Mật Khẩu:</label>
		            <input type="password" class="form-control" name="matkhau" required="" placeholder="Nhập mật khẩu">
		        </div>
		        <div class="form-group text-center trove-trangchu" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-danger btn-md fwb">
                            <i class="fa fa-shopping-cart"> Đăng Nhập</i>
                        </button>
						<a href="{{route('trangchu')}}">Quay Về Trang Chủ</a>
                </div>
				</form>
		    </div>
		    <div class="col"></div>
    	</div>
    </div>
</body>
</html>