<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        return view("admin.categories.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.addCat");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new category();
        $categories->title = $request->title;
        $categories->code = $request->code;
        $category_image = $request->file('cat_image');
        $file_name = $categories->title . time() . '.' . $category_image->extension();
        $category_image->move('category_images', $file_name);
        $categories->cat_image = $file_name;
        $categories->save();
        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
//    public function showsingle(category $category)
//    {
//        $posts = post::all();
//
//        return view('frontsite.single', compact('posts', 'category'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('admin.categories.editCat', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $category->title = $request->title;
        $category->code = $request->code;
        $cat_image = $request->file('new_cat_image');
        $file_name = $category->title . time() . '.' . $cat_image->extension();
        $cat_image->move('category_images', $file_name);
        $category->cat_image = $file_name;
        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route('category.index');


    }
}
