<?php


namespace App\Http\Controllers\Admin\Topics;


use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeleteController
{

    public function __invoke(Topic $topic)
    {
        foreach ($topic->subtopics()->get() as $subtopic) {
            foreach ($subtopic->quests()->get() as $quest) {
                $quest->answers()->delete();
            }
            $subtopic->quests()->delete();
        }
        $topic->subtopics()->delete();
        $topic->users()->detach();
        $topic->delete();
        return redirect(route('admin.topics'));
    }
}
