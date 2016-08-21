<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class BlogController extends Controller
{
    public function getSingle($slug)
    {
    	// fetch from DB based on slug
    	$post = Post::where('slug',  '=', $slug)->first();


    	return view('blog.single')->withPost($post);
    	// return the view and pass in the post object
    }
}
