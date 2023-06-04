<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', ['categories' => Category::all()]);
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "title" => "required",
            "description" => "required"
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $category = new Category();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('category.index');
    }
    public function edit($id)
    {
        return view('category.edit', ['category' => Category::findOrFail($id)]);
    }
    public function update($id, Request $request)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->update();
        return redirect()->route('category.index');
    }
    public function show($id)
    {
        return view('category.show', ['category' => Category::findOrFail($id)]);
    }
    public function destroy($id)
    {
        $category = Category::findorFail($id);
        $category->delete();
        return redirect()->back();
    }
}
