<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        return view('home');
    }

    public function uploadAvatar(Request $request){

        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);

            return redirect()->back()->with('message', 'Image Uploaded');

        }
        return redirect()->back()->with('error', 'Image not Uploaded');

    }
   
}
