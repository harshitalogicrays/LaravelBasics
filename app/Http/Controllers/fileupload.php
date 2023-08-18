<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileupload extends Controller
{
    

    public function imageupload()
    {
        return view('fileupload');
    }

    public function imgstore(Request $request)
    {
        // printdata($request->all());

       //return $request->file('file')->store('images');

       $request->validate([
        'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
        $file_name=time()."lr".$request->file('file')->getClientOriginalName();
        return $request->file('file')->storeAs('images',$file_name);
    }
}
