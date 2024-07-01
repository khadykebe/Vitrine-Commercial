<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categorie',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categorie'=>'required',
        ]);

        $categorie = new Categorie;
        $categorie->categorie = $request->categorie;
        $categorie->save();
        return redirect()->route('categorie');

    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'categorie'=>'required',
        ]);

        DB::table('categories')->whereId($id)->update([
            'categorie' => $request->categorie
        ]);
        return redirect()->route('categorie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Categorie::find($id)->delete();
        return redirect()->route('categorie');
    }
}
