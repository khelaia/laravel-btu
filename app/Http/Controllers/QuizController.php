<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = json_decode(json_encode([
            ['id'=>1,'title'=>'lorem ipsum 1','status'=>1,'image'=>'https://placehold.co/600x400/png'],
            ['id'=>2,'title'=>'lorem ipsum 2','status'=>0,'image'=>'https://placehold.co/600x400/png'],
            ['id'=>3,'title'=>'lorem ipsum 3','status'=>0,'image'=>'https://placehold.co/600x400/png'],
            ['id'=>4,'title'=>'lorem ipsum 4','status'=>1,'image'=>'https://placehold.co/600x400/png']
        ]));
        return view('home',['quizzes'=> $quizzes]);
    }


    public function subscribe(Request $request)
    {
        return back();
    }
}
