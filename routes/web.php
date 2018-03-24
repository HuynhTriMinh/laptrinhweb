<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('trangchu');
});
Route::get('trangchu',[
	'as' => 'trangchu',
	'uses' => 'TrangChuController@getTrangChu'
]);
Route::get('chitietsanpham/{id}',[
    'as' => 'chitietsanpham',
    'uses' => 'TrangChuController@getChiTietSanPham'
]);
Route::get('muahang/{id}',[
    'as' => 'muahang',
    'uses' => 'TrangChuController@getMuaHang'
]);
Route::get('giohang',[
    'as' => 'giohang',
    'uses' => 'TrangChuController@getGioHang'
]);
Route::get('xoasanpham/{id}',[
    'as' => 'xoasanpham',
    'uses' => 'TrangChuController@getXoaSanPham'
]);

Route::get('capnhat/{id}/{qty}',[
    'as' => 'capnhat',
    'uses' => 'SuaController@getCapNhat'
]);

Route::get('thanhtoan',[
    'as' => 'thanhtoan',
    'uses' => 'TrangChuController@getThanhToan'
]);
Route::post('thanhtoan',[
    'as' => 'thanhtoan',
    'uses' => 'TrangChuController@postThanhToan'
]);

//menu dưới footer và menu chính
Route::get('hotrokhachhang',[
    'as' => 'hotrokhachhang',
    'uses' => 'TrangChuController@getHotrokhachhang'
]);
Route::get('hotrokythuat',[
    'as' => 'hotrokythuat',
    'uses' => 'TrangChuController@getHotrokythuat'
]);
Route::get('uytinchatluong',[
    'as' => 'uytinchatluong',
    'uses' => 'TrangChuController@getUytinchatluong'
]);
Route::get('tuvanmienphi',[
    'as' => 'tuvanmienphi',
    'uses' => 'TrangChuController@getTuvanmienphi'
]);
Route::get('khuyenmai',[
    'as' => 'khuyenmai',
    'uses' => 'TrangChuController@getKhuyenMai'
]);
Route::get('dichvu',[
    'as' => 'dichvu',
    'uses' => 'TrangChuController@getDichVu'
]);
Route::get('tin',[
    'as' => 'tin',
    'uses' => 'TrangChuController@getTinTuc'
]);
Route::get('lienhe',[
    'as' => 'lienhe',
    'uses' => 'TrangChuController@getLienHe'
]);
Route::get('gioithieu',[
    'as' => 'gioithieu',
    'uses' => 'TrangChuController@getGioiThieu'
]);
Route::get('chitiettin/{id}','TrangChuController@getChiTietTin')->name("chitiettin");



Route::get('trangdienthoai',[
	'as' => 'trangdienthoai',
	'uses' => 'TrangChuController@getTrangDienThoai'
]);
Route::get('trangipad',[
	'as' => 'trangipad',
	'uses' => 'TrangChuController@getTrangIpad'
]);
Route::get('tranglaptop',[
	'as' => 'tranglaptop',
	'uses' => 'TrangChuController@getTrangLaptop'
]);
Route::get('trangphukien',[
	'as' => 'trangphukien',
	'uses' => 'TrangChuController@getTrangPhuKien'
]);
Route::post('timkiem',[
	'as' => 'timkiem',
	'uses' => 'TrangChuController@getTimKiem'
]);




Route::get('dangnhap','TrangChuController@getDangNhap')->name('dangnhap');
Route::post('dangnhap','TrangChuController@postDangNhap')->name('dangnhap');
Route::get('dangxuat','TrangChuController@getDangXuat')->name('dangxuat');

Route::group(['prefix'=>'admin', 'middleware'=>'Login'],function(){

    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'KhachHangController@getDashboard'
    ]);

    Route::group(['prefix'=>'hangsanxuat'], function(){

        Route::get('danhsach','HangSanXuatController@getDanhSach')->name('hangsanxuat');

        Route::get('sua/{id}','HangSanXuatController@getSua'); //gọi trang
        Route::post('sua/{id}', 'HangSanXuatController@postSua'); //post data 


        Route::get('them','HangSanXuatController@getThem');
        Route::post('them', 'HangSanXuatController@postThem');

        Route::get('xoa/{id}', 'HangSanXuatController@getXoa');
    });

    Route::group(['prefix'=>'khachhang'], function(){

        Route::get('danhsach','KhachHangController@getDanhSach')->name('khachhang');

        Route::get('sua/{id}','KhachHangController@getSua'); //gọi trang
        Route::post('sua/{id}', 'KhachHangController@postSua'); //post data 


        Route::get('them','KhachHangController@getThem');
        Route::post('them', 'KhachHangController@postThem');

        Route::get('xoa/{id}', 'KhachHangController@getXoa');
    });

    Route::group(['prefix'=>'loaisanpham'], function(){

        Route::get('danhsach','LoaiSanPhamController@getDanhSach')->name('loaisanpham');

        Route::get('sua/{id}','LoaiSanPhamController@getSua'); //gọi trang
        Route::post('sua/{id}', 'LoaiSanPhamController@postSua'); //post data 


        Route::get('them','LoaiSanPhamController@getThem');
        Route::post('them', 'LoaiSanPhamController@postThem');

        Route::get('xoa/{id}', 'LoaiSanPhamController@getXoa');
    });

    Route::group(['prefix'=>'sanpham'], function(){

        Route::get('danhsach','SanPhamController@getDanhSach')->name('sanpham');

        Route::get('sua/{id}','SanPhamController@getSua'); //gọi trang
        Route::post('sua/{id}', 'SanPhamController@postSua'); //post data 


        Route::get('them','SanPhamController@getThem');
        Route::post('them', 'SanPhamController@postThem');

        Route::get('xoa/{id}', 'SanPhamController@getXoa');
    });

    Route::group(['prefix'=>'loaitin'], function(){

        Route::get('danhsach','LoaiTinController@getDanhSach')->name('loaitin');

        Route::get('sua/{id}','LoaiTinController@getSua'); //gọi trang
        Route::post('sua/{id}', 'LoaiTinController@postSua'); //post data 


        Route::get('them','LoaiTinController@getThem');
        Route::post('them', 'LoaiTinController@postThem');

        Route::get('xoa/{id}', 'LoaiTinController@getXoa');
    });

    Route::group(['prefix'=>'tintuc'], function(){

        Route::get('danhsach','TinController@getDanhSach')->name('tintuc');
        Route::get('sua/{id}','TinController@getSua'); //gọi trang
        Route::post('sua/{id}', 'TinController@postSua'); //post data 


        Route::get('them','TinController@getThem');
        Route::post('them', 'TinController@postThem');

        Route::get('xoa/{id}', 'TinController@getXoa');
    });

    Route::group(['prefix'=>'donhang'], function(){

        Route::get('danhsach','DonHangController@getDanhSach')->name('donhang');
        Route::get('sua/{id}','DonHangController@getSua'); //gọi trang
        Route::post('sua/{id}', 'DonHangController@postSua'); //post data 


        Route::get('them','DonHangController@getThem');
        Route::post('them', 'DonHangController@postThem');

        Route::get('xoa/{id}', 'DonHangController@getXoa');
    });

    Route::group(['prefix'=>'chitietdonhang'], function(){

        Route::get('danhsach','ChiTietDonHangController@getDanhSach')->name('chitietdonhang');
        Route::get('sua/{id}','ChiTietDonHangController@getSua'); //gọi trang
        Route::post('sua/{id}', 'ChiTietDonHangController@postSua'); //post data 


        Route::get('them','ChiTietDonHangController@getThem');
        Route::post('them', 'ChiTietDonHangController@postThem');

        Route::get('xoa/{id}', 'ChiTietDonHangController@getXoa');
    });

    Route::group(['prefix'=>'hinhsanpham'], function(){

        Route::get('danhsach','HinhSanPhamController@getDanhSach')->name('hinhsanpham');
        Route::get('sua/{id}','HinhSanPhamController@getSua'); //gọi trang
        Route::post('sua/{id}', 'HinhSanPhamController@postSua'); //post data 


        Route::get('them','HinhSanPhamController@getThem');
        Route::post('them', 'HinhSanPhamController@postThem');

        Route::get('xoa/{id}', 'HinhSanPhamController@getXoa');
    });

    Route::get('search', [
        'as'   => 'searchDashboard',
        'uses' => 'KhachHangController@getSearch'
    ]);

    Route::group(['prefix'=>'ajax'], function(){

        Route::get('giasanpham/{idSP}', [
            'as'   => 'ajax',
            'uses' => 'AjaxController@getGiaSanPham'
        ]);
        Route::get('giaKMsanpham/{idSP}', [
            'as'   => 'ajax',
            'uses' => 'AjaxController@getGiaKMSanPham'
        ]);
        Route::get('thanhtiensanpham/{idSP}/{SoLuong}', [
            'as'   => 'ajax',
            'uses' => 'AjaxController@getThanhTien'
        ]);

    });
   
});
