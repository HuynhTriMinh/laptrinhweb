<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    
    protected $table   = 'BinhLuan';
    public $timestamps = false;

    public function KhachHang(){

    	return $this->belongsTo('App\KhachHang', 'idKhachHang', 'idKhachHang');
    }
    public function Tin(){

    	return $this->belongsTo('App\Tin', 'idTin', 'idTin');
    }
}
