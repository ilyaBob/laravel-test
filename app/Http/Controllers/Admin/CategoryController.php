<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
       // $categories = Category::paginate(5);
        $categories = Category::all();

        return view("admin.category.index", compact("categories"));
    }

    public function create()
    {
        return view("admin.category.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required|unique:categories",
            "sort" => "required",
            "isPublished" => ""
        ]);

        Category::create($data);
        return redirect()->route('admin.category.index');
    }

    public function edit(Category $id){

        $category = $id;
        return view("admin.category.edit", compact("category"));

    }
    public function update(Category $id, Request $request){

        $data = $request->validate([
            "title" => "required",
            "sort" => "required",
            "isPublished" => ""
        ]);

        $id->update($data);

        return redirect()->route("admin.category.index");

    }

}
