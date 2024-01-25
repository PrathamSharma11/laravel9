<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration/create');
    }
    public function save(Request $a){
        // echo '<pre>';
        // print_r($data->all());
        $data = new Registration();
        $data->name=$a->name;
        $data->mobile=$a->number;
        $data->email=$a->email;
        $data->address=$a->address;
        $data->qualifications=$a->qualifications;
        $data->branch=$a->branch;
        $data->semester=$a->semester;
        $data->course=$a->intern;
        $data->save();
        if($data){
            return redirect('registration/create');
        }


    }
    public function display(){
        $data=Registration::all();
        return view('registration.display',compact('data'));
    }
    public function view($id){
        $data =Registration::find($id);
        return view('registration.view',compact('data'));
    }
    public function edit($id){
        $data=Registration::find($id);
        return view('registration.edit',compact('data'));
    }
    public function update(Request $a){
        $data=Registration::find($a->id);
        $data->name=$a->name;
        $data->mobile=$a->number;
        $data->email=$a->email;
        $data->address=$a->address;
        $data->qualifications=$a->qualifications;
        $data->branch=$a->branch;
        $data->semester=$a->semester;
        $data->course=$a->intern;
        $data->save();
        if($data){
            return redirect('registration/display');
        }
    }
    public function delete($id){
        $d = Registration::find($id);
        $deleted = $d->delete();
        if($deleted){
            return redirect('registration/display');
        }
    }

}
