<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $blog = Blog::paginate(8);
            foreach($blog as $blo){
                $status = $blo->status;
            }
        
            return view('main/blog/index',['blog'=>$blog,'status'=>$status]);
        } catch (\Throwable $th) {
            return view('main/blog/index',['blog'=>$blog,'status'=> 0]);
        }
        
    }
    public function index2()
    {
        $blo = Blog::all();
        return view('admin/allblog',['blog'=>$blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('main/blog/create');
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
            'title' => 'required','string',
            'body' => 'required','string',
            'subtitle' => 'required','string',
            
        ]);
        if($request->hasFile('image')){
            //get file name with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image$image = Cloudinary\Uploader::upload($fileNameToStore);
              
            $path = $request->file('image')->storeAs('public/blog_post/',$fileNameToStore);
              
            
         
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
       
        $post = new Blog();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->image = $fileNameToStore;
        $post->body = $request->body;
        $post->status = $request->status;

        if($post->save()){
            return redirect(route('blog.create'))->with('success','Posted Successfully');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $blo = Blog::find($blog);
        return view('main/blog/show',['blo'=>$blo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($blog)
    {
       
        $blo = Blog::find($blog);
        return view('main/blog/edit',['blo'=>$blo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        Blog::whereId($blog)->update($request->except(['_method','_token']));
        return redirect(route('allblog'))->with('success', 'Blog Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
        $blo = Blog::find($blog);
        $blo->delete();
        redirect(route('allblog'))->with('success', 'Blog Post Deleted');

    }
}
