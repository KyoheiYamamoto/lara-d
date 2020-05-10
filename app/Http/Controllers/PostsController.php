<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    //リクエストにインスタンスの生成
    {
        $params = $request->validate([
            'title'=>'required|max:20',
            'body'=>'required|max:140',
        ]);

        dd($params);
        return view('posts.create');
    }

     public function show()
    {
        return view('posts.show');
    }

    public function edit()
    {
        return view('posts.edit');
    }
}
