<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        $data["prev_image"] = Storage::disk("public")->put("/image", $data["prev_image"]);
        Post::create($data);
    }

    public function update($data, $id)
    {
        if (array_key_exists("prev_image", $data)) {
            $data["prev_image"] = Storage::disk("public")->put("/image", $data["prev_image"]);
        }
        if (!isset($data["isPublished"])) {
            $data["isPublished"] = 0;
        }
        $id->update($data);
    }
}
