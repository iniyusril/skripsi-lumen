<?php

namespace App\Http\Controllers;
use App\DepartmentsManager;
class DepartmentsManagerController extends Controller
{
    public function index(){
        $data = DepartmentsManager::limit(100)->get();
        return response()->json($data);
    }
}
