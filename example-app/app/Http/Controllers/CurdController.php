<?php

namespace App\Http\Controllers;

use App\Models\Curd;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    public function create(){
        return view('curd.create');


    }

    public function save(Request $a){
        // echo '<pre>';
        // print_r($data->all());
        $data = new Curd();
        $data->username=$a->username;
        $data->password=$a->password;
        $data->save();
        if($data){
            return redirect('curd/create');
        }


    }

    public function display(){
        $data=Curd::all();
        // echo'<pre>';
        // print_r($data);
        // die;
        return view('curd.display',compact('data'));


    }
    public function view($id){
        //echo $id;
        $data=Curd::find($id);
        //echo'<pre>';
        //print_r($data);
        return view('curd.view',compact('data'));
    }
    public function edit($id){
        //echo $id;
        $data=Curd::find($id);
        //echo'<pre>';
        //print_r($data);
        return view('curd.edit',compact('data'));
    }
    public function update(Request $a){
        // echo '<pre>';
        // print_r($a->all());
        $data=Curd::find($a->id);
        $data->username=$a->username;
        $data->password=$a->password;
        $data->save();
        if($data){
            return redirect('curd/display');
        }


    }
    public function delete($id){
        $d=Curd::find($id);
        $deleted=$d->delete();
        if($deleted){
            return redirect('curd/display');
        }
    }

}
