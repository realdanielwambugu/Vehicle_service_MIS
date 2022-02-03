<?php

Namespace App\Validation;

class ForMechanic
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'national_id' => 'required',
            'fullName' => 'required',
            'email' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'photo' => 'required',
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
