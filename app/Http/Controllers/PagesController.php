<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex()
    {
    	return view('pages.welcome');
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
