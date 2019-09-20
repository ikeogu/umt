<?php

namespace App\Http\Controllers;

use App\BoD;
use Illuminate\Http\Request;
use Cloudder;
use Cloudinary;


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
       return view('BoD/index',['bod'=>$bod]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BoD/create');
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
            $image = Cloudinary\Uploader::upload($fileNameToStore);
              
           $image_url = data_get($image,'url');
         
        }else{
            $image_url = 'noimage.jpg';
        }
        $bod = new BoD();
        $bod->passport = $image_url;
        $bod->name = $request->Input('name');
        $bod->position = $request->Input('position');
        
        $bod->department= $request->Input('department');
             
        
        $bod->save();
         
           
        return redirect(route('allbod'))->with('success', 'Successful added a Board of Dir.');
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
    public function edit($id)
    {
        $pro = BoD::findOrFail($id);
        return view('BoD/edit',['bod'=>$pro]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoD  $boD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        BoD::whereId($id)->update($request->except(['_method','_token']));
         return redirect(route('allbod'))->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoD  $boD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = BoD::findOrFail($id);
        $pro->delete();
        return redirect(route('allbod'));
    }
}
