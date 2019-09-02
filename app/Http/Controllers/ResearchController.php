<?php

namespace App\Http\Controllers;

use App\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $research = Research::all();
        return view ('research.index', ['research'=>$research]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('research.create');
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
                'link' => 'required',
                'description' => 'required'
                
            ]);
           
           
            $research = new Research();
            
            $research->name = $request->Input('name');
            $research->link = $request->Input('link');
            $research->description = $request->Input('description');
                        
            
            $research->save();
             
               
            return redirect(route('research.index'))->with('success','Posted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function show(Research $research)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function edit($research)
    {
        $res = Research::find($research);
        return view('research/edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Research $research)
    {
        
        Research::whereId($research->id)->update($request->except(['_method','_token']));
         return redirect(route('research.index'))->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function destroy($research)
    {
        $res = Research::find($research);
        $res->delete();
        return redirect(route('research.index'))->with('success', 'Deleted');
    }
}
