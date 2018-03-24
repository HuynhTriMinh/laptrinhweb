<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhSanPham extends Model
{
    
    protected $table   = 'HinhSanPham';
     protected $primaryKey = 'idHinh';
    public $timestamps = false;

    public function SanPham(){

    	return $this->belongsTo('App\SanPham', 'idSP', 'idSP');
    }
}
