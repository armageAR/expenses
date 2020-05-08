<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends AuthController
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        //alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');

        return view('home');
    }
}
