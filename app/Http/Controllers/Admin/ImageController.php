<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
       $image = Image::all();
       return view('admin.image.image', ['image'=>$image]);
    }
    public function create()
    {
        return view('admin.image.image_add');
    }
    public function store(Request $request)
    {
        $fileName = $request->file('files')->getClientOriginalName();
        $request->file('files')->storeAs('public/image',$fileName);
        $name = $request->input('name');
        Image::insert([
            'name' => $name,
            'file' => $fileName
        ]);
        return redirect()->route('admin.image');
    }
    public function edit($id)
    {
        $imagedata = Image::find($id);
        return view('admin.image.image_edit', ['imagedata' => $imagedata]);
    }
    public function update(Request $request,$id)
    {
        $imagedata = Image::find($id);
        $imagedata->name = $request->name;
        if($request->file('files') !== null)
        {
            unlink(storage_path('app/public/image/'.$imagedata->file));
            $fileName = $request->file('files')->getClientOriginalName();
            $request->file('files')->storeAs('public/image',$fileName);
            $imagedata->file = $fileName;
        }
        
        
        $imagedata->save();
        return redirect()->route('admin.image');
    }
    public function destroy($id)
    {
        $imagedata = Image::find($id);
        $imagedata->delete();
        return redirect()->route('admin.image');
    }


}
