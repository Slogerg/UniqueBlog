<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $items = Post::all();
        return view('welcome',compact('items'));
    }

    public function single($id)
    {
        $item = Post::where('id',$id)->first();
        return view('item',compact('item'));
    }
}
