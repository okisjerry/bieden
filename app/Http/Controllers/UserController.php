<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function dashboard()
    {
     return view('user.dashboard');
    }


    /**
     * Show the form for creating a new resource.php
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, User $user)
    {
      return view('add_content');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'bio' => 'required|string|min:3|max:255',
            'votes' => 'required|integer',


        ]);

        if ($request->has('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $file_name = $request->name . time() . '.' . $extension;
            Storage::put('public/users/' . $file_name, fopen($file, 'r+'));

            $user->image = $file_name;
        }


        if ($request->has('video')) {
            $file = $request->video;
            $extension = $file->getClientOriginalExtension();
            $file_name = $request->name . time() . '.' . $extension;
            Storage::put('public/users/' . $file_name, fopen($file, 'r+'));

            $user->video = $file_name;
        }

        $user->name = $request->name;
        $user->slug = \Str::slug($request->name);
        $user->bio = $request->bio;
        $user->votes = $request->votes;
        $user->save();


        return back()->with(['success' => 'Content uploaded']);
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
