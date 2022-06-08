<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('beasiswa', compact('data'));
    }
    public function detail($id){
        $employee = Employee::find($id);
        $employee->lokasi_foto = Storage::url($employee->lokasi_foto);
        return view('detail', [
            'employee' => $employee,
        ]);
    }
}
