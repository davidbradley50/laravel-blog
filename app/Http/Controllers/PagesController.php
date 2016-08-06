<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();


    	return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        $first = 'David';
        $last = 'Bradley';
        $fullname = $first . " " . $last;
        $email = "test@example.com";
        $data = array(
            'email' => $email,
            'fullname' => $fullname
        );
    	return view('pages.about')->withData($data);
    }

    public function getContact()
    {
    	return view('pages.contact');
    }
}
