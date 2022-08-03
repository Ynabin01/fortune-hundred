<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home');
    }
    public function aboutus(){
        return view('website.aboutus');
    }
    public function services(){
        return view('website.services');
    }
    public function studyabroad(){
        return view('website.studyabroad');
    }
    public function testprepration(){
        return view('website.testprepration');
    }
    public function gallery(){
        return view('website.gallery');
    }
    public function contact(){
        return view('website.contact');
    }
}

