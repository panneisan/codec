<?php

namespace App\Http\Controllers;

use App\Questionaire;
use Illuminate\Http\Request;

class QuestionaireController extends Controller

{
    public function __construct(){
       $this->middleware('auth');
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("questionaires.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
           "title"=>"required",
           "purpose"=>"required"
       ]);
//        $quesitonaire =new Questionaire();
//        $quesitonaire->title =$request ->title;
//        $quesitonaire->purpose =$request ->purpose;
//        $quesitonaire->user_id =auth()->user()->id;
//        $quesitonaire->save();

        $quesitonaire = auth()->user()->questionaire()->create($data);
        return  redirect("/questionaire/".$quesitonaire->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function show(Questionaire $questionaire)
    {
       return view("questionaires.show",compact("questionaire"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionaire $questionaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questionaire $questionaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionaire $questionaire)
    {
        //
    }
}
