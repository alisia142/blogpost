<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();

        return view('pages.homepage')->with('posts', $posts);
    }

    public function create()
    {
        $user = Auth::user();
        $userId = $user->id;
        return view('pages.create', compact('userId'));
    }

    public function store(Request $request)
    {
        $file = $request->file();
        dd($request);
        Storage::putFile('uploads', $request->file('image'));
        $post = new Post();
        $post->description = request('description');
        $post->image = request('image');
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect('home');
    }


}
