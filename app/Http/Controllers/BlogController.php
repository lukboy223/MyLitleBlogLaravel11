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
}
