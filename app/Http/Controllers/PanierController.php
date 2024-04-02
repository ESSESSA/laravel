<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function panier(){
        $products=[];
        if(session()->has('panier')){
            $products = session()->get("panier");
        }
        return view("website.panier",compact("products"));
    }

    public function delprodpanier($indice){
        $products=session()->get("panier");
        dd($products);
        unset( $products[$inside]);
        session()->put("panier",$products);

        return redirect()->back();
    }

    public function viderpanier(){
        session()->put("panier",[]);
        return redirect()->back();

    }

    public function addToCart(Request $request){
        $id=$request->id;
        $name=$request->name;
        $photo1=$request->photo1;
        $price=$request->price;
        $qty=$request->qty;


    if(!session()->has("panier")){
        session()->put("panier",[]);
    }

    session()->push('panier',["id"=>$id,"name"=>$name,"price"=>$price,"qty"=>$qty,"photo1"=>$photo1,]);

    return redirect()->back()->with("message","Une nouveau produit a été ajouter avec succes dans le panier!");
    }
    //
}
