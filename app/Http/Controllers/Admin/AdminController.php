<?php


namespace App\Http\Controllers\Admin;


class AdminController extends Controller
{

    public function dashboard()
    {
        
        $users = User::latest()->get();
        return view('admin.dashboard',  compact('users'));
    }










}
