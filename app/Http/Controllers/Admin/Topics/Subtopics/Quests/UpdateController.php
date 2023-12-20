<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics\Quests;


use App\Models\Answer;
use App\Models\Quest;
use App\Models\Subtopic;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController
{

    public function __invoke(Request $request,Topic $topic, Subtopic $subtopic, Quest $quest)
    {
        if ($request->answers) {
            foreach ($request->answers as $id => $name) {
                if (!empty($name)) {
                    $answer = Answer::find($id);
                    $is_right = $id == $request->is_right;
                    $answer->fill([
                        'name' => $name,
                        'is_right' => $is_right
                    ]);
                    $answer->save();
                }
            }
        }
        $quest->fill([
            'name' => $request->quest
        ]);
        $quest->save();
        return redirect(route('admin.quests', ['topic' => $topic , 'subtopic' => $subtopic]));
    }
}
