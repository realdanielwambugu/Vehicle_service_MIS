<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class User extends Model
{
    protected $fillable = [
        'fullName',
        'email',
        'phone',
        'password',
        'status',
    ];

    public function isAdmin()
    {
        return $this->type == 'admin';
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function enquiry()
    {
        return $this->hasMany(Enquiry::class);
    }
}
