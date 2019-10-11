<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsfeedController extends Controller
{
      public function user_show_newsfeed()
   
    {
        return view('user.newsfeed.show_newsfeed');
    }
}
