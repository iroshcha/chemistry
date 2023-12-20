<?php


namespace App\Http\Controllers\Admin\Users;


use App\Models\User;

class DetailController
{

    public function __invoke(User $user)
    {
        $topics = $user->topics()->get();
        return view('admin.detail',  ['user' => $user , 'topics' => $topics]);
    }
}
