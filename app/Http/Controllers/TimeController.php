<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TimeController extends Controller
{
    public function yestimestamp($a,$b,$c)
    {
        $carbon = Carbon::createFromDate($a, $b, $c);
        return $carbon->format('d-m-Y\ H:i:s');
    }
    public function notimestamp()
    {
        $current = new Carbon();
        return $date = $current->toDayDateTimeString();
    }
}
