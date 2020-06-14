<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $genders;

    // Load Students info from config file
    public function __construct(){
        
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }

    //Show Students Main Page 
    public function index(){

        //Declare the variable to use with compact
        $students = $this->students;
        $genders = $this->genders;

        return view('students.index', compact('students', 'genders'));
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
    private function  searchStudent($slug, $array){
        foreach($array as $student){
            if($slug == $student['slug']){
                return $student;
            }
        }
        return false;
    }
}
