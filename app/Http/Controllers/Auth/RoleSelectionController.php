<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleSelectionController extends Controller
{
    /**
     * Show role selection page
     */
    public function showRoleSelection()
    {
        $user = Auth::user();

        // Check if user already has a role
        if ($user->role) {
            // Redirect to the appropriate dashboard based on role
            return $this->redirectBasedOnRole($user);
        }

        // Show role selection view if no role is set
        //return view('frontend.layouts.dashboard.dashboard');
    }

    /**
     * Save the role selected by the user
     */
    public function setRole(Request $request)
    {
        $request->validate([
            'role' => 'required|in:admin,user', // Validate that role is either 'admin' or 'user'
        ]);

        $user = Auth::user();
        $user->role = $request->role;
        $user->save();

        // Redirect based on the role
        return $this->redirectBasedOnRole($user);
    }

    /**
     * Redirect user based on their role
     */
    protected function redirectBasedOnRole($user)
    {
        if ($user->role === 'admin') {
            return redirect('/dashboard');
        } elseif ($user->role === 'user') {
            return redirect('/user-dashboard');
        }

        
    }
}
