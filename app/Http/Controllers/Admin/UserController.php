<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view("admin.user.index", compact('users'));
    }

    public function create()
    {
        return view("admin.user.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string",
            'email' => "string|unique:users",
            'password' => "required|string",
            "isPublished" => "",
            "role" => ""
        ]);

        User::create($data);
        return redirect()->route('admin.user.index');
    }

    public function edit(User $id)
    {
        $user = $id;
        return view("admin.user.edit", compact("user"));
    }

    public function update(User $id, Request $request)
    {
        $data = $request->validate([
            'name' => "required|string",
            'email' => "string|unique:users",
            "isPublished" => "",
        ]);
        if(!isset($data['isPublished'])){
            $data['isPublished'] = 0;
        }
        $id->update($data);
        return redirect()->route("admin.user.index");
    }

}
