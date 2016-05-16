<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
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