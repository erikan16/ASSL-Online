<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use App\Assignment;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
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
        $assignments = Assignment::where('user', '=', $user)->get();
        return view('assignments.index')->with('assignment', $assignments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assignments.create');
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
            'subject' => 'required|max:255',
            'book' => 'required|max:255',
            'page' => 'required',
            'body' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255'
        ));

        // stores the received data and stores it into the database

        // sets up a variable called assignment from the Post Model
        $assignment = new Assignment;

        $assignment->subject = $request->subject;
        $assignment->book = $request->book;
        $assignment->page = $request->page;
        $assignment->body = $request->body;
        $assignment->slug = $request->slug;
        $user = Auth::user()->id;
        $assignment->user = $user;

        $assignment->save();

        Session::flash('success', 'The blog post was successfully saved!');

        return redirect()->route('assignments.show', $assignment->assignment_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = Assignment::find($id);
        return view('assignments.show')->with('assignment', $assignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the specific assignment id and edit only that one
        $assignment = Assignment::find($id);

        return view('assignments.edit')->with('assignment', $assignment);
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
            'subject' => 'required|max:255',
            'book' => 'required|max:255',
            'page' => 'required',
            'body' => 'required'
        ));

        $assignment = Assignment::find($id);

        $assignment->subject = $request->input('subject');
        $assignment->book = $request->input('book');
        $assignment->page = $request->input('page');
        $assignment->body = $request->input('body');
        $assignment->slug = $request->input('slug');
        $user = Auth::user()->id;
        $assignment->user = $user;

        $assignment->save();

        Session::flash('success', 'This post was successfully updated!');

        //redirect
        return redirect()->route('assignments.show', $assignment->assignment_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignment = Assignment::find($id);

        $assignment->delete();

        Session::flash('success', 'This assignment was successfully deleted!');

        return redirect()->route('assignments.index');
    }
}
