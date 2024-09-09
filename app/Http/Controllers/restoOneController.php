<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class restoOneController extends Controller
{
    public function inputdata(){
        return DB::table('restorants')
        ->insert([
                'name'=>"habi",
                'email'=>"habiworkie@gmail.com",
                'address'=>"A.A"
            ]);

    }
}
