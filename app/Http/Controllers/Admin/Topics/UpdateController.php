<?php


namespace App\Http\Controllers\Admin\Topics;


use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController
{

    public function __invoke(Request $request, Topic  $topic)
    {
        $topic->fill([
            'name' => $request->name
        ]);
        $topic->save();
        return redirect(route('admin.topics'));
    }
}
