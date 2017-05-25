<?php
namespace App\Repositories;

use App\Answer;

/**
 * Class QuestionRepostory
 * @package App\Repositories
 */
class AnswerRepository
{
    public function create(array $attributes)
    {
        return Answer ::create($attributes);
    }

    public function byId($id)
    {
        return Answer::find($id);
    }
}
