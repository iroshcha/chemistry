<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics;


use App\Models\Subtopic;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AddController
{

    public function __invoke(Request $request, Topic $topic)
    {
        $topic->subtopics()->create(['name' => $request->name]);
        return redirect(route('admin.subtopics', ['topic' => $topic->id]));
    }
}
