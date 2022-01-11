<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return response()->json(News::query()->paginate(5));
    }
    public function filter($categories)
    {
       return response()->json(News::findOrFail($categories)->where('category_id',$categories)->get());
    }
    public function store(Request $request)
    {
        $categories = News::create($request->all());
        $categories->save();
        return response()->json($categories);
    }






}
