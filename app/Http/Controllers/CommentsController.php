<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AnswerRepository;
use App\Repositories\CommentRepository;
use App\Repositories\QuestionRepository;
use Auth;
use App\Answer;
use App\Question;

class CommentsController extends Controller
{
    protected $answer;

    protected $question;

    protected $comment;

    public function __construct(AnswerRepository $answer, QuestionRepository $question, CommentRepository $comment)
    {
        $this->answer = $answer;
        $this->question = $question;
        $this->comment = $comment;
    }

    public function answer($id)
    {
        return $this->answer->getAnswerCommentsById($id);
    }

    public function question($id)
    {
        return $this->question->getQuestionCommentsById($id);
    }

    public function store()
    {
        $model = $this->getModelNameFromType(request('type'));

        return $this->comment->create([
            'commentable_id'   => request('model'),
            'commentable_type' => $model,
            'user_id'          => Auth::guard('api')->user()->id,
            'body'             => request('body')
        ]);
    }

    private function getModelNameFromType($type)
    {
        return $type === 'question' ? 'App\Question' : 'App\Answer';
    }
}
