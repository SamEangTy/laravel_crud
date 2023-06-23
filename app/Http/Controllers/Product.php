<?php

namespace App\Http\Controllers;

use App\Models\PriceModel;
use Illuminate\Http\Request;
use App\Models\ProductModel;

class Product extends Controller
{
    public function index(){
        $products = ProductModel::all();
        return response($products);
   }
   public function getOnePro($id){
    $product = ProductModel::find($id);
    $price = PriceModel::find($product->price_id);
    $product->price = $price->name ;
    return response(['data' => $product]);
   }
   public function addPro(Request $request){
    $data = $request->all();
    $Product = ProductModel::create($data);

    return response($Product);
   }
   public function updatePro(Request $request,$id){

    $product = ProductModel::find($id); 
    if($product){
        $product->update($request->all());
        return response(['message'=> 'update success', 'data'=>$product]);
    }else{
        return response(['message'=>"product not found!"]);
    }
   }
   public function deletePro($id){

    $product = ProductModel::find($id);
    if($product){
        $product->delete();
        return response(['message' => "delete success"]);
    }else{
        return response(['message' => "id not found"]);
        
    }
   }
}
