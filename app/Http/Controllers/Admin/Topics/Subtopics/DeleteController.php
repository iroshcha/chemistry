<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics;


use App\Models\Subtopic;
use App\Models\Topic;


class DeleteController
{

    public function __invoke(Topic $topic, Subtopic $subtopic)
    {
        foreach ($subtopic->quests()->get() as $quest) {
            $quest->answers()->delete();
        }
        $subtopic->quests()->delete();
        $subtopic->delete();
        return redirect(route('admin.subtopics', ['topic' => $topic->id]));
    }
}
