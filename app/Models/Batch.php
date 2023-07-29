<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'start_year', 'end_year', 'department_id'];

    // Define relationships, if any
    // For example: A Batch belongs to a Department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Define any other relationships, as needed
}
