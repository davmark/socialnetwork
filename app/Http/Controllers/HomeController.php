<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Status;

class HomeController extends Controller{

    public function getIndex(){
        if(Auth::check()){
            $statuses = Status::notReply()->where(function($query){
               return $query->where('user_id', Auth::user()->id)
                   ->orWhereIn('user_id', Auth::user()->friends()->lists('id'));
            })
                ->orderBy('created_at', 'desc')
                ->paginate(5);

            return view('timeline.index',['user'=>\Auth::user()])
                ->with('statuses', $statuses);
        }
        return view('home');
    }
}