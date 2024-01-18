<?php

namespace App\Http\Controllers;

use App\Pages\ProfilePage;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile');
    }

    protected function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');

        $path = $image->store('public/profileImages');
        $relativePath = str_replace('public/', '', $path);

        auth()->user()->update(['profile_image' => $relativePath]);

        return redirect()->back()->with('success', 'Done');
    }
}
