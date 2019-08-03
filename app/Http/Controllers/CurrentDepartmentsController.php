<?php

namespace App\Http\Controllers;
use App\CurrentDepartments;
class CurrentDepartmentsController extends Controller
{
    public function index(){
        $data = CurrentDepartments::limit(100)->get();
        return response()->json($data);
    }
}
