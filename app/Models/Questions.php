<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [
        'name',
        'topic_id',
        'user_id',
        'statement',
        'explanation',
        'answer_mode',
        'level',
        'visibility',
        'source_question_id',
    ];

    public function topic()
    {
        return $this->belongsTo(Topics::class, 'topic_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sourceQuestion()
    {
        return $this->belongsTo(Questions::class, 'source_question_id');
    }

    public function options()
    {
        return $this->hasMany(QuestionsOptions::class, 'question_id');
    }
}