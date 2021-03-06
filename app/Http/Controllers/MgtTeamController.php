<?php

namespace App\Http\Controllers;

use App\mgtTeam;
use Illuminate\Http\Request;
use Cloudder;
use Cloudinary;


class MgtTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mgt = MgtTeam::all();
        return view('mgtteam/index',['mgt'=>$mgt]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mgtteam/create');
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
        $mgt = new MgtTeam();
        $mgt->passport =  $image_url;
        $mgt->name = $request->Input('name');
        $mgt->position = $request->Input('position');
        $mgt->wok = $request->Input('wok');
        $mgt->department= $request->Input('department');
             
        
        $mgt->save();
         
           
        return redirect(route('allmgtteam'))->with('success', 'Successful!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mgtTeam  $mgtTeam
     * @return \Illuminate\Http\Response
     */
    public function show(mgtTeam $mgtTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mgtTeam  $mgtTeam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mgt = MgtTeam::find($id);
        return view('mgtteam/edit',['mgt'=>$mgt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mgtTeam  $mgtTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mgtTeam)
    {
        //
        MgtTeam::whereId($mgtTeam)->update($request->except(['_method','_token']));
        return redirect(route('allmgtteam'))->with('success', 'MgtTeam Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mgtTeam  $mgtTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mgt = MgtTeam::find($id);
        $mgt->delete();
        return redirect(route('allmgtteam'))->with('success', 'MgtTeam Updated');

    }
}
