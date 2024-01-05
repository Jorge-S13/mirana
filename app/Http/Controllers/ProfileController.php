<?php

namespace App\Http\Controllers;

use App\Pages\ProfilePage;

class ProfileController extends Controller
{
    public function __invoke()
    {
        return ProfilePage::make();
    }
}
