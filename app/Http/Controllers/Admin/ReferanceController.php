<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReferanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $reference = Reference::all();
       return view('admin.Reference.reference', ['reference'=>$reference]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Reference.reference_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reference = new Reference;
 
        $reference->name = $request->name;
 //resim gelecek
        $reference->save();
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
        $references = Reference::find($id);
        return view('admin.About.reference_edit', ['references' => $references]);
    }
    public function update(Request $request,$id)
    {
        $references = Reference::find($id);
        $references->name = $request->name;
        //resim gelecek
        $references->save();
        return redirect()->route('admin.reference');
    }
    public function destroy($id)
    {
        $references = Reference::find($id);
        $references->delete();
        return redirect()->route('admin.reference');
    }
}
