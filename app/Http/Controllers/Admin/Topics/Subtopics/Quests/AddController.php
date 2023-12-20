<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics\Quests;


use App\Models\Quest;
use App\Models\Subtopic;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AddController
{

    public function __invoke(Request $request, Topic $topic, Subtopic $subtopic)
    {

        $requestAnswers = [];

        $quest = $subtopic->quests()->create(['name' => $request->quest]);

        foreach ($request->answer as $key => $answer) {
            if (!empty($answer)) {
                $requestAnswers[] = [
                    'name' => $answer,
                    'is_right' => $key == $request->is_right
                ];
            }
        }
        if (count($requestAnswers) != 0) {
            $quest->answers()->createMany($requestAnswers);
        }
        return redirect(route('admin.quests', ['topic' => $topic->id, 'subtopic' => $subtopic->id]));
    }
}
