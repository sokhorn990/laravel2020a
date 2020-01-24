<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public $studetns = array('Preab','Sovath','Reach','Rith','Kanha');

    public function showStudent(){
        // $students =['Preab','Sovath','Reach','Rith','Kanha'];
        return view("pages.student")->with('student',$this->students);
    }

    public function searchStudent($name){
        if (!$students.contains($name)) {
            echo "Don't have this name in list";
        }else{
            for($i=0;count($students);$i++){
                
            }
        }
        
    }
}
