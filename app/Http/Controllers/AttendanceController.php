<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attend = Attendance::all();
        return view('attendance/index',['attend'=>$attend]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendance/create');
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
            'venue' => 'required',
            'time' => 'required',
            'moderators' => 'required',
            
        ])->validate();
        $attend = new Attendance();
        $attend->date = $request->date;
        $attend->venue = $request->venue;
        $attend->time = $request->time;
        $attend->moderators = $request->moderators;

        if($attend->save()){
            return redirect(route('allattend'))->with('success','Attendance Created and Posted');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attend = Attendance::find($id);
        return view('attendance/show',['attend'=>$attend]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attend = Attendance::find($id);
        return view('attendance/edit',['attend'=>$attend]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        Attendance::find($id)->update($request->except(['_method','_token']));
        return redirect(route('allattend'))->with('success', 'Attendance Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attend = Attendance::find($id);
        $attend->delete();
       return redirect(route('allattend'))->with('success',' Attendance Removed');
    }
}
