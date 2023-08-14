<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Http\Requests\Category\PostRequest;
use App\Http\Requests\Category\UpdateReques;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view("admin.category.index", compact("categories"));
    }

    public function create()
    {
        return view("admin.category.create");
    }

    public function store(PostRequest $request)
    {
        $data = $request->validated();
        Category::create($data);
        return redirect()->route('admin.category.index');
    }

    public function edit(Category $id){

        $category = $id;
        return view("admin.category.edit", compact("category"));

    }
    public function update(Category $id, UpdateReques $request){

        $data = $request->validated();

        if(!isset($data["isPublished"])){
            $data["isPublished"] = 0;
        }
        $id->update($data);

        return redirect()->route("admin.category.index");

    }

}
