<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function options()
    {
        return $this->hasMany(Option::class, 'question_id');
    }

    public function question_type()
    {
        return $this->belongsTo(QuestionType::class, 'id');
    }
}
