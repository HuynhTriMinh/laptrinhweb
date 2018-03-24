<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonHang;
use App\KhachHang;
use DB;

class DonHangController extends Controller
{
    
    public function getDanhSach(){

    	$donhang = DB::table('DonHang')
    				->join('KhachHang', 'KhachHang.id', '=', 'DonHang.idKhachHang') // Gộp bảng
    				->get([
    						'DonHang.idDonHang',
    						'DonHang.NgayDatHang',
    						'DonHang.TenNguoiNhan',
    						'DonHang.DiaDiemGiao',
    						'DonHang.NgayGiaoHang',
    						'DonHang.Email',
    						'DonHang.DienThoai',
    						'DonHang.TrangThaiGiaoHang',
    						'DonHang.TrangThaiThanhToan',
    						'KhachHang.HoTen',
    					]);
    	return view('adminDashboard.donhang.danhsach', compact('donhang'));
    }

    public function getThem(){

    	$khachhang = KhachHang::all();
    	return view('adminDashboard.donhang.them', compact('khachhang'));
    }
    public function postThem(Request $request){   // Request: lấy thông tin từ form

    	$this->validate($request,[
        'TenNguoiNhan'=>'required',
        'email'=>'required|email',  //Tên ko empty, ko trùng vs Tin tức tiêu đề
        'sdt'=> 'required|numeric|regex:/(0)[0-9]{9,10}/',
        'DiaDiem'=>'required'
      ],
      [
        'TenNguoiNhan.required' => 'Bạn cần nhập tên người nhận hàng. ',
        'email.required'=>'Chưa nhập email',
        'email.email'=>'Sai định dạng email.',
        'sdt.required'=>'Bạn chưa nhập số điện thoại.',
        'sdt.numeric'=>'Số điện thoại bạn nhập chưa đúng.',
        'sdt.regex'=>'Số điện thoại bạn nhập chưa đúng. Số điện thoại phải là 10 số hoặc 11 số.',
        'DiaDiem.required'=>'Bạn cần nhập địa chỉ giao hàng.'
      ]);

      $donhang = new DonHang;
      $donhang->idKhachHang = $request->KhachHang;
      $donhang->NgayDatHang = $request->NgayDatHang;
      $donhang->TenNguoiNhan = $request->TenNguoiNhan;
      $donhang->Email = $request->email;
      $donhang->DienThoai = $request->sdt;
      $donhang->NgayGiaoHang = $request->NgayGiaoHang;
      $donhang->DiaDiemGiao = $request->DiaDiem;
      $donhang->GhiChu = $request->GhiChu;
      $donhang->TrangThaiGiaoHang = $request->TrangThaiGiaoHang;
      $donhang->TrangThaiThanhToan = $request->TrangThaiThanhToan;

      $donhang->save();
      
      return redirect('admin/donhang/them')->with('thongbao','Thêm thành công');
    }

    public function getXoa($idDonHang){

      $donhang = DonHang::find($idDonHang);
      $so_khach_hang_co_don_hang = DonHang::with('KhachHang')->where('idKhachHang', $donhang->idKhachHang)->count();

      if($so_khach_hang_co_don_hang == 0){
        $donhang->delete();
        return redirect('admin/donhang/danhsach')->with('thongbao', 'Đã xóa thành công.');
      }
    	else{
        return redirect('admin/donhang/danhsach')->with('loi', 'Xóa không thành công. Đơn hàng này đã có khách hàng.');
      }
    }

    public function getSua($idDonHang){

    	$donhang = DonHang::find($idDonHang);
    	$khachhang = KhachHang::all();

    	return view('adminDashboard.donhang.sua', compact('khachhang', 'donhang'));
    }
    public function postSua($idDonHang, Request $request){

    	$this->validate($request,[
        'TenNguoiNhan'=>'required',
        'email'=>'required|email',  //Tên ko empty, ko trùng vs Tin tức tiêu đề
        'sdt'=> 'required|numeric|regex:/(0)[0-9]{9,10}/',
        'DiaDiem'=>'required'
      ],
      [
        'TenNguoiNhan.required' => 'Bạn cần nhập tên người nhận hàng. ',
        'email.required'=>'Chưa nhập email',
        'email.email'=>'Sai định dạng email.',
        'sdt.required'=>'Bạn chưa nhập số điện thoại.',
        'sdt.numeric'=>'Số điện thoại bạn nhập chưa đúng.',
        'sdt.regex'=>'Số điện thoại bạn nhập chưa đúng. Số điện thoại phải là 10 số hoặc 11 số.',
        'DiaDiem.required'=>'Bạn cần nhập địa chỉ giao hàng.'
      ]);

      $donhang = DonHang::find($idDonHang);
      $donhang->idKhachHang = $request->KhachHang;
      $donhang->NgayDatHang = $request->NgayDatHang;
      $donhang->TenNguoiNhan = $request->TenNguoiNhan;
      $donhang->Email = $request->email;
      $donhang->DienThoai = $request->sdt;
      $donhang->NgayGiaoHang = $request->NgayGiaoHang;
      $donhang->DiaDiemGiao = $request->DiaDiem;
      $donhang->GhiChu = $request->GhiChu;
      $donhang->TrangThaiGiaoHang = $request->TrangThaiGiaoHang;
      $donhang->TrangThaiThanhToan = $request->TrangThaiThanhToan;

      $donhang->save();
      
      return redirect('admin/donhang/sua/'.$idDonHang)->with('thongbao','Cập nhật thành công');
    }
}
