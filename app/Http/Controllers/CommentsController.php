<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $post->addcomment(request('body'));

        return back();
    }
}
