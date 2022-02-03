<?php

Namespace App\Validation;

class ForProfile
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'fullName' => 'required|min:6|max:20',
            'phone' => 'required|min:10|max:10',
            'email' => 'email|required',
            'password' => 'required|min:6',
            'confirmPassword' => 'match:password',
        ];
    }

   /**
    * Error messages mappings.
    *
    * @param string|null $rule
    * @return array
    */
    public function messages($rule = null)
    {
        $messages = [

        ];

        return  $messages[$rule] ?? $messages;
    }



}
