<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Info::all();
        return view('admin.info',compact('infos'));
    }
     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        DB::table('Infos')->whereId($id)->update([
            'adresse' => $request->adresse,
            'email' => $request->email,
            'jourOuvert' => $request->jourOuvert,
            'heurOuvert' => $request->heurOuvert,
            'contact' => $request->contact
        ]);
        return redirect()->route('info');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $info = new Info;

        $info->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Info $info)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Info $info)
    {
        //
    }
}
