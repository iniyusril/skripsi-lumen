<?php

namespace App\Http\Controllers;
use App\Salaries;
use DB;
class ManyToManyController extends Controller
{
    public function DepartmentManager(){
        $data = DB::table('dept_manager')
        ->join('employees','employees.emp_no','=','dept_manager.emp_no')
        ->join('departments','departments.dept_no','=','dept_manager.dept_no')
        ->limit(100)
        ->get();
        return response()->json($data);
    }
    public function DepartmentEmployee(){
        $data = DB::table('dept_emp')
        ->join('employees','employees.emp_no','=','dept_emp.emp_no')
        ->join('departments','departments.dept_no','=','dept_emp.dept_no')
        ->limit(100)
        ->get();
        return response()->json($data);
    }
}
