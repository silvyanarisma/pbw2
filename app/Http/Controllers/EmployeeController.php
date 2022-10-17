<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    public function index(){
        return view("employee.index");
    }

    // public function create(){
    //     return view("employee.create");
    // }

    // public function edit(){
    //     return view("employee.edit");
    // }

    public function store(Request $request)
    {
        Employee::create([
            'nip' => $request->nip,
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'salary' => $request->salary,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        return redirect()->route('employee.index');
    }

    public function datatable()
    {
        return DataTables::of(Employee::query())
        ->addColumn('action', function($data){
            $button = '<button class="btn btn-warning btn-edit-employee m-1" data="'. $data->id .'">Edit</button>';
            $button .= '<button class="btn btn-danger btn-delete-employee m-1" data="'. $data->id .'">Delete</button>';
            return $button;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function edit(Request $request, $id)
    {
        Employee::findOrFail($id)->update([
            'nip' => $request->nip,
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'salary' => $request->salary,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        return redirect()->route('employee.index');
    }

    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();

        return redirect()->route('employee.index');
    }
}
