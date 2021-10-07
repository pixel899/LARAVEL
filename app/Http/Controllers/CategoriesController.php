<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
            return view('categories');
    }
}
