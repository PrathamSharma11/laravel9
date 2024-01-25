<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function create(){
        return view('image.create');
    }

    public function save(Request $a){
         $file=$a->file('image');
         $filename = 'image'. time().'.'.$a->image->extension();
            // dd($filename);
         $file->move("upload/",$filename);
         $data = new Image();
         $data->title=$a->title;
         $data->image=$filename;
         $data->save();
         if($data){
             return redirect('image/create');
         }
    }
    public function display(){
        $data = Image::all();
        return view('image.display',compact('data'));

    }
    public function edit($id){
        $data=Image::find($id);
        return view('image.edit',compact('data'));
    }
    public function update (Request $a){
        if($a->hasFile('image')){
            $file=$a->file('image');
        $filename = 'image'. time().'.'.$a->image->extension();

        $file->move("upload/",$filename);
        $data=Image::find($a->id);
        $data->title=$a->title;
         $data->image=$filename;
         $data->save();
         if($data){
             return redirect('image/display');
         }
         else{
             $data=Image::find($a->id);
             $data->title=$a->title;
             $data->save();
             if($data){
                 return redirect('image/display');
             }

         }

        }
        // $file=$a->file('image');
        // $filename = 'image'. time().'.'.$a->image->extension();

        // $file->move("upload/",$filename);
        // $data=Image::find($a->id);
        // $data->title=$a->title;
        //  $data->image=$filename;
        //  $data->save();
        //  if($data){
        //      return redirect('image/display');
        //  }

    }



}
