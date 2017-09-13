<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::select(['id', 'title', 'short_desc', 'user_id', 'post_date'])->get();
        return view('front.index', compact('posts'));
    }

    /**
     * About page
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function about()
    {
        return view('front.about');
    }

    /**
     * Contact page
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function contact()
    {
        return view('front.contact');
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
}
