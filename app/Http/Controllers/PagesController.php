<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;
use Mail;
use Session;

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

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10',
        ]);

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
        ];
        Mail::send('emails.contact', $data, function($message) use ($data)  {
            $message->from($data['email']);
            $message->to('david@example.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was Sent.');
        return redirect('/');
    }
}
