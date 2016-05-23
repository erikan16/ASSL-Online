<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');
    }
    public function getIndex()
    {
        return view('login');
    }
    public function getParent()
    {
        return view('parent/welcome');
    }

    public function getTeacher()
    {
        return view('teacher/welcome');
    }
}