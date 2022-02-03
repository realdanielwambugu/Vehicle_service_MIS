<?php

Namespace App\Validation;

class ForEnquiry
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'user_id'=> 'required',
            'subject'=> 'required',
            'description'=> 'required',
            'status'=> 'required',
            'response'=> 'required',
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
