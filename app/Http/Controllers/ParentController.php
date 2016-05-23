<?php

namespace App\Http\Controllers;

use App\Post;

class ParentController extends Controller
{
    public function getPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('parent/class_room')->with('posts', $posts);
    }
    public function getPost($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        return view('parent.single')->with('post', $post);
    }

    public function getCommunications()
    {
        return view('parent/teacher_communication');
    }
    public function getCommunication()
    {
        return view('parent/teacher_communication');
    }

    public function getNews()
    {
        return view('parent/school_news');
    }
    public function getSingleNew()
    {
        return view('parent/school_news');
    }

    public function getTutorials()
    {
        return view('parent/tutorial');
    }
    public function getTutorial()
    {

    }
}