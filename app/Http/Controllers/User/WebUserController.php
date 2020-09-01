<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class WebUserController extends Controller
{
    //

    public function index(){
        $user = User::all();
        return view('user.index' , compact('user'));
    }
}
