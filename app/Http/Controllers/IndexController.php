<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // La liste des commentaires
        $comments = Comment::all();
        $name= "Medhi";
        return view('index',
            [
                'comments'=>$comments,
                'name'=>$name
            ]
        );
    }

    public function details($id)
    {
        $comment = Comment::find($id);
        return view('details',
            [
                'comment'=>$comment
            ]
        );
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/');
    }
}
