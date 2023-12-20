<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_right'
    ];

    public function quest()
    {
        return $this->belongsTo(Quest::class);
    }
}
