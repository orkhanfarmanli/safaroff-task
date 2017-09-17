<?php

namespace App\Http\Controllers;

use App\Page;
use App\Post;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::where('identifier', '=', 'home')->first();
        $posts = Post::select(['id', 'title', 'short_desc', 'user_id', 'created_at'])->latest()->take(10)->get();
        return view('front.index', compact('posts', 'page'));
    }

    /**
     * About page
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function about()
    {
        $page = Page::where('identifier', '=', 'about')->first();
        return view('front.about', compact('page'));
    }

    /**
     * All posts page
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function posts()
    {
        $posts = Post::select(['id', 'title', 'short_desc', 'user_id', 'created_at'])->latest()->get();
        return view('front.posts', compact('posts'));
    }

    /**
     * Post page
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function post(Post $post)
    {
        return view('front.post', compact('post'));
    }

    /**
     * Contact page
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function contact()
    {
        $page = Page::where('identifier', '=', 'contact')->first();
        return view('front.contact', compact('page'));
    }
}
