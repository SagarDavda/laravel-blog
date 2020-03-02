<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        return view('blog.index',compact('blogs'));
    }
    public function store(){
        request()->validate([
            "title"=>['required','min:5','max:255'],
            "content"=>['required','min:5']
        ]);
        Blog::create(request(['title','content']));
        return redirect('/blog');
    }
    public function create(){
        return view('blog.create');
    }
    public function show(Blog $blog){
        return view('blog.show',compact('blog'));
    }
    public function update(Blog $blog){
        request()->validate([
            "title"=>['required','min:5','max:255'],
            "content"=>['required','min:5']
        ]);
        $blog->update(request(['title','content']));
        return redirect('/blog');
    }
    public function destroy(Blog $blog){
        $blog->delete();
        return redirect('/blog');
    }
    public function edit(Blog $blog){
        return view('blog.edit',compact('blog'));
    }
}
