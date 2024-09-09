<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restoRegester;
class regestcontroller extends Controller
{
    public function regester(Request $req){
        $restoRegester=new restoRegester;
        $restoRegester->name=$req->name;
        // $restoRegester->age=$req->age;
        // $restoRegester->gender=$req->gender;
        // $restoRegester->brithday=$req->brithday;
        $restoRegester->nationality=$req->nationality;
        $restoRegester->city=$req->city;
        $restoRegester->occupation=$req->occupation;
        $restoRegester->save();

    }
    
}
