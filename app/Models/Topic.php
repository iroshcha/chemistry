<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'topic_user', 'topic_id', 'user_id');
    }

    public function subtopics()
    {
        return $this->hasMany(Subtopic::class);
    }
}
