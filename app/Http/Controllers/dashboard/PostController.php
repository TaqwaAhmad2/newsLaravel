<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\category;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('project', "laravel_project");
        Cookie::queue('final', 'web2', 60 * 60 * 24);

        $posts = post::orderBy('created_at', 'desc')->paginate();
        return view("admin.posts.index", compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view("admin.posts.add", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|max:50|min:10|unique:posts',
            'body' => 'required|',
            'cat_id' => 'required|integer'
        ]);
        $post = new post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->desc = $request->desc;

        $post->category_id = $request->cat_id;
        $post->author_id = $request->author_id;
        $post_image = $request->file('post_image');
        $file_name = $post->title . time() . '.' . $post_image->extension();
        $post_image->move('post_images', $file_name);
        $post->post_image = $file_name;
        $post->save();
        return redirect()->route('post.index')->with('success', 'new post has been added');
        dd($request->toArray());

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\post $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        $authors = Author::all();
        return view('view', compact('authors', 'post'));
//        return view('post_view',compact('authors','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $categories = category::all();
        $authors = Author::all();
        return view('admin.posts.edit', compact('categories', 'authors', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->cat_id;
        $post->author_id = $request->author_id;
        $post->desc = $request->desc;
        $post_image = $request->file('post_new_image');
        $file_name = $post->title . time() . '.' . $post_image->extension();
        $post_image->move('post_images', $file_name);
        $post->post_image = $file_name;

        $post->save();

        return redirect()->route('post.index');
        dd($request->toArray());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('post.index');


    }
}
