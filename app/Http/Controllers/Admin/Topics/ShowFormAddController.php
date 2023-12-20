<?php


namespace App\Http\Controllers\Admin\Topics;


use App\Models\User;

class ShowFormAddController
{

    public function __invoke()
    {
        return view('admin.topics.add');
    }
}
