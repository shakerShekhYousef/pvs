<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //Return Contact page
    public function index()
    {
        return view('website.contact');
    }
}
