<?php

namespace App\Http\Controllers;

use Request, Cart;

class SuaController extends Controller
{
    public function getCapNhat(){
        if(Request::ajax())
        {
            $id = Request::get('id');
            $qty = Request::get('qty');
            Cart::update($id, $qty);
            echo "1";
        }
    }
}
