<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Concact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ConcactController extends Controller
{
    public function index()
    {
       $contactData = Concact::all();
       return view('admin.contact.contact', ['contactData'=>$contactData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.contact_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactData = new Concact;
        $contactData->email = $request->email;
        $contactData->phone = $request->phone;
        $contactData->facebookUrl = $request->facebookUrl;
        $contactData->twitterUrl = $request->twitterUrl;
        $contactData->instagramUrl = $request->instagramUrl;
        $contactData->linkedinUrl = $request->linkedinUrl;
        $contactData->adress = $request->adress;
        $contactData->save();
        return redirect()->route('admin.contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactData = Concact::find($id);
        return view('admin.contact.contact_edit', ['contactData' => $contactData]);
    }
    public function update(Request $request,$id)
    {
        $contactData = Concact::find($id);
        $contactData->email = $request->email;
        $contactData->phone = $request->phone;
        $contactData->facebookUrl = $request->facebookUrl;
        $contactData->twitterUrl = $request->twitterUrl;
        $contactData->instagramUrl = $request->instagramUrl;
        $contactData->linkedinUrl = $request->linkedinUrl;
        $contactData->adress = $request->adress;
        $contactData->save();
        return redirect()->route('admin.contact');
    }
    public function destroy($id)
    {
        $contactData = Concact::find($id);
        $contactData->delete();
        return redirect()->route('admin.contact');
    }
    
}
