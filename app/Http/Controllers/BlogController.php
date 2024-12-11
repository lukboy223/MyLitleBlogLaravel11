<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blogs')->select('id', 'title')->simplePaginate(10);
        // dd($blogs);
        return view('blogs.index', [
            'blogs' => $blogs
        ]);
    }
    public function view(Blog $blog)
    {

        $user = DB::table('users')->select('name')->where('id', $blog->user_id)->first();
        // dd($blog);
        return view('blogs.view', [
            'blog' => $blog,
            'user' => $user
        ]);
    }
}
