<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create() {
        return view('post/create');
    }

    public function store(PostCreateRequest $req) {
        Post::create($req->all());
        return redirect('/');
    }

    public function delete(Request $req) {
        $post = Post::findOrFail($req->id);
        $post->delete();

        return redirect('/');
    }
}
