<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sylabus extends Model
{
    use HasFactory;

    protected $uploads = '/sylabuspdf/';

    protected $guarded = [];

    public function getFileAttribute($photo)
    {
        return $this->uploads . $photo;
    }

    /**
     * Check if a valid PDF file exists for this syllabus item
     *
     * @return bool
     */
    public function getHasPdfAttribute(): bool
    {
        $raw = $this->getRawOriginal('file');
        return !empty($raw) && $this->file !== '/sylabuspdf/' && file_exists(public_path() . $this->file);
    }

    /**
     * Check if a valid PDF file exists
     *
     * @return bool
     */
    public function hasPdf(): bool
    {
        return $this->has_pdf;
    }
}

