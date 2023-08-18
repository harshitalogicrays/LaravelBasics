<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use Illuminate\Http\Request;

class joincontroller extends Controller
{
    public function index(){
        return Emp::with('getGroup')->get();
    }
}
