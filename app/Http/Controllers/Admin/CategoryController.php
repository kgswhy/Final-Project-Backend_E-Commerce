<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;




class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::latest()->get();
        return view('admin.allcategory', compact('categories'));
    }

    public function Addcategory()
    {
        return view('admin.addcategory');
    }

    public function StoreCategory(Request $request)
    {

        alert()->warning('Gagal', 'Field tidak boleh kosong dan isi yang belum terpakai');
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name))
        ]);

        alert()->success('Sukses', 'Category berhasil ditambahkan');
        return redirect()->route('allcategory')->with('success',);
    }

    public function EditCategory($id){
        $category_info = Category::findOrFail($id);

        return view('admin.editcategory', compact('category_info'));
    }

    public function UpdateCategory(Request $request){
        $category_id = $request->category_id;

        alert()->warning('Gagal', 'Field tidak boleh kosong');
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        category::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name))
        ]);

        alert()->success('Sukses', 'Category berhasil diubah');
        return redirect()->route('allcategory')->with('success',);
    }

    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();

        alert()->success('Sukses', 'Category berhasil dihapus');
        return redirect()->route('allcategory')->with('success');
    }
}
