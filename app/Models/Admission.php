<?php

namespace App\Models;

use App\Mail\AdmissionMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Admission extends Model
{
    use HasFactory;

    protected $uploads = '/dobcertificate/';

    protected $guarded = [];

    public function getFileAttribute($photo)
    {

        return $this->uploads . $photo;

    }

    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "sunrisegodadaraclerk@gmail.com";
            Mail::to($adminEmail)->send(new AdmissionMail($item));
        });
    }
}
