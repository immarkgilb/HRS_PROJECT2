<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    // Show the user's profile
    public function show()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Return the profile view with the user data
        return view('profile.show', compact('user'));
    }

    // Show the form for editing the user's profile
    public function edit()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Return the profile edit view with the user data
        return view('profile.edit', compact('user'));
    }

    // Update the user's profile
    public function update(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Validate the incoming request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'date_of_birth' => 'required|date',
            'department' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        // Update the user's profile
        $user->update([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'age' => $request->input('age'),
            'date_of_birth' => $request->input('date_of_birth'),
            'department' => $request->input('department'),
            'position' => $request->input('position'),
        ]);

        // Redirect back with a success message
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }
}
