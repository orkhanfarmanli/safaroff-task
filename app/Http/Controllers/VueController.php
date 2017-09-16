<?php

namespace App\Http\Controllers;

class VueController extends Controller
{
    /**
     * Index Page
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function index()
    {
        return view('vue.index');
    }
}
