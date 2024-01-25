<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
class InternController extends Controller
{
    public function create(){
        return view('intern.create');
    }
    public function insert(Request $a){
        // echo '<pre>';
        // print_r($a->all());
        $data = new Intern();
        $data->title = $a->title;
        $data->body = $a->body;
        $data->college = $a->college;
        $data->education = implode(',',$a->education);
        $data->gender = $a->gender;
        $data->save();
        if($data){
            return redirect('intern/create');
        }

    }
    public function display(){
        $data = Intern::all();
        return view('intern.display',compact('data'));
    }
    public function view($id){
        $data = Intern::find($id);
        return view('intern.view',compact('data'));
    }
    public function edit($id){
        $data = Intern::find($id);
        return view('intern.edit',compact('data'));
    }



    public function delete($id){
        $d=Intern::find($id);
        $deleted = $d->delete();
        if($deleted){
            return redirect('intern/display');
        }

    }
    public function update(Request $a){
        $data = Intern::find($a->id);
        $data->title = $a->title;
        $data->body = $a->body;
        $data->college = $a->college;
        $data->education = implode(',',$a->education);
        $data->gender = $a->gender;
        $data->save();
        if($data){
            return redirect('intern/display');
        }

    }
}
