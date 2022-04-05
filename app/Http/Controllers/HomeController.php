<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactRequest(Request $request)
    {

        $messageData = new Message;
        $messageData->department = $request->department;
        $messageData->subject    = $request->subject;
        $messageData->name       = $request->name;
        $messageData->email      = $request->email;
        $messageData->message    = $request->message;

        $fileName = $request->file('files')->getClientOriginalName();
        $request->file('files')->storeAs('public/message',$fileName);
        $messageData->file = $fileName;
        $messageData->save();
        return view('contact');
    }

    
}
