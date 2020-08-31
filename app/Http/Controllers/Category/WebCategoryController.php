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


    public function update(Request $request ,$id){
        $request->validate([
            'name' => "required"
        ]);

        $categories = Category::find($id);
        $categories->update($request->all());

        return redirect('/category')->with('success' , 'Data berhasil di Update');
    }




    public function delete($id){
        Category::destroy($id);
        return redirect('/category')->with('success' , 'Data berhasil di hapus');
    }

}
