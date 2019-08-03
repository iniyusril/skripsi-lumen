<?php

namespace App\Http\Controllers;
use App\Employees;
class EmployeesController extends Controller
{
    public function index(){
        $data = Employees::limit(100)->get();
        return response()->json($data);
    }
}
