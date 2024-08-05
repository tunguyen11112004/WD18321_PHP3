<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        $listProduct = Product::select('id', 'name', 'price', 'image')->get();

        return response()->json([
            'data' => $listProduct,
            'status_code' => '200',
            'message' => 'success'
        ], 200);
    }

    public function getProduct($idProduct)
    {
        $product = Product::select('id', 'name', 'price', 'image')->first($idProduct);

        return response()->json([
            'data' => $product,
            'status_code' => '200',
            'message' => 'success'
        ], 200);
    }

    public function addProduct(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'price' => 'required'
        ]);

        $data = [
            'name' => $req->name,
            'price' => $req->price
        ];
        $newProduct = Product::create($data);

        return response()->json([
            'data' => $newProduct,
            'status_code' => '200',
            'message' => 'success'
        ], 200);

    }

    public function updateProduct(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'price' => 'required',
            'idProduct' => 'required'
        ]);

        $data = [
            'name' => $req->name,
            'price' => $req->price
        ];
        $product = Product::find($req->idProduct);
        $product->update($data);

        return response()->json([
            'data' => $product,
            'status_code' => '200',
            'message' => 'success'
        ], 200);
    }

    public function deleteProduct(Request $req)
    {
        $req->validate([
            'idProduct' => 'required'
        ]);
        Product::find($req->idProduct)->delete();

        return response()->json([
            'status_code' => '200',
            'message' => 'success'
        ], 200);
    }
}
