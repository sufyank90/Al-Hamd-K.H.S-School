<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = ['enrollment_id', 'date', 'is_present'];

    // Define relationships, if any
    // For example: An Attendance belongs to an Enrollment
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    // Define any other relationships, as needed
}
