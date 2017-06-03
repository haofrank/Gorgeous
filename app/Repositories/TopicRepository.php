<?php
namespace app\Repositories;

use Illuminate\Http\Request;
use App\Topic;

class TopicRepository
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function getTopicsForTagging(Request $request)
    {
        return Topic::select(['id','name'])
            ->where('name','like','%'.$request->query('q').'%')
            ->get();
    }
}
