<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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
        $fileName = $request->file('files')->getClientOriginalName();
        $request->file('files')->storeAs('public/company',$fileName);
        $name = $request->input('name');
        Reference::insert([
            'CompanyName' => $name,
            'CompanyLogo' => $fileName
        ]);
        return redirect()->route('admin.reference');
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
        return view('admin.Reference.reference_edit', ['references' => $references]);
    }
    public function update(Request $request,$id)
    {
        $references = Reference::find($id);
        $references->CompanyName = $request->name;
        if($request->file('files') !== null)
        {
            unlink(storage_path('app/public/company/'.$references->CompanyLogo));
            $fileName = $request->file('files')->getClientOriginalName();
            $request->file('files')->storeAs('public/company',$fileName);
            $references->CompanyLogo = $fileName;
        }
        
        
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
