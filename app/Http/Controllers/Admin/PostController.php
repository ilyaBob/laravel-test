<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseControllers\BasePostController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Http\Requests\Post\UpdateReques;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends BasePostController
{
    public function index()
    {
        $posts = Post::all()->sortBy("sort");
        $categories = Category::all();

        return view("admin.post.index", compact('posts', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view("admin.post.create", compact("categories"));
    }

    public function store(PostRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route("admin.post.index");
    }

    public function edit(Post $id)
    {
        $post = $id;
        $categories = Category::all();
        return view("admin.post.edit", compact("post", "categories"));
    }

    public function update(Post $id, UpdateReques $request)
    {
        $data = $request->validated();
        $this->service->update($data, $id);
        return redirect()->route("admin.post.index");
    }

    public function destroy()
    {

    }

}
