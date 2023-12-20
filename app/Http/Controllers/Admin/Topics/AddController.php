<?php


namespace App\Http\Controllers\Admin\Topics;


use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddController
{

    public function __invoke(Request $request)
    {
        $topic = new Topic();
        $topic->name = $request->name;
        $topic->save();
        return redirect(route('admin.topics'));
    }
}
