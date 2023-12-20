<?php


namespace App\Http\Controllers\Admin\Topics;


use App\Models\Topic;

class IndexController
{

    public function __invoke()
    {
        return view('admin.topics.index',  ['topics' => Topic::all()]);
    }
}
