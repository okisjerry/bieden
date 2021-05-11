<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use DateTime;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function dashboard()
    {
        $users = User::latest()->get();
        $dob = new DateTime(Auth::user()->date_of_birth);
        $now = new DateTime(now());
        $age = $now->diff($dob)->format('%y');


        return view('user.dashboard', compact('users', 'age'));
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
