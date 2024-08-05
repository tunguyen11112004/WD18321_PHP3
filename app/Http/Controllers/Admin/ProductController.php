<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function listProduct()
    {
        $products = Product::paginate(10);
        return view('admin.products.list-product')->with([
            'products' => $products,
        ]);
    }

    public function addProduct()
    {
        return view('admin.products.add-product');
    }

    public function addPostProduct(Request $req)
    {
        $imgaeUrl = '';
        if ($req->hasFile('imageProduct')) {
            $image = $req->file('imageProduct');
            $nameImage = time() . "." . $image->getClientOriginalExtension();
            $link = "imageProduct/";
            $image->move(public_path($link), $nameImage);

            $imgaeUrl = $link . $nameImage;
        }
        $data = [
            'name' => $req->nameProducts,
            'price' => $req->priceProducts,
            'image' => $imgaeUrl
        ];
        Product::create($data);

        return redirect()->route('admin.product.listProduct')
            ->with([
                'message' => 'Thêm mới thành công',
            ]);
    }

    public function deleteProduct(Request $req)
    {
        $product = Product::find($req->idProduct);
        if ($product->image != null && $product->image != '') {
            File::delete(public_path($product->image));
        }

        $product->delete();
        return redirect()->back()->with([
            'massage' => 'Xóa thành công'
        ]);
    }

    public function detailProduct($idProduc)
    {
        $product = Product::where('id', $idProduc)->first();
        return view('admin.products.detail-product')->with([
            'product' => $product
        ]);
    }

    public function updateProduct($idProduc)
    {
        $product = Product::where('id', $idProduc)->first();
        return view('admin.products.update-product')->with([
            'product' => $product
        ]);
    }

    public function updatePatchProduct($idProduc, Request $req)
    {
        $product = Product::where('id', $idProduc)->first();
        $linkImage = $product->image;
        
        if($req->hasFile('imageProduct')){
            File::delete(public_path($product->image)); //xóa file cũ
            $iamge = $req->file('imageProduct');
            $newName = time() . "." . $iamge->getClientOriginalExtension();
            $linkStorage = 'imageProduct/';
            $iamge->move(public_path($linkStorage), $newName);

            $linkImage = $linkStorage . $newName;
        }
        $data = [
            'name' => $req->nameProducts,
            'price' => $req->priceProducts,
            'image' => $linkImage
        ];
        Product::where('id', $idProduc)->update($data);
        return redirect()->route('admin.product.listProduct')
            ->with([
                'message' => 'Sửa thành công',
            ]);
    }
}
