<?php

namespace App\Http\Controllers;
ini_set('memory_limit', '-1');
use Illuminate\Http\Request;
use DB;

class ProductData extends Controller
{
 
            public function getProductData(Request $request)
            {
                $productName = $request->productName;
                $productSize = implode(" ",$request->productSize);
                $ProductDescription = $request->ProductDescription;
                $ProductPrice = $request->ProductPrice;

                DB::table('product_details')->insert(
                    [
                        'productName' => $productName,
                        'productSize' => $productSize,
                        'productDescription' => $ProductDescription,
                        'productPrice' => $ProductPrice,
                         ]
                );  

                $getProduct = DB::table('product_details')->get();
                return json_encode($getProduct);

            }

            public function getProductDetails(Request $request)
            {
                
                $getProduct = DB::table('product_details')->get();
                return json_encode($getProduct);

            }

            public function laraTestData(Request $request)
            {
                $formData = $request->all();
                DB::table('product_details')->insert(
                    [
                        'productName' => $formData['Product-Name'],
                        'productSize' => implode(" ",$formData['checkselector']),
                        'productDescription' => $formData['Product-Description'],
                        'productPrice' => $formData['Product-Price'],
                         ]
                );  

                $getProduct = DB::table('product_details')->get();
                return view("users.laratestView", ['getProduct'=>$getProduct]);

                //   Both way to access form data ---1
                //    $formData = $request->all();
                //   echo $formData['Product-Name'];   //   ---2

            }

            public function getproductLaraTest()
            {
                $getProduct = DB::table('product_details')->latest()->get();
                dump($getProduct);
               // return view("users.laratestView", ['getProduct'=>$getProduct]);
            }
            
}
