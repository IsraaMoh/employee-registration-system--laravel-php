<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees= Employee::all() ;
        return view('employee',['employees'=> $employees, 'layout'=> 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees= Employee::all();
        return view('employee',['employees'=> $employees, 'layout'=> 'create']);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee=new Employee();
        $employee->age=$request->input('id');
        $employee->firstName=$request->input('firstName');
        $employee->lastName=$request->input('lastName');
        $employee->age=$request->input('age');
        $employee->department=$request->input('department');
        $employee->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        $employees= Employee::all();
        return view('employee',['employees'=>$employees, 'employee'=>$employee,'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $employees= Employee::all();
        return view('employee',['employees'=>$employees, 'employee'=>$employee,'layout'=>'edit']);
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
        $employee = Employee::find($id);
        $employee->firstName=$request->input('firstName');
        $employee->firstName=$request->input('firstName');
        $employee->lastName=$request->input('lastName');
        $employee->age=$request->input('age');
        $employee->department=$request->input('department');
        $employee->save();
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/');

    }
}
