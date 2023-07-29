<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['enrollment_id', 'marks_obtained', 'total_marks'];

    // Define relationships, if any
    // For example: A Grade belongs to an Enrollment
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    // Define any other relationships, as needed
}
