<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
       echo '<h2> This is an admin Shop Area</h2>';
    }
    public function product($type, $product_id){ 
        echo '<h2>this is an admin product: '.$type.' With an id: '.$product_id.'</h2>';
       //return view('product');
    }

    
}
