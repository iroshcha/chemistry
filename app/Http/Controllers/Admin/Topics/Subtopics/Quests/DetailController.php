<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics\Quests;


use App\Models\Quest;
use App\Models\Subtopic;
use App\Models\Topic;

class DetailController
{

    public function __invoke(Topic $topic, Subtopic $subtopic, Quest $quest)
    {
        $answers = $quest->answers()->get();
        return view('admin.topics.subtopics.quests.detail', [
                'topic' => $topic,
                'subtopic' => $subtopic,
                'quest' => $quest,
                'answers' => $answers
            ]
        );
    }
}
