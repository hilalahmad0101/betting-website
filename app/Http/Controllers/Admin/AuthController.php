<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(): View
    {
        return view("admin.auth.login");
    }

    public function login(Request $request) : RedirectResponse 
    {
        // Validation for incoming request
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $admin = Admin::where('username', $request->email)->first();

        if ($admin) {
            $auth_admin = Auth::guard('admin')->attempt([
                'username' => $request->email,
                'password' => $request->password
            ]);

            if ($auth_admin) {
                return to_route('admin.dashboard')->with('success', 'Login successfully');
            }
        }

        return to_route('admin.login')->with('error', 'Invalid email and password');
    }

}
