<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::getHomepageListing("");
        return view('welcome', ['posts'=>$posts]);
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $posts = Post::getHomepageListing($keyword);
        return view('welcome', ['posts' => $posts]);
    }
    // public function detailPost(Post $post)
    // {
    //     return view('detail', ['post'=>$post]);
    // }
    // public function nextArticle(Post $post)
    // {
    //     $nextArticle = Post::where('id', '>', $post->id)->orderBy('id', 'asc')->first();
    //     return response()->json([
    //         'nextArticle' => $nextArticle
    //     ]);
    // }
    public function detailPost(Post $post)
    {
        $nextArticle = Post::where('id', '>', $post->id)->where('released', '>', 0)->first();
        return view('detail', [
            'post' => $post,
            'nextArticle' => $nextArticle,
        ]);
    }

    public function nextArticle(Post $post)
    {
        $nextArticle = Post::where('id', '>', $post->id)->where('released', '>', 0)->first();
        return response()->json([
            'nextArticle' => $nextArticle,
        ]);
    }
}
