<?php

namespace App\Http\Controllers;

use App\BoD;
use Illuminate\Http\Request;

class BoDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $bod = BoD::all();
       return view('bod/index',['bod'=>$bod]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bod/create');
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
        $this->validate(request(), [
            'name' => 'required','string',
            'department' => 'required','string',
            'position' => 'required','string',
            
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
            $path = $request->file('passport')->storeAs('public/passport', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $bod = new BoD();
        $bod->passport = $fileNameToStore;
        $bod->name = $request->Input('name');
        $bod->position = $request->Input('position');
        
        $bod->department= $request->Input('department');
             
        
        $bod->save();
         
           
        return redirect(route('bod.index'))->with('success', 'You have successful added a Board of Dir.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoD  $boD
     * @return \Illuminate\Http\Response
     */
    public function show(BoD $boD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoD  $boD
     * @return \Illuminate\Http\Response
     */
    public function edit(BoD $boD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoD  $boD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoD $boD)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoD  $boD
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoD $boD)
    {
        //
    }
}
