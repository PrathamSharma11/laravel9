<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionalController extends Controller
{
    public function aif(){
        $name = "if";
        return view('condition/if',compact('name'));
    }

    public function aelseif(){
        $name = "pn";
        return view('condition/elseif',compact('name'));
    }

    public function aisset(){
        $name = "if";
        return view('condition/isset',compact('name'));
    }

    public function aempty(){
        $name = "info";
        return view('condition/empty',compact('name'));
    }

    public function aunless(){
        $name = "tutor";
        return view('condition/unless',compact('name'));
    }

    public function bfor(){
        $name = "online";
        return view('loop/for',compact('name'));
    }

    public function bforeach(){
        $name = "aman";
        $names = ["a","b"];
        return view('loop/foreach',compact('name','names'));
    }

    public function bforelse(){
        $name = "pratham";
        $names = ["x","y","z"];
        return view('loop/forelse',compact('name','names'));
    }

    public function bwhile(){
        $name = "web";
        return view('loop/while',compact('name'));
    }

    public function loopindex(){
        $name = "if";
        $names = ['a','z','x'];
        return view('loop/loopindex',compact('name','names'));
    }



}
