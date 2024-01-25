<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('front/index');
    }
    public function about(){
        return view('front/about');
    }
    public function contact(){
        return view('front/contact');
    }
    public function blog(){
        return view('front/blog');
    }
    public function login(){
        return view('front/login');
    }
    public function blogdetail($id){
        //echo $id;
        return view('front/blog_detail');
    }
}
