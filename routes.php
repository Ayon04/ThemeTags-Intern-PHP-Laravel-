<?php
namespace App\Models;
namespace App\resources\views;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Controller;
Route::get('/', function () {
    return view('home');
});
// Route::get('/student_create', function () {
//     return view('student_create');
// })->name('student.create'); // Assign a name to the route
// Route::post('/student.create', [StudentController::class, 'store'])->name('student.store');
Route :: get('/student_form',[StudentController::class,'page']);
Route :: post('/student_create',[StudentController::class,'create'])->name('new_student_create');
Route :: get('/student_view',[StudentController::class,'ViewStudent'])->name('student_view');
Route :: get('delete/{student_id}',[StudentController::class,'remove']);
//Route :: get('update/{student_id}',[StudentController::class,'updateForm']);
//Route :: put('/student_update/{student_id}',[StudentController::class,'update']);
Route::get('student_edit/{student_id}', [StudentController::class,'updateForm']);
Route::put('student_update/{student_id}', [StudentController::class, 'update']);






                                                     




