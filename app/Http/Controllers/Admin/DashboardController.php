<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Hash;
use Helper;

class DashboardController extends Controller
{
    public function getIndex()
    {
        $user       = \App\Models\User::where('role_id', '2')->count();
        return view('admin.dashboard.index', compact(['user']));
    }

    
}
