<?php

namespace App\Http\Controllers;

use App\Traning;
use Illuminate\Http\Request;

class TraningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $traning = Traning::all();
       return view(
           'training.index',['traning'=>$traning]
       );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('training.create');
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
           
           
            $training = new Traning();
            
            $training->name = $request->Input('name');
            $training->link = $request->Input('link');
            $training->description = $request->Input('description');
                        
            
            $training->save();
             
               
            return redirect(route('training.index'))->with('success','Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Traning  $traning
     * @return \Illuminate\Http\Response
     */
    public function show(Traning $traning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traning  $traning
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trn = Traning::find($id);
        return view('training/edit',['trn'=>$trn]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traning  $traning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traning $traning)
    {
         
        Traning::whereId($traning->id)->update($request->except(['_method','_token']));
         return redirect(route('training.index'))->with('success', ' Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traning  $traning
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trn = Traning::find($id);
        $trn->delete();
        return redirect(route('training.index'))->with('success', ' Deleted');

    }
}
