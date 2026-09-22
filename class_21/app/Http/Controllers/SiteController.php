<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        $content = Page::about();
        
        return view('pages.about', compact('content'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
