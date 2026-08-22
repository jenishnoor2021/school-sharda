<?php

namespace App\Models;

use App\Mail\EnquiryMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Enquirey extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "sunrisegodadaraclerk@gmail.com";
            Mail::to($adminEmail)->send(new EnquiryMail($item));
        });
    }

}
