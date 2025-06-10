<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
//    public function dashboard()
//    {
//
//        return view('dashboard');
//    }

    public function dashboard()
    {
        return view('dashboard', [
            'totalUsers' => \App\Models\User::count(),
            'jobApplications' => \App\Models\JobApplication::count(),
            'contacts' => \App\Models\Contact::count(),
        ]);
    }

    public function users(){
        $userData = User::orderBy('created_at', 'desc')->get();
        return view('user.index', compact('userData'));
    }
}
