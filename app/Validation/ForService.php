<?php

Namespace App\Validation;

class ForService
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'service_id' => 'required',
            'charge' => 'required',
            'photo' => 'required',
            'description' => 'required',
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
