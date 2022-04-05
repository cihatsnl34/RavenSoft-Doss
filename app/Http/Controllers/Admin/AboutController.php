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
 
        $aboutData->firstTitle = $request->firstTitle;
        $aboutData->firstText = $request->firstText;

        $aboutData->secondTitle = $request->secondTitle;

        $aboutData->thirdTitle = $request->thirdTitle;
        $aboutData->thirdText = $request->thirdText;

        $aboutData->fourTitle = $request->fourTitle;
        $aboutData->fourText = $request->fourText;

        $aboutData->fiveTitle = $request->fiveTitle;
        $aboutData->fiveText = $request->fiveText;

        $aboutData->sixTitle = $request->sixTitle;
        $aboutData->sixText = $request->sixText ;

        $aboutData->sevenTitle = $request->sevenTitle;

        $aboutData->eightTitle = $request->eightTitle;
        $aboutData->eightText = $request->eightText;

        $aboutData->nineTitle = $request->nineTitle;
        $aboutData->nineText = $request->nineText;

        $aboutData->tenTitle = $request->tenTitle;
        $aboutData->tenText = $request->tenText;

        $aboutData->elevenTitle = $request->elevenTitle;
        $aboutData->elevenText = $request->elevenText;
        
        $aboutData->twelveTitle = $request->twelveTitle;
        $aboutData->twelveText = $request->twelveText;

        
        $aboutData->thirteenTitle = $request->thirteenTitle;
        $aboutData->thirteenText = $request->thirteenText;

        
        $aboutData->fourteenTitle = $request->fourteenTitle;
        $aboutData->fourteenText = $request->fourteenText;
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
       $aboutData->firstTitle = $request->firstTitle;
        $aboutData->firstText = $request->firstText;
        
        $aboutData->secondTitle = $request->secondTitle;

        $aboutData->thirdTitle = $request->thirdTitle;
        $aboutData->thirdText = $request->thirdText;

        $aboutData->fourTitle = $request->fourTitle;
        $aboutData->fourText = $request->fourText;

        $aboutData->fiveTitle = $request->fiveTitle;
        $aboutData->fiveText = $request->fiveText;

        $aboutData->sixTitle = $request->sixTitle;
        $aboutData->sixText = $request->sixText ;

        $aboutData->sevenTitle = $request->sevenTitle;

        $aboutData->eightTitle = $request->eightTitle;
        $aboutData->eightText = $request->eightText;

        $aboutData->nineTitle = $request->nineTitle;
        $aboutData->nineText = $request->nineText;

        $aboutData->tenTitle = $request->tenTitle;
        $aboutData->tenText = $request->tenText;

        $aboutData->elevenTitle = $request->elevenTitle;
        $aboutData->elevenText = $request->elevenText;
        
        $aboutData->twelveTitle = $request->twelveTitle;
        $aboutData->twelveText = $request->twelveText;

        
        $aboutData->thirteenTitle = $request->thirteenTitle;
        $aboutData->thirteenText = $request->thirteenText;

        
        $aboutData->fourteenTitle = $request->fourteenTitle;
        $aboutData->fourteenText = $request->fourteenText;
        
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
