<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategory(){
        $categories = Category::all();
        return new CategoryResource($categories);
    }
    public function postsCategory($id){
        $posts = Post::where("category_id", $id)->get();

        return new CategoryResource($posts);
    }
}
