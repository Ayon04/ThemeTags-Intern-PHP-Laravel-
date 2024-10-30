<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestService;

class StudentController extends Controller
{
    //

    public function page(){
   

        return view('student_form');

    }

    // public function create(Request $r ){
        

    //     print_r($r->all());
        
    // }







    public function create(RequestService $request)
    {
        // Will return only validated data
        
        //$validated = $request->validated();

        print_r($request->all());
    }


    




}
