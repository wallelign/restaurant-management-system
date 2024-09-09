<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restorant;
class restocontroller extends Controller
{
    public function index(){
        return view('home');
    }
    public function list(){
        $data=restorant::all();
        return view('list',["data"=>$data]);

    }
    public function add(Request $req){
        return $req->input();
    }
}
