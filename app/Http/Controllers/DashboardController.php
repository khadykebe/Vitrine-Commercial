<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Partenaire;
use App\Models\Presentation;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categorie;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        $produit = Produit::count();
        $partenaire = Partenaire::count();
        $categorie = Categorie::count();
        return view('admin.dashboard',compact('produit','partenaire','categorie'));

    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user != null && Hash::check($request->password, $user->password)) {
            $produit = Produit::count();
            $partenaire = Partenaire::count();
            $categorie = Categorie::count();
            $nom = $user->nom;
            return view('admin.dashboard',compact('produit','partenaire','partenaire','categorie','nom'));

        }
        return back()->with( ["message" => "Email ou mot de password incorrect."]);

    }

}
