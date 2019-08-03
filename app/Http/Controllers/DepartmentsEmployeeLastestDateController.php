<?php

namespace App\Http\Controllers;
use App\DepartmentsEmployeeLastestDate;
class DepartmentsEmployeeLastestDateController extends Controller
{
    public function index(){
        $data = DepartmentsEmployeeLastestDate::limit(100)->get();
        return response()->json($data);
    }
}
