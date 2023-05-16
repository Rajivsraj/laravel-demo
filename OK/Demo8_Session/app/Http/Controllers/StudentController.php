<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentDetail;

class StudentController extends Controller
{


    function showstudent_view(){
        return view("showstudent");
       
    }

    function showstudent_info(Request $req){
        $obj = new studentDetail;
        $obj->fname = $req['fname'];
        $obj->mname = $req['mname'];
        $obj->lname = $req['lname'];
        $obj->father_name = $req['father_name'];
        $obj->mother_name = $req['mother_name'];
        $obj->address = $req['address'];
        $obj->ph1 = $req['ph1'];
        $obj->ph2 = $req['ph2'];
        $obj->city = $req['city'];
        $obj->gender = $req['gender'];
       $obj->save();
        
        return view("showstudent");
       
    }

    function addstudent_view(){
        return view("addstudent");
       
    }



    function showstudent_get(){
        $data = studentDetail::all()->toArray();
        return view("showstudent", ["showstudent_get"=>$data]);
                
    }


    function delete(Request $req, $id=null){
        $data = studentDetail::find($id)->delete();
        return redirect('showstudent');
    }

    function edit(Request $req, $id=null){
        $data = studentDetail::find($id)->toArray();
        // return redirect('showstudent');

        return view('edit', ['updatedata' =>$data]);

    }


    function about(){
        return view("about");
    }
}
