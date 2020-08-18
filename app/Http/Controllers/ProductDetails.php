<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetails extends Controller
{
    
    public function getProductdetails(Request $request)
    {
            return $request->productName;
    }
}
