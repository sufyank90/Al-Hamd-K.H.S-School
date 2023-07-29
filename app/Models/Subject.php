<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'department_id'];

    // Define relationships, if any
    // For example: A Subject belongs to a Department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Define any other relationships, as needed
}
