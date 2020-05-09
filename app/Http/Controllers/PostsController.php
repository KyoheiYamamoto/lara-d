<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(6);

        return view('posts.index',['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit()
    {
        return view('posts.edit');
    }

    public function show()
    {
        return view('posts.show');
    }

}
