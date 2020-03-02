<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class PagesController extends Controller
{
    public function home() {
        $page_title = !empty(request('title')) ? request('title') : 'My First Laravel Project!';
        return view('welcome',[
            "title" => $page_title
        ]);
    }
    public function aboutme() {
        return view('about');
    }
    public function contactme() {
        return view('contact');
    }
}
