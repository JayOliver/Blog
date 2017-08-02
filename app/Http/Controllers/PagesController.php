<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function fets(){
    	return view('pages.fets');
    }

    public function home(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('pages.home')->withPosts($posts);
    }

    public function aboutme(){
    	return view('pages.aboutme');
    }

    public function contact(){
    	return view('pages.contact');
    }
}
