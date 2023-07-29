<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'amount', 'description', 'due_date', 'status'];

    // Define relationships, if any
    // For example: A Fee belongs to a Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Define any other relationships, as needed
}
