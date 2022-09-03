<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers;
use App\Mail\TemplateNew;
use Helpers as GlobalHelpers;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    const FOLDER = 'employee_data';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees =  Employee::paginate(5,[
            'id', 'name', 'role_id', 'department_id', 'age', 'phone'
        ]);

        for($i=0, $len=count($employees); $i<$len; $i++){
            $employees[$i]['role'] = (Role::where('id', $employees[$i]['role_id'])->get('name'))[0]['name'];
            $employees[$i]['department'] = (Department::where('id', $employees[$i]['department_id'])->get('name'))[0]['name'];
        }

        return view('employeeList', [
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'picture' => 'mimes:jpg,png,svg|max:2048',
            'cv' => 'mimes:pdf,docx,txt|max:2048',
        ]);

        $picFile = $request->file('picture');
        $cvFile = $request->file('cv');

        $picFileName = GlobalHelpers::fileUploader($picFile, self::FOLDER);
        $cvFileName = GlobalHelpers::fileUploader($cvFile, self::FOLDER);

        DB::table('employees')
            ->insert([
                'name' => $request->name,
                'picture' => $picFileName,
                'date_of_birth' => date("Y-m-d",strtotime($request->date_of_birth)),
                'gender' => $request->gender,
                'cv' => $cvFileName,
                'email' => $request->email,
                'phone' => $request->phone,
                'department_id' => $request->department,
                'role_id' => $request->role,
                'start_of_employment' => date("Y-m-d",strtotime($request->start_of_employment)),
                'end_of_employment' => date("Y-m-d",strtotime($request->end_of_employment)),
                'age' => date("Y") - date("Y", strtotime($request->date_of_birth)),
                'experience' => date("Y") - date("Y", strtotime($request->start_of_employment)),
            ]);

        return redirect('/employees')->with('msg', 'Employee Info was Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Employee::find($id);
        $data['folder_path'] = self::FOLDER;

        $data['role'] = (Role::where('id', $data['role_id'])->get('name'))[0]['name'];
        $data['department'] = (Department::where('id', $data['department_id'])->get('name'))[0]['name'];

        return view('employeeDetails', ['data' => $data]);
    }

    /**
     * Query Employee List
     *
     * @param  String  $query
     * @return \Illuminate\Http\Response
     */
    public function query(Request $request)
    {


        $query = $request->name;

        $employees = Employee::where('name', 'like', "%$query%")->paginate(5, [
        'id', 'name', 'role_id', 'department_id', 'age', 'phone'
        ]);

        for($i=0, $len=count($employees); $i<$len; $i++){
            $employees[$i]['role'] = (Role::where('id', $employees[$i]['role_id'])->get('name'))[0]['name'];
            $employees[$i]['department'] = (Department::where('id', $employees[$i]['department_id'])->get('name'))[0]['name'];
        }
        return view('employeeList', ['employees' => $employees]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee =  (Employee::where('id', $id)->get([
            'id', 'name', 'picture', 'role_id', 'department_id', 'age', 'phone','email'
        ]))[0];

        $employee['role'] = (Role::where('id', $employee['role_id'])->get('name'))[0]['name'];
        $employee['department'] = (Department::where('id', $employee['department_id'])->get('name'))[0]['name'];

        return view('forms.employeeEdit', ['id' => $id, 'employee' => $employee]);
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

        $request->validate([
            'picture' => 'mimes:jpg,png,svg|max:2048',
            'cv' => 'mimes:pdf,docx,txt|max:2048',
        ]);
        
        $picFile = $request->file('picture');
        $cvFile = $request->file('cv');

        $picFileName = GlobalHelpers::fileUploader($picFile, self::FOLDER);
        $cvFileName = GlobalHelpers::fileUploader($cvFile, self::FOLDER);

        DB::table('employees')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'picture' => $picFileName,
                'date_of_birth' => date("Y-m-d",strtotime($request->date_of_birth)),
                'gender' => $request->gender,
                'cv' => $cvFileName,
                'email' => $request->email,
                'phone' => $request->phone,
                'department_id' => $request->department,
                'role_id' => $request->role,
                'start_of_employment' => date("Y-m-d",strtotime($request->start_of_employment)),
                'end_of_employment' => date("Y-m-d",strtotime($request->end_of_employment)),
                'age' => date("Y") - date("Y", strtotime($request->date_of_birth)),
                'experience' => date("Y") - date("Y", strtotime($request->start_of_employment)),
            ]);

        return redirect('/employees')->with('msg', 'Employee Info was Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $files = (Employee::where('id', $id)->get(['picture', 'cv']))[0];

        if(isset($files->picture)){
            $msgPic = unlink("storage/" . self::FOLDER . "/" . $files->picture) ? " Picture deleted." : " But picture not deleted.";
        } else {
            $msgPic = '';
        }

        if(isset($files->cv)){
            $msgCV = unlink("storage/" . self::FOLDER . "/" . $files->cv) ? " CV deleted." : " But cv not deleted.";
        } else {
            $msgCV = '';
        }

        Employee::find($id)->delete();
        return redirect('/employees')->with('msg', 'Employee info deleted.' . $msgPic . $msgCV); 
    }
}
