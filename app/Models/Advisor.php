<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Advisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'count_of_courses',
        'rating',
        'students_taught',
        'overview',
        'qualifications',
        'experience',
        'contact_number',
        'email',
        'linkedin_url',
        'facebook_url',
        'twitter_url',
        'image',
        'qualifications',
        'experience'
    ];


    public function getImageUrlAttribute(): ?string
    {
        if ($this->image) {
            return Storage::url($this->image);
        }
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'advisor_course');
    }

    public function course()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }
}
