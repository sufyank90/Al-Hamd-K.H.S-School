<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'date_of_birth', 'address', 'batch_id'];

    // Define relationships, if any
    // For example: A Student belongs to a Batch
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    // Define any other relationships, as needed
}
