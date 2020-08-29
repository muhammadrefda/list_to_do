<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class ApiCategoryController extends Controller
{
    
    public function index(){

        $categories = Category::all();
        return response()->json(['data' => $categories], 200);

    }



    public function store(Request $request){
           
        $categories = Category::create($request->all());

        return response()->json(['data' => $categories], 201);

    }


    public function update(Request $request, Category $categories ){
        
        $categories->update($request->all());

        return response()->json( $categories, 200 );

    }



    public function delete(Category $categories){
        $categories->delete();

        return response()->json( null , 204 );
    }

}
