<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Author::all();

        return view("admin.authors.index",compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.authors.addAuthor");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->name;
//        $user->email = $request->email;
//        $user->password = $request->password;
        $author_image = $request->file('author_img');
        $file_name = $author->name . time() . '.' . $author_image->extension();
        $author_image->move('author_images', $file_name);

        $author->author_image = $file_name;

        $author->save();
        return redirect()->route('author.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Author $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Author $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('admin.authors.editAuthor', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Author $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $author->name = $request->name;
//        $user->email = $request->email;
//        $user_image = $request->file('user_new');
        $author_image = $request->file('user_new_img');

        $file_name = $author->name . time() . '.' . $author_image->extension();

        $author_image->move('author_images', $file_name);
        $author->author_image = $file_name;


        $author->save();

        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Author $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('author.index');
    }
}
