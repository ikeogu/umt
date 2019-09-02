<?php

namespace App\Http\Controllers;

use App\Minute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MinuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minute = Minute::all();
        return view('minutes/index',['minute'=>$minute]);
    }
    public function index2()
    {
        $minute = Minute::all();
        return view('minutes/index2',['minute'=>$minute]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('minutes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'date' => 'required|unique:posts|max:10',
            'location' => 'required',
            'day' => 'required',
            'time' => 'required',
            'conclusion' => 'required',
            'agender' => 'required',
            'points' => 'required',
            'signed' => 'required',
            'purpose' => 'required',

            
        ])->validate();

        $minute = new Minute();
        $minute->date = $request->date;
        $minute->day = $request->day;
        $minute->time = $request->time;
        $minute->conclusion = $request->conclusion;
        $minute->location = $request->location;
        $minute->agender = $request->agender;
        $minute->points = $request->points;
        $minute->purpose = $request->purpose;
        $minute->calledby = $request->calledby;
        $minute->pre_name = $request->pre_name;
        $minute->pre_title = $request->pre_title;
        $minute->signed = $request->signed;

        if($minute->save()){
            return redirect(route('minute.create'))->with('success','Meeting Minute Saved');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Minute  $minute
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $minute = Minute::find($id);
        return view('minutes/show',['minute'=>$minute]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Minute  $minute
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $minute = Minute::find($id);
        return view('minutes/edit',['minute'=>$minute]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Minute  $minute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Minute $minute)
    {
        Minute::whereId($minute->id)->update($request->except(['_method','_token']));
         return redirect(route('minute.index2'))->with('success', 'Meeting Minute Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Minute  $minute
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $minute = Minute::find($id);
        $minute->delete();
        return  redirect(route('minute.index2'))->with('success', 'Meeting Minute Deleted');
    }
}
