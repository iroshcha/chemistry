<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function quests()
    {
        return $this->hasMany(Quest::class);
    }
}
