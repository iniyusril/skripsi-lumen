<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class HelloController extends BaseController
{
    //
    public function index(){
        return response()->json(['hello' => 'world']);
    }
    public function compute()
    {
        $x = 0; $y = 1;
        $max = 10000 + rand(0, 500);
        for ($i = 0; $i <= $max; $i++) {
            $z = $x + $y;
            $x = $y;
            $y = $z;
        }
        return response()->json(['status' => 'done']);
    }
}
