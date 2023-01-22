<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.allcategory');
    }

    public function Addcategory(){
        return view('admin.addcategory');
    }
}
