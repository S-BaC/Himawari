<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // TODO: How can this be more efficient?

        $appointments =  Appointment::orderBy('date_time','DESC')->paginate(5);

        for($i=0, $len=count($appointments); $i<$len; $i++){
            $appointments[$i]['doctor'] = (Employee::where('id', $appointments[$i]['doctor'])->get('name'))[0]['name'];
            $appointments[$i]['department'] = (Department::where('id', $appointments[$i]['department'])->get('name'))[0]['name'];
        }


        return view('details', [
            'appointments' => $appointments
        ]);
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

        //TODO ::: List of doctors and patients need to be inserted to insert the names.


        $date_time = $request->date_time ? date("Y-m-d",strtotime($request->date_time)) : date("Y-m-d");

        DB::table('appointments')
            ->insert([
                'date_time' => $date_time,
                'doctor' => 6,
                'patient' => 5,
                'department' => $request->department,
                'duration_minutes' => $request->duration,
                'expected_minutes' => $request->expected,
                'description' => $request->description,
            ]);


        return redirect('/details');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $appointment = (Appointment::where('id', $id)->get([
            'doctor', 'patient', 'department', 'duration_minutes', 'expected_minutes', 'description'
        ]))[0];

        $appointment['doctor'] = (Employee::where('id', $appointment['doctor'])->get('name'))[0]['name'];
        $appointment['department'] = (Department::where('id', $appointment['department'])->get('name'))[0]['name'];
        
        return view('forms.appointmentEdit', ['id' => $id, 'appointment' => $appointment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $date_time = $request->date_time ? date("Y-m-d",strtotime($request->date_time)) : date("Y-m-d");

        DB::table('appointments')
            ->where('id', $id)
            ->update([
                'date_time' => $date_time,
                'doctor' => 6,
                'patient' => 5,
                'department' => $request->department,
                'duration_minutes' => $request->duration,
                'expected_minutes' => $request->expected,
                'description' => $request->description,
            ]);

        return redirect('/details');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::find($id)->delete();
        return redirect('/details'); 
    }
}
