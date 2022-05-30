<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
class HomeController extends Controller
{
    public function index()
    {
        $message = Message::all();
        $counts = [
            'message' => count($message),
        ];
        return view('admin.dashboard',['counts'=>$counts]);
    }
}
