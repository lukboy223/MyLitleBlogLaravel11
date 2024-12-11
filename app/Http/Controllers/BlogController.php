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
        $comments = DB::table('comments')
        ->join('users', 'comments.user_id', '=', 'users.id')
        ->select('content', 'name')->where('blog_id', $blog->id)->simplePaginate(10);

        return view('blogs.view', [
            'blog' => $blog,
            'user' => $user,
            'comments' => $comments,
        ]);
    }
}
