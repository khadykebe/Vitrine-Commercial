<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\Partenaire;
use App\Models\Gallery;
use App\Models\Slide;
use App\Models\Presentation;
use App\Models\Info;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $produits = Produit::all();
        $partenaires = Partenaire::all();
        $presentations = Presentation::all();
        $gallerys = Gallery::all();
        $slides = Slide::all();
        $categories = Categorie::all();
        $info = Info::first();
        return view('index',compact('produits','partenaires','presentations','gallerys','slides','categories','info'));
    }
}
