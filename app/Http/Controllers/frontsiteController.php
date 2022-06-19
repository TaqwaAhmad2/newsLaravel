<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\category;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class frontsiteController extends Controller
{
    function showhome()
    {
        $categories = category::all();
        $posts = post::all();
        $last_posts = post::latest()->limit(3)->get(['title', 'post_image', 'desc','created_at']);
        $authors = Author::all();
        return view('frontsite.index', compact('categories', 'authors', 'posts', 'last_posts'));
    }

    function showouthors()
    {
        $authors = Author::all();
        return view('frontsite.authors', compact('authors'));
    }

    function showallnews()
    {
        $posts = post::all();
        return view('frontsite.show_all', compact('posts'));
    }


    function showsingle($id)
    {
        $posts=category::find($id)->posts;
        return view('frontsite.single', compact('posts'));
    }

    function showsinglepost($id)
    { $authors=Author::all();
        $posts=post::all();
        return view('frontsite.post_view', compact( 'posts','authors'));
    }
}
