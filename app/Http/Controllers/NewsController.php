<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsANDTags;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return response()->json(News::query()->paginate(5));
    }
    public function filter($categories)
    {
       return response()->json(News::where('category_id',$categories)->get());
    }




}
