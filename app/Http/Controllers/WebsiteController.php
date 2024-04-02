<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class WebsiteController extends Controller
{
    public function Acceuil(){
        return view("website.Acceuil");
    }

    public function Presentation(){
        return view("website.Presentation");
    }

    public function Produits(){
        // dd(session()->get("panier"));
        $products = Product::all();
        return view("website.produits",compact("products"));
    }

    public function checkout(){
        $products=session()->get("panier");
        return view("website.checkout",compact("products"));
    }

    public function Contact(){
        return view("website.contact");
    }

    // public function Checkout(){
    //     $products = session()->get("panier");
    //     return view("websites.checkout",compact('products'));
    // }


    //si votre methode reçoit des parametres à partir d'un formulaire
    //Vous devez passer un parametre de la fonction un objet de type Request
//     {public function save(Request $request){

//         //dd($request); //dd() pour afficher le contenu des variables

// //passer tous les parametres reçu à partir du formulaire vers la vue

// //comment faire passer un ou plusieurs parametres vers la vue ?
// //avec la methode conpact("nomvar1","nomvar2")
//         return view("websites.save",compact("request"));
//     }
}
