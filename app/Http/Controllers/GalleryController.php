<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function user_show_gallery()
   
    {
        return view('user.gallery.show_gallery');
    }
}
