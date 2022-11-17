<?php

namespace App\Http\Controllers\categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function store(Request $request)
    {

        $category = new Category;

        $category->name = $request->input('name');
        $category->name_en = $request->input('name_en');

        $category->save();
        return redirect('categories')->with('success', 'data Inserted Successfully..');
    }
}
