<?php


namespace App\Http\Controllers\Admin\Topics\Subtopics;


use App\Models\Topic;

class ShowFormAddController
{

    public function __invoke(Topic $topic)
    {
        return view('admin.topics.subtopics.add', ['topic' => $topic]);
    }
}
