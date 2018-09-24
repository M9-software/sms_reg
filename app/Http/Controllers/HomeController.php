<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('login');
    }

    public function registe()
    {
        return view('registe');
    }

    public function forgot()
    {
        return view('forgot');
    }

    /*
    private is_login(Request $request)
    {
        $value = $request->session()->get('key');
    }
     */
}
