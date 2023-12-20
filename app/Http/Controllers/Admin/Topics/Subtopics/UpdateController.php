<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics;


use App\Models\Subtopic;
use App\Models\Topic;
use Illuminate\Http\Request;

class UpdateController
{

    public function __invoke(Request $request, Topic  $topic, Subtopic $subtopic)
    {
        $subtopic->fill([
            'name' => $request->name
        ]);
        $subtopic->save();
        return redirect(route('admin.subtopics', ['topic' => $topic->id]));
    }
}
