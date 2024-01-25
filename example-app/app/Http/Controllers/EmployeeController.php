<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home()
    
    {
        $name = 'pratham sharma';
        $data = ['aman','anthony',1234];
        return view('Employee/home',compact('name','data'));
    }
    public function team(){
        return view('Employee/team');
    }
}
