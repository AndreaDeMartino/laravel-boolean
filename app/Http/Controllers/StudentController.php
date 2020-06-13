<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    // Load Students info from config file
    public function __construct(){
        
        $this->students = config('students');
    }

    //Show Students Main Page 
    public function index(){

        //Declare the variable to use with compact
        $students = $this->students;

        return view('students.index', compact('students'));
    }

    //Show Students Info page
    public function show($slug){

        //Declare the variable to use with compact
        $student = $this->searchstudent($slug,$this->students);

        // Check on Student ID
        if (! $student) {
            abort('404');
        }

        return view('students.show', compact('student'));
    }

    //-- UTILITIES --//
    
    // Check Students exists by id
    private function  searchStudent($id, $array){
        foreach($array as $student){
            if($id == $student['slug']){
                return $student;
            }
        }
        return false;
    }
}
