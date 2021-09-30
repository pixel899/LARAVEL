<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function plus($a, $b)
    {
        $result = $a + $b;
        return response()->json(['a + b'=>$result]);
    }
    public function minus($a, $b)
    {
        $result = $a - $b;
        return response()->json(['a - b'=>$result]);
    }
    public function times ($a, $b)
    {
        $result = $a * $b;
        return response()->json(['a * b'=>$result]);
    }
    public function divided ($a, $b)
    {
        $result = $a / $b;
        return response()->json(['a / b'=>$result]);
    }

}
