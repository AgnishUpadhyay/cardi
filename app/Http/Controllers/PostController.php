<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::getHomepageListing();
        return view('welcome', ['posts'=>$posts]);
    }
    public function detailPost(Post $post)
    {
        return view('detail', ['post'=>$post]);
    }
}
