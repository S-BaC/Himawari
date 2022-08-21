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
        $validated = $request->validate([
            'name' => 'required',
        ]);

        
        $picture = ($request->file('picture') !== null) ? $request->file('picture')->store('employee_pictures') : null;
        $cv = ($request->file('cv') !== null) ? $request->file('cv')->store('employee_cvs') : null;

        DB::table('employees')
            ->insert([
                'name' => $request->name,
                'picture' => $picture,
                'date_of_birth' => date("Y-m-d",strtotime($request->date_of_birth)),
                'gender' => $request->gender,
                'cv' => $cv,
                'email' => $request->email,
                'phone' => $request->phone,
                'department_id' => $request->department,
                'role_id' => $request->role,
                'start_of_employment' => date("Y-m-d",strtotime($request->start_of_employment)),
                'end_of_employment' => date("Y-m-d",strtotime($request->end_of_employment)),
                'age' => date("Y") - date("Y", strtotime($request->date_of_birth)),
                'experience' => date("Y") - date("Y", strtotime($request->start_of_employment)),
            ]);

        dd("completed");

        // return view('sandbox', ['data' => $new]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
