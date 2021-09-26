<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ApiController extends Controller
{
    public function Insert_Student(Request $request){
           
        $student=new Student();
        $student->name=$request->input('name');
        $student->email=$request->input('email'); 
        $student->image=$request->input('image');
        $student->password=$request->input('password');

        $student->save();
        return response()->json($student);
    }


    public function Fetch_Student(){

            //$student =new Student();
            $student=Student::all();

           return response()->json($student);

    }

    public function Delete_Student($id){
        $delete=Student::find($id);
        if($delete->delete()){
            return response()->json("Delete Successfully");
        }
    }

    public function Update_Student(Request $request,$id){
      
        $update=Student::find($id);
        $update->name=$request->input('name');
        $update->email=$request->input('email');
        $update->image=$request->input('image');
        $update->password=$request->input('password');

        $update->save();
        return response()->json($update);
   

    }
}
