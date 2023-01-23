<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        return view('admin.allproduct', compact('products'));
    }

    public function Addproduct(){
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        return view('admin.addproduct', compact('categories','subcategories'));
    }

    public function StoreProduct(Request $request){
                    
        alert()->warning('Gagal', 'Field tidak boleh kosong dan isi yang belum terpakai');
        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
            'product_category_id' => 'required',
            'product_subcategory_id' => 'required',
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('product_img');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;



        $category_id = $request->product_category_id;
        $subcategory_id = $request->product_subcategory_id;

        $category_name = Category::where('id', $category_id)->value('category_name'); 
        $subcategory_name = SubCategory::where('id', $subcategory_id)->value('subcategory_name'); 


        Product::insert([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'product_category_name' => $category_name,
            'product_subcategory_name' => $subcategory_name,
            'product_category_id' => $request->product_category_id,
            'product_subcategory_id' => $request->product_subcategory_id,
            'product_img' =>$img_url,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);

        Category::where('id', $category_id)->increment('product_count',1);
        SubCategory::where('id', $subcategory_id)->increment('product_count',1);

        alert()->success('Sukses', 'Product berhasil ditambah');
        return redirect()->route('allproduct')->with('success',);
    }

    public function EditProductImg($id){
        $productinfo = Product::findOrFail($id);
        return view('admin.editproductimg', compact('productinfo'));
    }

    public function UpdateProductImage(Request $request){
        $request->validate([
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $id = $request->id;
        $image = $request->file('product_img');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        Product::findOrFail($id)->update([
            'product_img' =>$img_url,
        ]);

        alert()->success('Sukses', 'Product image berhasil diupdate');
        return redirect()->route('allproduct')->with('success',);
    }

    public function EditProduct($id){
        $productinfo = Product::findOrFail($id);

        return view('admin.editproduct', compact('productinfo'));
    }

    public function UpdateProduct(Request $request){
         $productid = $request->id;

         alert()->warning('Gagal', 'Field tidak boleh kosong dan isi yang belum terpakai');
         $request->validate([
             'product_name' => 'required|unique:products',
             'price' => 'required',
             'quantity' => 'required',
             'product_short_des' => 'required',
             'product_long_des' => 'required',
         ]);

         Product::findOrFail($productid)->update([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
         ]);

         
        alert()->success('Sukses', 'Product info berhasil diupdate');
        return redirect()->route('allproduct')->with('success',);
    }

    public function DeleteProduct($id){
        Product::findOrFail($id)->delete();
        $cat_id = Product::where('id',$id)->value('product_category_id');
        $subcat_id = Product::where('id',$id)->value('product_subcategory_id');

        Category::where('id', $cat_id)->decrement('product_count',1);
        Subcategory::where('id', $subcat_id)->decrement('product_count',1);

        alert()->success('Sukses', 'Product berhasil dihapus');
        return redirect()->route('allproduct')->with('success',);
    }
}
