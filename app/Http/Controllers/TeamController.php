<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function teams()
    {
        $teams = Team::leftjoin('users','teams.user_id','=','users.id')
                ->where('teams.status',1)
                ->get(['users.name as name','users.image as image','teams.role as role']);
        return response()->json($teams);    
    }
}
