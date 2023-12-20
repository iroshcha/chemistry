<?php


namespace App\Http\Controllers\Admin\Topics;


use App\Models\Topic;

class ShowFormUpdateController
{

    public function __invoke(Topic $topic)
    {
        return view('admin.topics.update', ['topic' => $topic]);
    }
}
