<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Note;

class ApiNoteController extends Controller
{
    //


    public function index(){
       
        $notes = Note::all();
     
        return response()->json(["data" => $notes], 200);
    }


    public function store(Request $request){
        
        $notes = Note::create($request->all());

        return response()->json(["data" => $notes], 201);
    }



}
