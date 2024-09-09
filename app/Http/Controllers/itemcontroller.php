<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;

class itemcontroller extends Controller
{
    public function items(Request $req){
        $item=new item;
        $item->nameofitem=$req->nameofitem;
        $item->price=$req->price;
        $item->save();
        return redirect('item');
    }
    public function loaditem(){
        $data=item::all();
        return view('itemlist',["data"=>$data]);
    }
    public function delete($id){
        $data=item::find($id);
        $data->delete();
        return redirect('items');
    }
    public function showitem($id){
        $data=item::find($id);
        return view('edititem',["data"=>$data]); 
    }
   public function edit(Request $req){
       $data=item::find($req->id);
        $data->nameofitem=$req->nameofitem;
        $data->price=$req->price;
        $da->save();
        return redirect('items');
    }
   
}
