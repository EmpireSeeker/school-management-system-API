<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Result;
use App\Models\User;

class exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'code',
        'duration',
    ];
    public function question(){
        $this->hasMany(Question::class, foreignId:'question_id');
    }

    public function answer(){
        $this->hasMany(Answer::class, foreignId:'answer_id');
    }

    public function result(){
        $this->hasMany(Result::class, foreignId:'result_id');
    }

    public function user(){
        $this->hasMany(User::class, foreignId:'user_id');
    }
}
