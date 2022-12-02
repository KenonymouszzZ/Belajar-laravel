<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::with('student')->get();
        return view('class', compact('class'));
    }
}
