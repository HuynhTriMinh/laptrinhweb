<body>
    <div class="container-fluid header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 header-left">
                    <a href="#">
                    <img src="images/header_logo.jpg" alt="Logo website"></a>
                </div>
                <div class="col-md-6 header-mid">
                    <div class="row header-mid-top">
                        <p>IPHONE MINH</p>
                    </div>
                    <div class="row header-mid-botton">
                    <p> Hotline: 01212228255 </p>
                    </div>
                </div>
                <div class="col-md-3 header-right">
                    <div class="row">
                        <div class="col-md-6 header-right1">
                            <img src="images/Icon_giahong2.png" alt="">
                            <b>Giỏ hàng</b>
                        </div>
                        <div class="col-md-6">
                            <img src="images/header_banner1.png" alt="">
                        </div>
                    </div>
                    <div class="row">

                    <form action="{{route('timkiem')}}" method="POST">
                    {{ csrf_field() }}
                        <input type="text" name="timkiem" placeholder="Nhập từ khóa cần tìm">
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
