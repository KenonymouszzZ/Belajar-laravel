<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $datateacher = $teacherRoom::all();

        return view('teacher', ['datateacher'=>$dataclass]);
    }
}
