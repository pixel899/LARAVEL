<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function card()
    {
        return view('card');
    }
    public function answer(Request $request)
    {
        $name = $request->input('name');
        return $russian = transliterator_transliterate('Latin-Russian/BGN', $name);
    }
}
