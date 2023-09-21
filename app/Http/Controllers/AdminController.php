<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addView(){

        return view('admin.add_doctor');
    }
    public function upload(Request $request){
        $doctor= new doctor; //a new doctor is created in dct table

        $image =$request->file; //getting the image file inside image variable

        $imagename=time().'.'.$image->getClientOriginalExtension(); // whenever we upload an image, we upload it using a diff time function


        $request->file->move('doctorimage',$imagename); //when we upload the img file , its done in the doctorimage folder created in public

        $doctor->image=$imagename;  //sending this image to our db 
        $doctor->name=$request->name; //from add_doctor.php
        $doctor->phone=$request->number; //from add_doctor.php
        $doctor->RoomNo=$request->RoomNo; //from add_doctor.php
        $doctor->speciality=$request->speciality; //from add_doctor.php


        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Added Successfuly');




    }

}

// request because we are requesting an upload from add_doctor.php file? 