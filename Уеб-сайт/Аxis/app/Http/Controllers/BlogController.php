<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('blog');
    }

    public function getBlog()
    {
        return view('blogPost');
    }

    public function getBlogById($id)
    {
            return view('blog' . $id);
    }

}