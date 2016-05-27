<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Links;

class ParentController extends Controller
{

    public function getPosts()
    {
        $currentUserTeacher = Auth::user()->teacher_link;
        $posts = Post::where('user', '=', $currentUserTeacher)->orderBy('created_at', 'desc')->limit(4)->get();

        return view('parent/class_room')->with('posts', $posts);
    }
    public function getPost($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        return view('parent.class_single')->with('post', $post);
    }

    public function getCommunications()
    {
        $currentUserTeacher = Auth::user()->teacher_link;
        $assignments = Assignment::where('user', '=', $currentUserTeacher)->orderBy('created_at', 'desc')->limit(4)->get();

        return view('parent/teacher_communication')->with('assignments', $assignments);
    }
    public function getCommunication($slug)
    {
        $assignment = Assignment::where('slug', '=', $slug)->first();
        return view('parent.assignment_single')->with('assignment', $assignment);
    }

    public function getTutorials()
    {
        $currentUserTeacher = Auth::user()->teacher_link;
        $tutorials = Links::where('user', '=', $currentUserTeacher)->get();

        return view('parent/tutorial')->with('tutorials', $tutorials);
    }
    public function getTutorial($slug)
    {
        $tutorial = Links::where('slug', '=', $slug)->first();
        return view('tutorial.tutorial_single')->with('tutorial', $tutorial);
    }
}