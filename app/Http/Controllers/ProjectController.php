<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Cloudder;
use Cloudinary;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $project = Project::all();
       return view('projects/index',['project'=>$project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('projects.create');
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
             
            $image = Cloudinary\Uploader::upload($fileNameToStore);
              
            $image_url = data_get($image,'url');
        }else{
            $image_url= 'noimage.jpg';
        }
        $project = new project();
        $project->passport =$image_url;
        $project->name = $request->Input('name');
        $project->date = $request->Input('date');
        $project->body = $request->Input('body');
                    
        
        $project->save();
         
           
        return redirect(route('allpro'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects/show',['project'=>$project]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects/edit',['project'=>$project]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Project::whereId($id)->update($request->except(['_method','_token']));
         return redirect(route('allpro'))->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Project::findOrFail($id);
        $pro->delete();
        return redirect(route('allpro'));
    }
}
