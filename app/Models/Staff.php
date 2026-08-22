<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $uploads = '/staffimg/';

    protected $guarded = [];

    public function getFileAttribute($photo){

        return $this->uploads . $photo;

    }
}
