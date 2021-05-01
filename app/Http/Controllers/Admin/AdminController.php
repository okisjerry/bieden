<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.view_contestants', compact('users'));
    }

    // public function update(Request $request, User $user)
    // {
    //     return view('admin.add_product', compact('categories'));
    // }










}
