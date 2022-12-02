<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data=student::all();
        return 'asdsad';
    //    return dd($data);
    }
};