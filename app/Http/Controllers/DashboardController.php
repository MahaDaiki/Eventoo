<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('Organizer')) {
            return redirect()->route('organizer.dashboard');
        } elseif ($user->hasRole('Client')) {
            return redirect()->route('client.dashboard');
        } else {
            
            abort(403, 'Unauthorized');
        }
    }
}
