<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $allUser = Profile::all();

        if ($user->role_user == '0' and !$user->profile) {
            return redirect()->route('profile');
        }

        return view("admin.dahboard", compact(["user", "allUser"]));
    }

    public function listUser()
    {
        $user = auth()->user();
        $allUser = Profile::all();
        return view("admin.listUser", compact(["user", "allUser"]));
    }

    public function updateUser($id)
    {
        $user = Profile::find($id);
        return view("admin.updateUser", compact(["user"]));
    }

}
