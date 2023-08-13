<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(Request $request){

        $data = $request->validate([
            "page" => "",
            "per_page" => ""
        ]);
        $page= $data["page"] ?? 1;
        $per_page = $data["per_page"] ?? 10;

        $posts = Post::paginate($per_page, ["*"], "page", $page);
        return PostResource::collection($posts);
    }
    public function postSlug($slug){
        $post = Post::where("slug", $slug)->first();
        return $post;
    }

}
