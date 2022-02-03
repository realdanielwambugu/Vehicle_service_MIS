<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Service extends Model
{
    protected $fillable = [
        'name',
        'charge',
        'photo',
        'description',
    ];

    public function upload_photo()
    {
        $storage = new FileSystem(upload_path('images/service'));

        $file = new \Upload\File('photo', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }
}
