<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    function index()
    {
       return view('admin.About.about');
    }
    public function create()
    {
        return view('admin.About.about_add');
    }
    public function store(Request $request)
    {

    }
    public function edit()
    {
        return view('admin.About.about_edit');
    }
    public function update(Request $request)
    {
        
    }
    public function destroy()
    {
        
    }
}
