<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Voting;
use App\User;
use App\Candidate;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = User::where('role', '=', 'VOTERS')->count();
        $items = Voting::all();
        return view('pages.admin.dashboard' ,[
            'items' => $items,
            'user' => $user
        ]);
    }
}
