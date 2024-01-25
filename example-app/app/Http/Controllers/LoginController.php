<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function authenticated($request, $user)
{
    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard'); // Assuming you have a named route for the admin dashboard
    } else {
        return redirect()->route('user.dashboard'); // Assuming you have a named route for the user dashboard
    }
}
}

