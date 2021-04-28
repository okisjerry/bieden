<?php


namespace App\Http\Controllers\Admin;

use App\User;

class AdminController extends Controller
{

    public function dashboard()
    {

        $users = User::latest()->get();
        return view('admin.dashboard',  compact('users'));
    }

    public function view()
    {
        $users = User::latest()->get();
        return view('admin.all_users', compact('users'));
    }









}
