<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadfile extends Controller
{
 public function upload(Request $req){
    return $req->file('file')->store('docs');
 }
}
