<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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
    public function getIndex()
    {
        $user =  Auth::user()->userType;

        if ($user == 'teacher') {
            return view('teacher/welcome');
        } else {
            return view('parent/welcome');
        }

    }
}