<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics;


use App\Models\Topic;

class IndexController
{

    public function __invoke(Topic $topic)
    {
        return view('admin.topics.subtopics.index',  ['subtopics' => $topic->subtopics, 'topic' => $topic]);
    }
}
