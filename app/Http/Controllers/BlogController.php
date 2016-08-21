<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class BlogController extends Controller
{

    public function getIndex()
    {
    	// fetch from DB based on slug
    	$posts = Post::paginate(10);

    	return view('blog.index')->withPosts($posts);
    	// return the view and pass in the post object
    }

    public function getSingle($slug)
    {
    	// fetch from DB based on slug
    	$post = Post::where('slug',  '=', $slug)->first();

    	return view('blog.single')->withPost($post);
    	// return the view and pass in the post object
    }

}
