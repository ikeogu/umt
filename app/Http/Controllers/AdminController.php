<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\BoD;
use App\MgtTeam;
use App\Project;
use App\Attendance;
use App\Gallery;
use App\Research;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

     public function allbod()
     {
         $bod = BoD::all();
         return view('admin/allbod',['bod'=>$bod]);
     }
     public function mgtteam()
     {
         $mgt = MgtTeam::all();
         return view('admin/allmgtteam',['mgt'=>$mgt]);
     }
     public function user()
     {
         $mem =User::all();
         return view('admin/allmembers',['mem'=>$mem]);
     }

    public function project(){
         $pro = Project::all();
         return view('admin/allproject',['pro'=>$pro]);
    }
    
    public function allAttend()
    {
        $attend = Attendance::all();
        return view('admin/allattendance',['attend'=>$attend]);
        //
    }
    public function allimage()
    {
        $image = Gallery::all();
        return view('admin/allimage',['image'=>$image]);
        //
    }
    public function allres(){
        $res = Research::all();
        return view('admin/allres',['res'=>$res]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function userprofile(){
        $user = User::findOrFail( auth()->user()->id);
        return view('home', ['user'=>$user]);

    }
}
