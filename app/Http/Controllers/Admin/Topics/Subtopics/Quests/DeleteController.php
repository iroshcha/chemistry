<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics\Quests;


use App\Models\Quest;
use App\Models\Subtopic;
use App\Models\Topic;


class DeleteController
{

    public function __invoke(Topic $topic, Subtopic $subtopic, Quest $quest)
    {
        $quest->answers()->delete();
        $quest->delete();
        return redirect(route('admin.quests', ['topic' => $topic, 'subtopic' => $subtopic]));
    }
}
