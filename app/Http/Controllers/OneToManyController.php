<?php

namespace App\Http\Controllers;
use App\Salaries;
use DB;
class OneToManyController extends Controller
{
    public function EmployeeSalaries(){
        $data = DB::table('employees')
        ->join('salaries','employees.emp_no','=','salaries.emp_no')
        ->limit(100)
        ->get();
        return response()->json($data);
    }
    public function EmployeeTitles(){
        $data = DB::table('employees')
        ->join('titles','employees.emp_no','=','titles.emp_no')
        ->limit(100)
        ->get();
        return response()->json($data);
    }
}
