<?php

namespace App\Http\Controllers;

use App\Models\AllianceMember;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the home page.
     */
    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }

    public function contact_form(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'country' => 'required|string|max:100',
            'role' => 'required|string|max:100',
            'message' => 'nullable|string',
        ]);
        AllianceMember::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Successfully joined the alliance!'
        ]);

    }
}
