<?php

namespace App\Http\Controllers;
use App\Titles;
class TitlesController extends Controller
{
    public function index(){
        $data = Titles::limit(100)->get();
        return response()->json($data);
    }
}
