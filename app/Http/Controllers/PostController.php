<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('replies.user', 'user')->whereNull('parent_id')->get();

        // Pass posts to the view
        return view('main', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'parent_id' => 'nullable|exists:posts,id',
        ]);

        $post = new Post;
        $post->content = $request->content;
        $post->user_id = Auth::id();
        $post->parent_id = $request->parent_id;
        $post->save();

        return redirect()->back();
    }
}
