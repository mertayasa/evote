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

    public function getdetails($id){
        $data = Candidate::where('id', $id)->get();
        return $data;
    }
}
