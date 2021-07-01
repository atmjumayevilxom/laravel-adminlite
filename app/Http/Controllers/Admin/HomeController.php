<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $post_count = Post::all()->count();
        return view(
            'admin.home.index',
            ['post_count' => $post_count]
        );
    }
}
