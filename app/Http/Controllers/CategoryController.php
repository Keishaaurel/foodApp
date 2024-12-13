<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index() : View 
    {
        $categories = Category::all();
        return view('category.categories', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_category' => 'required|string|unique:categories',
        ]);

        Category::create([
            'name_category' => $request->name_category
        ]);

        return redirect()->route('category.index')->with('success', 'Category created successfully!');
    }
}
