<?php

namespace App\Http\Controllers\Admin\BaseControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Service\PostService;
use Illuminate\Http\Request;

class BasePostController extends Controller
{
   public $service;

   public function __construct(PostService $service)
   {
        return $this->service = $service;
   }
}
