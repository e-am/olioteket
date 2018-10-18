<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use App\User;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $post->addcomment(request('body'));

        return back();
    }
}
