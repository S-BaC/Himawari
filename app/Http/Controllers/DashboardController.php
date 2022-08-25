<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Hospitalization;
use App\Models\Message;
use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboardData = [

            "totalRooms" => Room::count('id'),
            "vacantRooms" => Room::where('is_vacant', true)->count('id'),
            "inpatients" => Hospitalization::count('id'),

            "doctors" => Employee::whereIn('role_id', [3, 5])->count('id'), // Should be only one id, as it's one role.
            "nurses" => Employee::whereIn('role_id', [4])->count('id'),
            "other" => Employee::whereNotIn('role_id', [3, 4, 5])->count('id'), // To use whereNotIn.

            "daysPharma" => 15, // Yet to include daily usage.
            "daysOther" => 15,

            "todayMessages" => Message::where('created_at', '>=', date('Y-m-d'))->get()
        ];


        
        return view('/dashboard', ['data' => $dashboardData]);
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
        //
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
