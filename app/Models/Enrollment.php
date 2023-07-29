<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'course_id'];

    // Define relationships, if any
    // For example: An Enrollment belongs to a Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // For example: An Enrollment belongs to a Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Define any other relationships, as needed
}
