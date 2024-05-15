<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;

class Answers extends Model
{
    use HasFactory;

    protected $fillable = [
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
    ];
    
    public function exam(){
        $this->hasone(Exam::class, foreignId:'exam_id');
    }
}
