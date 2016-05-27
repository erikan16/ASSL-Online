<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use App\Links;
use Illuminate\Support\Facades\Auth;

class TutorialsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $links = Links::where('user', '=', $user)->get();
        return view('tutorials.index')->with('links', $links);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutorials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validates the input fields within the form
        $this->validate($request, array(
            'title' => 'required|max:255',
            'links' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255'
        ));

        // stores the received data and stores it into the database

        // sets up a variable called link from the Links Model
        $link = new Links;

        $link->title = $request->title;
        $link->links = $request->links;
        $link->slug = $request->slug;
        $user = Auth::user()->id;
        $link->user = $user;

        $link->save();

        Session::flash('success', 'The blog post was successfully saved!');
//        $request->session()->flash('success', 'The blog post was successfully save!');

        return redirect()->route('tutorials.show', $link->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $link = Links::find($id);
        return view('tutorials.show')->with('link', $link);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the specific post id and edit only that one
        $link = Links::find($id);

        return view('tutorials.edit')->with('link', $link);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validates the input fields within the form
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'links' => 'required'
        ));

        $link = Links::find($id);

        $link->title = $request->input('title');
        $link->slug = $request->input('slug');
        $link->links = $request->input('links');

        $link->save();

        Session::flash('success', 'This post was successfully updated!');

        //redirect
        return redirect()->route('tutorials.show', $link->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $links = Links::find($id);

        $links->delete();

        Session::flash('success', 'This post was successfully deleted!');

        return redirect()->route('tutorials.index');
    }
}
