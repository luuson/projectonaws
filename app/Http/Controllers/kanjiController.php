<?php

namespace App\Http\Controllers;

use App\kanji;
use App\addmoreinfkanji;
use Illuminate\Http\Request;
use Carbon\Carbon;

class kanjiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $showLists =kanji::orderBy('updated_at','DESC')->paginate(15);

         return view('registationKanji.showkanji',compact('showLists'));
        
    }

    public function showlistOfchapter(){

        return view('registationKanji.showlistofChapter');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registationKanji.registerkanji');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    $store =[
        'chapper' => $request->input('chapper'),
        'kanji' => $request->input('kanji'),
        'hantu' => $request->input('hantu'),
        'ynghia' => $request->input('ynghia'),
        'cachghinho' => $request->input('cachghinho'),
        'onyomi' => $request->input('onyomi'),
        'kunyomi' =>$request->input('kunyomi'),
        'created_at' =>Carbon::now()

     ];

     kanji::create($store);

     return redirect('\registerKanji')->with('messenge','the kanji registation is successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function show( $kanji)
    {
       $show = kanji::where('chapper',$kanji)->get();

       return view('registationKanji.chapter',compact('show')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function edit($kanji)
    {
         $show = kanji::findOrFail($kanji);

       return view('registationKanji.editKanji',compact('show')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $kanji)
    {
         $update = kanji::findOrFail($kanji );


         
     $update ->chapper  = $request->input('chapper');
     $update ->kanji      = $request->input('kanji');
     $update ->hantu = $request->input('hantu');
     $update ->ynghia     = $request->input('ynghia');
     $update ->onyomi   = $request->input('onyomi');
     $update ->kunyomi    = $request->input('kunyomi');
  
     $update->updated_at =Carbon::now();
     $update ->save();

         return redirect('\registerKanji')->with('messenge','the update is completed');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function destroy($kanji)
    {
        kanji::findOrFail($kanji)->delete();
        return redirect('registerKanji')->with('messenge','the item has been  deleted');
    }






    public function addmoreInf($kanji){
        $addmoreinf = kanji::findOrFail($kanji);


        return view('registationKanji.addmoreinfKanji.moreinfpage',compact('addmoreinf'));


    }

    public function storeInfOfKanji(request $request){


            $store =[
      
        'kanji_id' => $request->input('kanji_id'),
        'hantu' => $request->input('tuhan'),
        'hiragana' => $request->input('hiragana'),

        'hannghia' => $request->input('nghiahan'),
        
        'onyomi' => $request->input('onyomi'),
        'vidu' => $request->input('vidu'),

        'nhatnghia' =>$request->input('nhatnghia'),
        'created_at' =>Carbon::now()

     ];

     addmoreinfkanji::create($store);

     return redirect('\registerKanji')->with('messenge','added information  is successfull');

    }
}
