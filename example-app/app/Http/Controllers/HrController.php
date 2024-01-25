<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrController extends Controller
{
    public function home(){
        return view('hr/home');
    }
    public function about(){
        return view('hr/about');
    }
    public function career(){
        return view('hr/career');
    }
    public function team(){
        return view('hr/team');
    }
    public function contact(){
        return view('hr/contact');
    }
}
