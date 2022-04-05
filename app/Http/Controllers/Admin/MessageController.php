<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messageData = Message::all();
        return view('admin.message.message', ['messageData' => $messageData]);
    }

    public function download(Request $request,$id)
    {
        $messageData = Message::find($id);
        $fileName = $messageData->file;
        $extension = pathinfo(storage_path('app/public/message/'.$fileName), PATHINFO_EXTENSION);
        return response()->download( storage_path('app/public/message/'.$fileName),$fileName, ['Content-Type' => $extension]);
    }

    public function destroy($id)
    {
        $messageData = Message::find($id);
        $messageData->delete();
        return redirect()->route('admin.message');
    }
}
