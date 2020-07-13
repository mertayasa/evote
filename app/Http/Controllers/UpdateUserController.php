<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use DB;
use App\Mail\testEmail;
use Illuminate\Support\Facades\Mail;

class UpdateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.sentemail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        DB::table('users')->where('id',$request->id)->update([
            'status' => $request->agree_pledge
            ]);
            
        Mail::to("made.b4li@gmail.com")->send(new testEmail());
        
        return response()->json(['success'=>'Form is successfully submitted!']);
        return redirect()->route('home');
    }

    public function verifypledge(Request $request)
    {
        
        DB::table('users')->where('id',$request->id)->update([
            'pledge_verified' => $request->pledge_verified
            ]);
        
        return response()->json(['success'=>'Form is successfully submitted!']);
    }

    public function show_verified_page(Request $request)
    {
        return view('pages.verified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
