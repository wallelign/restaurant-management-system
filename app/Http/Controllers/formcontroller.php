<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restorant;
use App\Models\useraccount;
class formcontroller extends Controller
{
    public function add(Request $req){
       $resto=new restorant;
        $resto->name=$req->name;
        $resto->email=$req->email;
        $resto->address=$req->address;
        $resto->phone=$req->phone;
        $resto->save();
        $req->session()->flash('status',"entered successfully");
        return redirect('list');
    }
    public function delete($id){
       $data=restorant::find($id);
       $data->delete();
       return redirect('list');
    }
    public function showdata($id){
        $data=restorant::find($id);
        return view('edit',["data"=>$data]);
    }
    public function editt(Request $req){
        $da=restorant::find($req->id);
        $da->name=$req->name;
        $da->email=$req->email;
        $da->address=$req->address;
        $da->phone=$req->phone;
        $da->save();
        return redirect('list');
    }
    public function login(Request $req){
        $useracc=new useraccount;
        $useracc->name=$req->name;
        $useracc->password=$req->password;
        $useracc->save();
    }

}