<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function showindex(){
        return view('admin.index');
    }

    function showpost(){
        return view('admin.posts.index');
    }
}
