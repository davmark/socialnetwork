<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;
use Illuminate\Routing\Controller;
use App\Models\User;
use DB;


class SearchController extends UserBaseController
{
    public function getResults(){
        $query = request()->input('query');

        if(!$query)
        {
            return redirect('home');
        }

//        $users = User::where('username', $query)->get();

        $users = User::where(DB::raw("CONCAT(first_name, '', 'last_name')"),
            'LIKE', "%{$query}%")
            ->orWhere('username', 'LIKE', "%{$query}%")
            ->get();


//        return view('search.results',['users'=> $users]);
        return view('search/results')->with('users', $users);
    }
}
