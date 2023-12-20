<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics\Quests;


use App\Models\Subtopic;
use App\Models\Topic;

class IndexController
{

    public function __invoke(Topic $topic, Subtopic $subtopic)
    {
        $quests = $subtopic->quests()->get();
        return view('admin.topics.subtopics.quests.index', [
            'subtopic' => $subtopic,
            'topic' => $topic,
            'quests' => $quests
        ]);
    }
}
