<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'idSP';
    public $timestamps = false;

     public function HangSanXuat(){

    	return $this->belongsTo('App\HangSanXuat', 'idHangSX', 'idHangSX');
    }
}
