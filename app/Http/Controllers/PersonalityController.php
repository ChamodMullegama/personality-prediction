<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalityController extends Controller
{
      public function showForm()
    {
        return view('Pages.Home.index');
    }
}
