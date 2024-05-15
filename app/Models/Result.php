<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Exam;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_title',
        'code',
        'grade',
        'score',
    ];

    public function user(){
        $this->hasmany(User::class, foreignId:'user_id');
    }
    public function exam(){
        $this->hasone(Exam::class, foreignId:'exam_id');
    }
}

