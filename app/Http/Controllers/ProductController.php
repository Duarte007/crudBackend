<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;

class ProductController extends Controller {

    public function insertProduct(Request $request) {
        try{
            $request->validate([
                'cdproduct' => 'required|string|max:4',
                'nmproduct' => 'required|string|max:40',
                'unidade' => 'required|string|max:5'
            ]);
            
            $Product = new Product([
                'cd_product' => $request->cdproduct,
                'nm_product' => $request->nmproduct,
                'un' => $request->unidade
            ]);

            $Product->save();

            return response()->json([
                'message' => __('Product.insert_ok')
            ], 201);
        } catch(\Exception $e){
            return response()->json(['error'=> $e], 400);
        }
    } 

    public function updateProduct(Request $request, $cd_product) {
        try{
            $Product = Product::findOrFail($cd_product);
            
            $Product->fill($request->all())->save();
            
            return response()->json(['data'=> $Product]);
        } catch (\Exception $e){
            return response()->json(['error'=> $e], 400);
        }
    }

    public function deleteProduct(Request $request, $cd_product) {
        try{
            $Product = Product::findOrFail($cd_product);
            $Product->delete();
            return response()->json(['data'=> $Product]);
        } catch (\Exception $e){
            return response()->json(['error'=> $e], 400);
        }
    }

    public function getProducts(Request $request) {
        $Products = Product::all()->sortBy('cd_product')->values()->all();
        return $Products;
    }
}