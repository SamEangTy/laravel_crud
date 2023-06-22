<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class Product extends Controller
{
    public function index(){
        $products = ProductModel::all();
        return response(['data'=> $products]);
   }
   public function getOnePro($id){
    $product = ProductModel::find($id);
    return response(['data' => $product]);
   }
   public function addPro(Request $request){

    $Product = ProductModel::create($request->all());

    return response($Product);
   }
   public function updatePro(){
    return response(['message' => "update pro"]);
   }
   public function deletePro(){
    return response(['message' => "delete pro"]);
   }
}
