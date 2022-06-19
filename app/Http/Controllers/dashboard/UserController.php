<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

//        return view("admin.authors.index",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view("admin.authors.addUser");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $user = new User();
//        $user->name = $request->name;
////        $user->email = $request->email;
////        $user->password = $request->password;
//        $user_image = $request->file('user_img');
//        $file_name = $user->name . time() . '.' . $user_image->extension();
//        $user_image->move('author_images', $file_name);
//
//        $user->user_image = $file_name;
//
//        $user->save();
//        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
//        return view('admin.authors.editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
//        $user->name = $request->name;
////        $user->email = $request->email;
////        $user_image = $request->file('user_new');
//        $user_image = $request->file('user_new_img');
//
//        $file_name = $user->name . time() . '.' . $user_image->extension();
//
//        $user_image->move('author_images', $file_name);
//        $user->user_image = $file_name;
//
//
//        $user->save();
//
//        return redirect()->route('user.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
//        return redirect()->route('user.index');
    }
}
