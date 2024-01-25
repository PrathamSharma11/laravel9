<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
   public function create(){
       return view('teacher/create');
   }
   public function store(Request $t){
    //    echo '<pre>';
    //    print_r($t -> all());
    $data = new Teacher();
    $data->name=$t->name;
    $data->email=$t->email;
    $data->college=$t->college;
    $data->city=$t->city;
    $data->save();
    if($data){
        return redirect('teacher/create');
    }

}
     public function display(){
         $data = Teacher::all();
         return view('teacher.display',compact('data'));
     }

     public function view($id){
         $data = Teacher::find($id);
        //  echo '<pre>';
        //  print_r($data);

         return view('teacher.view',compact('data'));


     }
     public function edit($id){
         $data = Teacher::find($id);
         return view('teacher.edit',compact('data'));
     }
     public function update(Request $a){
        //  echo "<pre>";
        //  print_r($a->all());
        //  die;
        $data=Teacher::find($a->id);
        $data->name=$a->name;
        $data->email=$a->email;
        $data->college=$a->college;
        $data->city=$a->city;
        $data->save();
        if($data){
           return redirect('teacher/display');
    }

    }
     public function delete($id){
        $d=Teacher::find($id);
        $deleted=$d->delete();
        if($deleted){
            return redirect('teacher/display');
        }
    }
}
