<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;



class CategoriesController extends Controller
{
    public function index()
    {
        return response()->json(Categories::query()->paginate(5));
    }
    public function store(Request $request)
    {
        $categories = Categories::create($request->all());
        $categories->save();
        return response()->json($categories);
    }
    public function show($categories_id)
    {
        return response()->json(Categories::findOrFail($categories_id));
    }
    public function update(Request $request, $categories_id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'parent_id' => 'required|exists:parent_id',
        ]);

        $categories = Categories::findOrFail($categories_id);
        $categories->fill($validated);

        return response()->json($categories);
    }
    public function destroy($categories_id)
    {
        $categories = Categories::findOrFail($categories_id);
        $categories->delete();

        return response()->json([], 204);

    }
    public function restore($categories_id)
    {
        Categories::withTrashed()->where('id', $categories_id)->restore();
        $categories = Categories::findOrFail($categories_id);

        return response()->json($categories);
    }

}
