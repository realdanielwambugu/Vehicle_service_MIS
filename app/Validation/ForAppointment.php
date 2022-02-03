<?php

Namespace App\Validation;

class ForAppointment
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

        'service_id'=> 'required',

        'mechanic_id'=> 'required',

        'vehicle_reg_no'=> 'required',

        'vehicle_brand'=> 'required',

        'vehicle_model'=> 'required',

        'service_date'=> 'required',

        'service_time'=> 'required',

        'admin_remarks'=> 'required',

        'serviced_by'=> 'required',

        'service_charges'=> 'required',

        'parts_charges'=> 'required',

        'additional_charges'=> 'required',

        'status'=> 'required',
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
