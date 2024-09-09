<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\useraccount;
class logincontroller extends Controller
{
    public function show(Request $req){
      $data= useraccount::all();
        // //return view("login",['da'=>$data]);
        if($req->name=="wallee"&& $req->password=="122123"){
           return view('home');
        }
        else{
        echo "incorrect password and user name";
        }
    }
}
