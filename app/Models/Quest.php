<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function subtopic()
    {
        return $this->belongsTo(Subtopic::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
