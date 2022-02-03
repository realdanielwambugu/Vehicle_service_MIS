<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',
        'mechanic_id',
        'vehicle_reg_no',
        'vehicle_brand',
        'vehicle_model',
        'service_date',
        'service_time',
        'admin_remarks',
        'serviced_by',
        'service_charges',
        'parts_charges',
        'additional_charges',
        'status',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
