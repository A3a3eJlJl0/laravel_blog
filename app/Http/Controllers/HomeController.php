<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function showDataUploadRequestForm()
    {
        return view('dataUploadRequest');
    }

    public function showDataUploadRequest(Request $request)
    {
         $json = json_encode($request->only('name', 'phone', 'email', 'request'));
         $filePath = $_SERVER['DOCUMENT_ROOT'] . '/local/user_requests/' . $request->input('email') . '.txt';
         if (file_put_contents($filePath, $json)) {
             return back()->with('success', 'Your request was submitted.');
         } else {
             return back()->with('error', 'Errors while writing request. Try one more time.');
         }
    }
}
