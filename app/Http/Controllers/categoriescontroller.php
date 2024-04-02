<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoriescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories=category::all();
        return view("admin.categories.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        "name"=>"required |max:100|unique:categories"
    ]);

    category::create($request->all());
           return redirect()->route("categories.index")->with("message","Une nouvelle categories a été ajouter avec succes!");
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view ("admin.categories.edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'name' => 'required',
            ]);
            $category->update($request->all());
            return redirect()->route("categories.index")->with("message","Une nouvelle categories a été modifier avec succes!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route("categories.index")->with("message","Une nouvelle categories a été supprimer avec succes!");
    }
}
