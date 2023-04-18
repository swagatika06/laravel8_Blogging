<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::with('category', 'tags')->latest()->paginate(10);

        if ($request->expectsJson()) {
            
            return response()->json($posts, 200);
        } else {
            return view('posts.index', compact('posts'));
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $post = Post::with('category', 'tags')->findOrFail($id);

        if ($request->expectsJson()) {
            return response()->json($post, 200);
        } else {
            return view('posts.show', compact('post'));
        }
    }
}
