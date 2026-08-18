<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionsOptions extends Model
{
    protected $fillable = [
        'question_id',
        'text',
        'correct',
        'order',
    ];

    protected function casts(): array
    {
        return [
            'correct' => 'boolean',
        ];
    }
}
