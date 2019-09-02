<?php

namespace App\Http\Controllers;

use App\Attendee;
use Illuminate\Http\Request;
use App\Attendance;
class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'level' => 'required','string',
            'dept' => 'required','string',
            'phone' => 'required','string',
            'osmusername' => 'required','string',
        ]);

        $attendee = new Attendee();
        $attendee->name = $request->name;
        $attendee->level = $request->level;
        $attendee->dept = $request->dept;
        $attendee->phone = $request->phone;
        $attendee->osmusername = $request->osmusername;
        $attendance_id = $request->attend;
        $attend = Attendance::find($attendance_id);
        if($attend->attend()->save($attendee)){
            return redirect(route('attend.show',['attend'=>$attendance_id]))->with('success','Details added to Attendance List');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function show(Attendee $attendee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendee $attendee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendee $attendee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendee $attendee)
    {
        //
    }
}
