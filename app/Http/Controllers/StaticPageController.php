<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    
    // Homepage
    public function index(){

        return view('static-pages.index');
    }

    // Privacy
    public function privacy(){
        
        return view('static-pages.privacy');
    }

    // Faq
    public function faq(){

        return view('static-pages.faq');
    }
}
