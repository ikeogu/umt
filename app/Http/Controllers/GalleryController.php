<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('gallery.index',['gallery'=>$gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
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
            
            
        ]);
       
        if($request->hasFile('picture')){
            //get file name with extension
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('picture')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('picture')->storeAs('public/picture', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $gallery= new Gallery();
        $gallery->picture= $fileNameToStore;
        $gallery->name = $request->Input('name');
              
        
        $gallery->save();
         
           
        return redirect(route('allimage'))->with('success','Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gal = Gallery::find($id);
        return view('gallery/edit',['gal'=>$gal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $gallery)
    {
         
        Gallery::whereId($gallery)->update($request->except(['_method','_token']));
         return redirect(route('allimage'))->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy( $gallery)
    {
        //
        $img = Gallery::find($gallery);
        $img->delete();
        return redirect(route('allimage'))->with('success', 'Deleted');
    }
}
