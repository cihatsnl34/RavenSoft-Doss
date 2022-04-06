<?php

namespace App\Http\Controllers;

use App\Models\Concact;
use App\Models\Image;
use App\Models\Message;
use App\Models\About;
use App\Models\Reference;
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
        $references =Reference::all();
        return view('home',['referance'=> $references]);
    }
    public function image()
    {
        $image =Image::first();
        return view('home',['image'=> $image]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $about=About::first();
        return view('about',['about'=> $about]);
    }
    public function contact()
    {
        $contact =Concact::first();
        return view('contact',['contact'=> $contact]);
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
