<?php

namespace App\Http\Controllers;

use App\CaResearch;
use Illuminate\Http\Request;

class CaResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caresearch = CaResearch::all();
        return view('caresearch.index',['caresearch'=>$caresearch]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caresearch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required','string',
            'body' => 'required','string',
            'date' => 'required','string',
            
        ]);
       
        if($request->hasFile('passport')){
            //get file name with extension
            $fileNameWithExt = $request->file('passport')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('passport')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('passport')->storeAs('public/Caresearch', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $caresearch = new CaResearch();
        $caresearch->passport = $fileNameToStore;
        $caresearch->name = $request->Input('name');
        $caresearch->body = $request->Input('body');
        $caresearch->author = $request->Input('author');
        $caresearch->coauthor = $request->Input('coauthor');
                    
        
        $caresearch->save();
         
           
        return redirect(route('allcaresearch'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaResearch  $caResearch
     * @return \Illuminate\Http\Response
     */
    public function show(CaResearch $caResearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaResearch  $caResearch
     * @return \Illuminate\Http\Response
     */
    public function edit(CaResearch $caResearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaResearch  $caResearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaResearch $caResearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaResearch  $caResearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaResearch $caResearch)
    {
        //
    }
}
