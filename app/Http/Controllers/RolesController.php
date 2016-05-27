<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RolesController extends Controller
{
   public function store(){
       request()->user()->makeUser('teacher');

       dd(request()->user()->hasRole('teacher'));
   }
}
