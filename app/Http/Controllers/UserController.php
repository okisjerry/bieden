<?php

namespace App\Http\Controllers;

use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{

    public function dashboard()
    {
        $users = User::latest()->get();
        $dob = new DateTime(Auth::user()->date_of_birth);
        $now = new DateTime(now());
        $age = $now->diff($dob)->format('%y');


        return view('user.dashboard', compact('users', 'age'));
    }


    /**
     * Show the form for creating a new resource.php
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.add_content');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'bio' => 'required|string|min:3|max:255',
            "image" => 'required|mimes:png,jpg,jpeg',
        ]);

        $user = Auth::user();

        if ($request->has('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $file_name = $request->name . time() . '.' . $extension;
            Storage::put('public/users/' . $file_name, fopen($file, 'r+'));

            $user->image = $file_name;
        }
        //$user->name = $request->name;
        $user->bio = $request->bio;
        $user-> save();

        return back()->with(['success' => 'Content uploaded']);
    }

    /**

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $request->validate([
            'video' => 'required|mimes:mp4|max:20000',

        ]);

        $user = Auth::user();

        if ($request->has('video')) {
            $file = $request->video;
            $extension = $file->getClientOriginalExtension();
            $file_name = $request->name . time() . '.' . $extension;
            Storage::put('public/users/' . $file_name, fopen($file, 'r+'));

            $user->video = $file_name;
            $user->save();

            return back()->with(['success' => 'Content uploaded']);
        }

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
    public function insert(Request $request, $id)
    {
        //
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
