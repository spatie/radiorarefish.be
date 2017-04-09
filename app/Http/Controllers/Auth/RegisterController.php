<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RedirectsUsers;

class RegisterController extends Controller
{
    use RedirectsUsers;

    public function showRegistrationForm()
    {
        abort(403);
    }

    public function register(Request $request)
    {
        abort(403);
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function registered(Request $request, $user)
    {
    }
}
