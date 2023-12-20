<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics;


use App\Models\Subtopic;
use App\Models\Topic;

class ShowFormUpdateController
{

    public function __invoke(Topic $topic, Subtopic $subtopic)
    {
        return view('admin.topics.subtopics.update', ['topic' => $topic, 'subtopic' => $subtopic]);
    }
}
