<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Quest;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function index()
    {
        return response('index')->header('Content-Type', 'text/plain');
    }

    public function downTown()
    {
//        $quest = Quest::find(1);
//        foreach ($quest->answers as $answer) {
//            dump($answer->name);
//        }
//        $users = User::all();
//        foreach ($users as $user) {
//            dump($user->name);
//            foreach ($user->topics as $topics){
//                dump($topics->name);
//                foreach ($topics->subtopics as $Subtopic) {
//                    dump($Subtopic->name);
//                    foreach ($Subtopic->quests as $quest){
//                        dump($quest->name);
//                        foreach ($quest->answers as $answer){
//                            dump($answer->name);
//                        }
//                    }
//                }
//            }
//        }
//        dd('');
/*        $topics = Topic::find(3);
        foreach ($topics->user as $user) {
            dump($user->name);
        }*/
        return view('home',  ['users' => User::all()]);
    }
}
