<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'classroom_id'
    ];

    protected $casts = [
        'due_date' => 'datetime'
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
} 