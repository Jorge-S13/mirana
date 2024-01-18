<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

    }
    protected function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('profileImages', 'public');

        auth()->user()->update(['profile_image' => $imagePath]);

        return redirect()->back()->with('success', 'Done');
    }
}
