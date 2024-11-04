<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestService;
use App\Http\Requests\UpdateRequest;
use App\Models\Student;
use Illuminate\Console\View\Components\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
           //$data = $request->input();
            $student = new Student();
            $student->name = $request->name;
            $student->username = $request->username;
            $student->mobile = $request->mobile;
            $student->email = $request->email;
            $student->password = $request->password;
            $student->save();
            // Alert:: success('status',"Insert successfully");
            // return redirect()->back();
            
            return redirect()->back()->with('message',"Student Added");


            //->with('status',"Insert successfully");
            //print_r($request->all());

        
    }



    public function ViewStudent()
    {
        
        $students = Student::all();
        
        return view('student_view',compact('students'));
    }


    public function remove( $student_id) {
        
        $student = Student::find($student_id);   
        

       $student->delete();
        return redirect('/student_view')->with('messge',"data deleted");
     }


     public function updateForm($student_id){
        
        $student = Student::find($student_id);
                 
           return view('student_update_form',compact('student'));
   
       }


     public function update(UpdateRequest $req,$student_id){
        
        $student = Student::find($this->student_id);

        $student->name=$req->name;
        $student->username = $req->username;
        $student->mobile = $req->mobile;
        $student->email = $req->email;
        $student->password = $req->password;
        $student->update();
      
        return redirect()->back()->with('updatemsg',"Student details updated");  
     }




}
