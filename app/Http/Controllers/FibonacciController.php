<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function postFibonacci(Request $request)
    {
        $num = $request->input('num');
        $num1 = 0;
        $num2 = 1;

        $counter = 0;
        while ($counter < $num) {
            echo ' ' . $num1;
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $counter = $counter + 1;
        }
    }
}
