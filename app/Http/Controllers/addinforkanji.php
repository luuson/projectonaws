<?php

namespace App\Http\Controllers;

use App\addmoreinfkanji;
use Illuminate\Http\Request;
use Carbon\Carbon;

class addinforkanji extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $addedinf = addmoreinfkanji::orderBy('updated_at','DESC')->paginate(15);
        return view('registationKanji.addmoreinfKanji.addedinfpage',compact('addedinf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\addmoreinfkanji  $addmoreinfkanji
     * @return \Illuminate\Http\Response
     */
    public function show( $addmoreinfkanji)
    {
        $edit = addmoreinfKanji::findOrFail($addmoreinfkanji);
        return view('registationKanji.addmoreinfKanji.editaddedinf',compact('edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\addmoreinfkanji  $addmoreinfkanji
     * @return \Illuminate\Http\Response
     */
    public function edit( $addmoreinfkanji)
    {
        $edit = addmoreinfKanji::findOrFail($addmoreinfkanji);
        return view('registationKanji.addmoreinfKanji.editaddedinf',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\addmoreinfkanji  $addmoreinfkanji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $addmoreinfkanji)
    {
        $update = addmoreinfkanji::findOrFail($addmoreinfkanji);


        $update->hantu =$request->input('hantu');
        $update->hiragana =$request->input('hiragana');

        $update->hannghia =$request->input('hannghia');
        $update->onyomi =$request->input('onyomi');
        $update->vidu =$request->input('vidu');

        $update->nhatnghia =$request->input('nhatnghia');
        $update->updated_at =Carbon::now();
        $update->save();


        return redirect('registerKanji')->with('messenge','done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\addmoreinfkanji  $addmoreinfkanji
     * @return \Illuminate\Http\Response
     */
    public function destroy( $addmoreinfkanji)
    {
       addmoreinfKanji:: findOrFail($addmoreinfkanji)->delete();
        return redirect('registerKanji')->with('messenge','done');
    }
}
