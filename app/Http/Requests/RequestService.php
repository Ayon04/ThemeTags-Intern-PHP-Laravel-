<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
 


class RequestService extends FormRequest {

    
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {


        return [
            'name'     => 'required | string  | max: 50 | alpha',
            'username' => 'required |alpha_num| min:6  | max :10 ',
            'mobile'   => 'required |numeric  | min:11  |regex:/(01)[0-9]{9}/',
            'email'    => 'required | email',
            'password' => 'required | alpha_num | min:4 | max:10 '
        ];
    }

  
        public function messages(){
        return [

            'name.required'     =>'Name is Required',
            'name.alpha'        =>'Name must be alphabetic',
            'name.max'          =>'Name can not be more then 50 charecters',
            'username.required' =>'username is Required',
            'username.max'      =>'username maximum length is 10',
            'username.alpha_num'=>'username must be alpha numeric',
            'username.min'      =>'username must be atleast 6 ',
            'mobile.required'   =>'mobile no is required',
            'mobile.regex'      =>'mobile no must start with 01',
            'mobile.numeric'    =>'mobile no must be numeric',
            'mobile.length'     =>'mobile no must be 11 digits',
            'email.required'    => 'Email is required!',
            'email.email'       => 'Email is not correct format',
            'password.required' => 'Password is required!',
            'password.max'      =>'password can not be more than 10 charecters',
            'password.min'      =>'password must be atleast 4 charecters', 
            'password.alpha_num'=>'password must be combination of alphabets and numbers',
            
                                                        
 
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'email' => 'trim|lowercase',
            'name'  => 'trim|capitalize|escape'
            
        ];
    }







    }




