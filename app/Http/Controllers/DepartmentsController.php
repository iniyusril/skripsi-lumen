<?php

namespace App\Http\Controllers;
use App\Departments;
class DepartmentsController extends Controller
{
    public function index(){
        $data = Departments::limit(100)->get();
        return response()->json($data);
    }
}
