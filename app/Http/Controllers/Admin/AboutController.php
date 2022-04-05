<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function index()
    {
       $aboutData= About::all();
       return view('admin.About.about', ['aboutData'=>$aboutData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.About.about_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aboutData = new About;
 
        $aboutData->name = $request->name;
 //resim gelecek
        $aboutData->save();
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutData = About::find($id);
        return view('admin.About.about_edit', ['aboutData' => $aboutData]);
    }
    public function update(Request $request,$id)
    {
        $aboutData = About::find($id);
        $aboutData->name = $request->name;
        //resim gelecek
        $aboutData->save();
        return redirect()->route('admin.about');
    }
    public function destroy($id)
    {
        $aboutData = About::find($id);
        $aboutData->delete();
        return redirect()->route('admin.about');
    }
}
