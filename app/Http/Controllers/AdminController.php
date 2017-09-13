<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    /**
     * Admin dashboard index page
     *
     * @param $var1 $var2
     * @return Type $var
     */

    public function index()
    {
        return view('back.admin.index');
    }
}
