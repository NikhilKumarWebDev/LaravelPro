<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    function insert(Request $req){
        $name=$req->get('pname');
        $price=$req->get('pprice');
        $pimage=$req->file('pimage')->getClientOriginalName();

        $req->pimage->move(public_path('images'),$pimage);
        
        $prod = new product();
        $prod->pname = $name;
        $prod->pprice = $price;
        $prod->pimage = $pimage;
        $prod->save();
        return redirect('/home');
    }

    public function index()
    {
        $pdata = product::all();
        return view('addproduct',['data'=>$pdata]);
    }
    
    
    function updateordelete(Request $req){
        $id = $req->get('id');
        $name = $req->get('name');
        $price = $req->get('price');
        
        if($req->get('update') == 'Update'){
            return view('updateview' ,['pid'=>$id,'pname'=>$name,'pprice'=>$price]);
        }
        else{
            $prod = product::find($id);
            $prod->delete();


        }
        return redirect('home');


    }
    function update(Request $req){
        $Id = $req->get('id');
        $Name = $req->get('name');
        $Price = $req->get('price');
        $prod = product::find($Id);
        $prod->pname = $Name;
        $prod->pprice = $Price;
        $prod->save();
        return redirect('home');



    }
}
