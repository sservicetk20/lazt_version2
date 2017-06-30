<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class ProfilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = \Auth::user();
        return view('admin.home.profiles.show')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $users = User::find($id);
     return view('admin.home.profiles.edit',['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $users = User::find($id);
         $users->name = $request->name;
         $users->email = $request->email;
         $users->password = bcrypt($request->password);
         $users->save();
         
         alert()->success('Has actualizado tu perfil', 'LAZT.US')->persistent('Close');
         
         return redirect("admin/profiles/show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
