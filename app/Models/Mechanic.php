<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Mechanic extends Model
{
    protected $fillable = [
        'national_id',
        'fullName',
        'title',
        'email',
        'phone',
        'gender',
        'photo',
    ];

    public function upload_photo()
    {
        $storage = new FileSystem(upload_path('images/mechanic'));

        $file = new \Upload\File('photo', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }
}
