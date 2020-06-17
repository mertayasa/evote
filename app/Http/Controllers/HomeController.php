<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = Candidate::all();
        return view('pages.home' ,[
            'items' => $items
        ]);
    }
}
