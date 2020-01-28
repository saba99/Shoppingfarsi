<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Contact()
    {

        return view('pages.contact');
    }
    public function Features()
    {

        return view('pages.features');
    }
    
    public function AboutUs()
    {

        return view('pages.about-us');
    }
}
