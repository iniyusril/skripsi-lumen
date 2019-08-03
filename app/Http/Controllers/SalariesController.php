<?php

namespace App\Http\Controllers;
use App\Salaries;
class SalariesController extends Controller
{
    public function index(){
        $data = Salaries::limit(100)->get();
        return response()->json($data);
    }
}
