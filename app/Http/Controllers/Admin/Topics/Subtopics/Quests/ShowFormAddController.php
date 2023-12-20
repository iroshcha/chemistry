<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics\Quests;


use App\Models\Subtopic;
use App\Models\Topic;

class ShowFormAddController
{

    public function __invoke(Topic $topic, Subtopic $subtopic)
    {
        return view('admin.topics.subtopics.quests.add', ['topic' => $topic, 'subtopic' => $subtopic]);
    }
}
