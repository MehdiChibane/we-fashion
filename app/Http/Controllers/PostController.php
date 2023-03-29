<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post',['posts'=>$posts]);
    }

    public function details($id)
    {
        $post = Post::find($id);
        return view('details-post',['post'=>$post]);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return $this->index();
    }
}
