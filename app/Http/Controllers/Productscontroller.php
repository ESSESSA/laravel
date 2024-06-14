<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class Productscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=product::all();
        return view("admin.products.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=category::all();
        return view("admin.products.create",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required |max:100|unique:products",
            "description"=>"required",
            "price"=>"numeric",
            "photo1"=>"image|required|mimes:jpeg,png,jpg,gif|max:2048",
            "photo2"=>"image|required|mimes:jpeg,png,jpg,gif|max:2048",
            "category_id"=>"required",

        ]);
        $inputs=$request->all();

        if($photo1=$request->file("photo1")){
            $newfile1=time().".".$photo1->getClientOriginalExtension();
            $photo1->move('images/products/',$newfile1);
            $inputs['photo1']=$newfile1;
        }
        if($photo2=$request->file("photo2")){
                $newfile2=time().time().".".$photo2->getClientOriginalExtension();
                $photo2->move('images/products/',$newfile2);
                $inputs['photo2']=$newfile2;
        }



    product::create($inputs);
             return redirect()->route("products.index")->with("message","Un produit a été ajouter avec succes!");
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $categories=category::all();
        return view ("admin.products.edit",compact("product","categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            "name" => "|required|max:100",
            "description"=>"required",
            "price"=>"numeric|required",
            "photo1"=>"image|mimes:jpeg,png,jpg,gif|max:2048",
            "photo2"=>"image|mimes:jpeg,png,jpg,gif|max:2048",
            "category_id"=>"",
            ]);

            $inputs=$request->all();

            if($photo1=$request->file("photo1")){
                $newfile1=time().".".$photo1->getClientOriginalExtension();

                if(file_exists("images/products/".$product->photo1)){
                unlink("images/products/".$product->photo1);
                }
                $photo1->move('images/products/',$newfile1);
                $inputs['photo1']=$newfile1;
            }
            if($photo2=$request->file("photo2")){
                    $newfile2=time().time().".".$photo2->getClientOriginalExtension();
                    if(file_exists("images/products/".$product->photo2)){
                        unlink("images/products/".$product->photo2);
                    }
                    $photo2->move('images/products/',$newfile2);
                    $inputs['photo2']=$newfile2;
            }
            $product->update($inputs);
            return redirect()->route("products.index")->with("message","Un produit a été modifier avec succes!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        if(file_exists("images/products/".$product->photo1)){
            unlink("images/products/".$product->photo1);
            }
            if(file_exists("images/products/".$product->photo2)){
                unlink("images/products/".$product->photo2);
                }

            $product->delete();
        return redirect()->route("products.index")->with("message","Un produit a été supprimer avec succes!");
    }
}
