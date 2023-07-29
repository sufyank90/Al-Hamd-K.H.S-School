<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'date_of_birth', 'address', 'hire_date', 'department_id'];

    // Define relationships, if any
    // For example: A Teacher belongs to a Department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Define any other relationships, as needed
}
