<?php

namespace App\Http\Controllers;
use App\SanPham;
use App\HangSanXuat;
use Cart;
use App\KhachHang;
use App\DonHang;
use App\ChiTietDonHang;
use Illuminate\Http\Request;
use Auth;
use App\Tin;
//use Request;
class TrangChuController extends Controller
{


    public function getTrangChu()
    {
    	$dienthoai = SanPham::where('idLoaiSP','1')->orderBy("GiaSP","decs")->limit(5)->get();
    	$sanpham_noibat=SanPham::orderBy("SoLanXem","decs")->limit(5)->get();
    	$maytinhbang = SanPham::where('idLoaiSP','2')->orderBy("GiaSP","decs")->limit(5)->get();
    	$phukien = SanPham::where('idLoaiSP','3')->orderBy("GiaSP","decs")->limit(5)->get();
        $laptop = SanPham::where('idLoaiSP','4')->orderBy("GiaSP","decs")->limit(5)->get();
    	return view('page.trangchu',compact('dienthoai','sanpham_noibat','maytinhbang','phukien','laptop'));
    }

    public function getTrangDienThoai(){
        $sanpham = SanPham::where("idLoaiSP", 1)->get();
        // $sosanpham = SanPham::where("idLoaiSP", 1)->count();
        $tieude = "Điện thoại";
        return view('page.sanpham',compact('sanpham', 'tieude', 'sosanpham'));
    }
    public function getTrangIpad(){
        $sanpham = SanPham::where("idLoaiSP", 2)->get();
        // $sosanpham = SanPham::where("idLoaiSP", 2)->count();
        $tieude = "Ipad";
        return view('page.sanpham',compact('sanpham', 'tieude', 'sosanpham'));
    }
    public function getTrangLaptop(){
        $sanpham = SanPham::where("idLoaiSP", 4)->get();
        // $sosanpham = SanPham::where("idLoaiSP", 4)->count();
        $tieude = "Laptop";
        return view('page.sanpham',compact('sanpham', 'tieude', 'sosanpham'));
    }
    public function getTrangPhuKien(){
        $sanpham = SanPham::where("idLoaiSP", 3)->get();
        // $sosanpham =  SanPham::where("idLoaiSP", 3)->count();
        $tieude = "Phụ kiện";
        return view('page.sanpham',compact('sanpham', 'tieude', 'sosanpham'));
    }
    public function getTimKiem(Request $req){
        $sanpham = SanPham::where('TenSP', 'like', "%".$req->timkiem."%")->get();
        // $sosanpham = SanPham::where('TenSP', 'like', "%".$req->timkiem."%")->count();
        $tieude = "Tìm kiếm";
        return view('page.sanpham',compact('sanpham', 'tieude', 'sosanpham'));
    }



    public function getChiTietSanPham($id){
        $sanpham = SanPham::with('HangSanXuat')->where('idSP',$id)->first();
        $sanpham_lienquan = SanPham::where("idLoaiSP", $sanpham->idLoaiSP)->limit(8)->get();
    	return view('page.sanpham_chitiet',compact('sanpham', 'sanpham_lienquan'));
    }



    public function getMuaHang($id){
        $sanpham = SanPham::where('idSP', $id)->first();
        Cart::add(array('id'=>$id, 'name'=>$sanpham->TenSP, 'qty'=>1, 'price'=>$sanpham->GiaSP, 
                        'options'=>array('img'=>$sanpham->urlHinhSP, 'id'=>$sanpham->idSP)));
       return redirect()->route('giohang');
        
    }

    public function getGioHang(){
        $content = Cart::content();
        $total= Cart::subtotal();
        return view('page.giohang', compact('content','total'));
    }

    public function getXoaSanPham($id){
        Cart::remove($id);
        return redirect()->route('giohang');
    }

    public function getCapNhat(){
        if(Request::ajax())
        {
            $id = Request::get('id');
            $qty = Request::get('qty');
            Cart::update($id, $qty);
            echo "1";
        }
    }

    public function getThanhToan(){
        $content = Cart::content();
        $total= Cart::subtotal();
        return view('page.thanhtoan', compact('content','total'));
    }
    public function postThanhToan(Request $request){
            
                    $khachhang = new KhachHang;
                    $khachhang->HoTen=$request->hoten;
                    $khachhang->password=0;
                    $khachhang->NgaySinh=date('Y-m-d');
                    $khachhang->NgayDangKy=date('Y-m-d');
                    $khachhang->KichHoat=0;
                    $khachhang->remember_token=0;
                    $khachhang->Email=$request->email;
                    $khachhang->DienThoai=$request->sodienthoai;
                    $khachhang->DiaChi=$request->diachi;
                    $khachhang->GioiTinh=$request->gioitinh;
                    $khachhang->save();
            
                    $donhang = new DonHang;
                    $donhang->idKhachHang=$khachhang->id;
                    $donhang->NgayDatHang=date('Y-m-d');
                    $donhang->NgayGiaoHang=date('Y-m-d');
                    $donhang->TrangThaiGiaoHang=0;
                    $donhang->TrangThaiThanhToan=0;
                    $donhang->TenNguoiNhan=$request->hoten;
                    $donhang->DiaDiemGiao=$request->diachi;
                    $donhang->DienThoai=$request->sodienthoai;
                    $donhang->Email=$request->email;
                    $donhang->GhiChu=$request->ghichu;
                    $donhang->save();
            
                    $total=Cart::subtotal(0,',','');
                    $content=Cart::content();
                    foreach($content as $key=>$value){
                        $chitietdonhang = new ChiTietDonHang;
                        $chitietdonhang->idDonHang=$donhang->idDonHang;
                        $chitietdonhang->idSP=$value->id;
                        $chitietdonhang->SoLuong=$value->qty;
                        $chitietdonhang->GiaSP=$value->price;
                        $chitietdonhang->GiaKhuyenMai=0;
                        $chitietdonhang->ThanhTien=$total;
                        $chitietdonhang->save();
                    }
            
                    Cart::destroy();
                    return redirect()->back()->with('thongbao', 'Đặt hàng thành công.');    
    }
    public function getDangNhap()
    {
        return view('page.dangnhap');
    }
    public function postDangNhap(Request $request)
    {
        if(Auth::attempt(['Email'=>$request->tendangnhap,'password'=>$request->matkhau]))
        {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back();
        }
    }
    public function getDangXuat()
    {
        Auth::Logout();
        return redirect()->route('dangnhap');
    }
    public function getHotrokhachhang(){
        return view('page.hotrokhachhang');
    }
    public function getHotrokythuat(){
        return view('page.hotrokythuat');
    }
    public function getTuvanmienphi(){
        return view('page.tuvanmienphi');
    }
    public function getUytinchatluong(){
        return view('page.uytinchatluong');
    }
    public function getKhuyenMai(){
        return view('page.khuyenmai');
    }
    public function getTinTuc(){
        $tintuc = Tin::all();
        return view('page.tintuc', compact('tintuc'));
    }
    public function getDichVu(){
        return view('page.dichvu');
    }
    public function getLienHe(){
        return view('page.lienhe');
    }
    public function getChiTietTin($id){
        $tin = Tin::with('LoaiTin')->Where('idTin',$id)->first();
        return view('page.chitiettin', compact('tin'));
    }
    public function getGioiThieu(){
        return view('page.gioithieu');
    }
}
