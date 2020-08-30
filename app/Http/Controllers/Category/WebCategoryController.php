<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class WebCategoryController extends Controller
{
    
    public function index(){
        $categories = Category::all();
        return view('category.index' , ['categories' => $categories]);
    }


    public function edit($id){
        $categories = Category::find($id);
        return view('category.edit' , ['categories' => $categories]);
    }

}
