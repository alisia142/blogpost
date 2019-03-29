<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
    //
    public function index()
    {
        return view('pages.homepage');
    }

    public function create()
    {
        $user = Auth::user();
        $userId = $user->id;
        return view('pages.create', compact('userId'));
    }

    public function store()
    {
        $description = Input::get('description');
        $image = Input::get('image');
        echo $image, $description;
    }
}
