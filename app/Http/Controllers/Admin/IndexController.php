<?php


namespace App\Http\Controllers\Admin;


use App\Models\User;

class IndexController
{

    public function __invoke()
    {
        return view('admin.index',  ['users' => User::all()]);
    }
}
