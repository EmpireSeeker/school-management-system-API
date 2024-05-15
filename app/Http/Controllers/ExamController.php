<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exam;

class ExamController extends Controller
{
    protected $exam;
    protected $examinput;

    public function __construct(Exam $exam){
        $this->exam=$exam;
    }

    public function createExam(Request $request){
        $examdetails=[
            'title'=>$request->input('title'),
            'code'=>$request->input('code'),
            'duration'=>$request->input('duration'),
            'question_id'=>$request->input('question_id'),
            'answer_id'=>$request->input('answer_id'),
            'result_id'=>$request->input('result_id'),
            'user_id'=>$request->input('user_id'),
        ];


        $examinput=$this->exam->create($examdetails);
        if(!examinput){
            return[
                'status'=>'failed',
                'status_code'=>400,
                'message'=>'exam NOT created sucessfully',
            ];

        }

        return[
            'status'=>'success',
                'status_code'=>200,
                'message'=>'exam  created sucessfully',
        ];
    }

    public function readExam($examid){
        if(!$exam=$this->exam->find($examid)){
            return[
                'status'=>'failed',
                'status_code'=>400,
                'message'=>'Could NOT get User exam'

            ];
        }

        return[
            'status'=>'success',
            'status_code'=>200,
            'data'=>$exam
        ];

    }

}
