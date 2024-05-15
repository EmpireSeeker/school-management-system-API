<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
    ];
    public function exam(){
        $this->hasone(Exam::class, foreignId:'exam_id');
    }
}
