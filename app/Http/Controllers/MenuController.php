<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MenuController extends Controller
{
    public function dashboard() : View 
    {
        $menus = Menu::with('category')->get();
        return view('menu.dashboard', compact('menus'));
    }
    
    public function index() : View 
    {
        $menus = Menu::with('category')->get();
        return view('menu.menu', compact('menus'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('menu.create', compact('categories'));
    }

    public function store(Request $request)
    {
    $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'required',
        'categoryID' => 'required',
    ]);

    $image = $request->file('image');
    $image->storeAs('public/images', $image->hashName());

    Menu::create( [
        'image' => $image->hashName(),
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
        'categoryID' => $request->categoryID,
    ]);
    

    return redirect('/menu')->with('success', 'Menu added successfully!');
    }
}
