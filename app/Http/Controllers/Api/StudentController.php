<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Filter Student by gender
    public function gender(Request $request)
    {

        // Recupero i dati dal configuration file
        $students = config('students.students');
        $genders = config('students.genders');


        // Assegno a $gender solo il dato che mi aspetti di ricevere
        $gender = $request->input('filter');
        
        $result = [
            'error' => '',
            'response' => []
        ];

        // Verifica se il genere scelto è contenuto nell'array genders
        // E restituisco in formato json il contenuto di $result richiesto o $error
        if( in_array($gender, $genders) ){
            if($gender == 'all') {
                $result['response'] = $students;
            } else
            foreach($students as $student){
                if($student['genere'] == $gender){
                    $result['response'][] = $student;
                }
            }
        } else{
            $result['error'] = 'Filtro non riconosciuto';
        }

        // Trasforma array in JSON
        return response()->json($result);
    }
};
