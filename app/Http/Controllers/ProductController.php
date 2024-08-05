<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listProduct()
    {
        $listProduct = DB::table('product')
            ->join('category', 'category.id', '=', 'category_id')
            ->select('product.id', 'product.name', 'product.price', 'product.category_id', 'product.view', 'category.category_name')
            ->orderBy('view', 'desc')
            ->get();
        return view('product/listProduct')->with([
            'listProduct' => $listProduct
        ]);
    }

    public function timKiemProduct(Request $req)
    {
        $tukhoa = $req->nameProduct;
        $listProduct = DB::table('product')
            ->join('category', 'category.id', '=', 'category_id')
            ->select('product.id', 'product.name', 'product.price', 'product.category_id', 'product.view', 'category.category_name')
            ->where('product.name', 'like', '%' . $tukhoa . '%')
            ->get();
        return view('product/listProduct')->with([
            'listProduct' => $listProduct
        ]);
    }

    public function addProduct()
    {
        $category = DB::table('category')->select('id', 'category_name')->get();
        return view('product/addProduct')->with([
            'category' => $category
        ]);
    }

    public function addPostProduct(Request $req)
    {
        $data = [
            'name' => $req->nameProducts,
            'category_id' => $req->categoryProducts,
            'price' => $req->priceProducts,
            'create_at' => Carbon::now(),
            'update_at' => Carbon::now()
        ];
        DB::table('product')->insert($data);

        return redirect()->route('product.listProduct');
    }

    public function deleteProduct($idProduct)
    {
        
        DB::table('product')->where('id', $idProduct)->delete();
        return redirect()->route('product.listProduct');
    }

    public function updateProduct($idProduct)
    {
        $category = DB::table('category')->select('id', 'category_name')->get();
        $product = DB::table('product')->where('id', $idProduct)->first();
        return view('product.updateProduct')->with([
            'product' => $product,
            'category' => $category

        ]);
    }

    public function updatePostProduct(Request $req)
    {
        $data = [
            'name' => $req->nameProducts,
            'category_id' => $req->categoryProducts,
            'price' => $req->priceProducts,
            'view' => $req->viewProducts,
            'update_at' => Carbon::now()
        ];
        DB::table('product')->where('id', $req->idProduct)->update($data);

        return redirect()->route('product.listProduct');
    }
}

?>