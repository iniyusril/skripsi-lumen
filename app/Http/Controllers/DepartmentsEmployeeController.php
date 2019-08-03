<?php

namespace App\Http\Controllers;
use App\DepartmentsEmployee;
class DepartmentsEmployeeController extends Controller
{
    public function index(){
        $data = DepartmentsEmployee::limit(100)->get();
        return response()->json($data);
    }
}
