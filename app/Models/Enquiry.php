<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Enquiry extends Model
{
    protected $fillable = [
        'user_id',
        'subject',
        'description',
        'status',
        'response',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
