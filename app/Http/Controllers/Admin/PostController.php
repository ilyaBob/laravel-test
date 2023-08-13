<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Http\Requests\Post\UpdateReques;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
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
        $data["prev_image"] = Storage::disk("public")->put("/image", $data["prev_image"]);
        Post::create($data);
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
        if (array_key_exists("prev_image", $data)) {
            $data["prev_image"] = Storage::disk("public")->put("/image", $data["prev_image"]);
        }
        $id->update($data);

        return redirect()->route("admin.post.index");

    }

    public function destroy()
    {

    }

}
