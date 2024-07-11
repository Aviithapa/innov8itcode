<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'teacher_id', 'category', 'last_update', 'description',
        'learning_objectives', 'curriculum', 'image', 'price', 'rating',
        'num_ratings', 'lectures', 'duration', 'skill_level', 'language', 'students'
    ];

    public function advisors()
    {
        return $this->belongsToMany(Advisor::class, 'advisor_course');
    }

    public function advisor()
    {
        return $this->belongsTo(Advisor::class, 'teacher_id');
    }

    public function getImageUrlAttribute(): ?string
    {
        if ($this->image) {
            // Generate the full URL of the image
            return Storage::url($this->image);
        }
    }
}
