<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Get the post-reset redirect path.
     *
     * @return string
     */
    protected function redirectTo()
    {
        // Redirect to the localized login page after password reset
        return route('localized.login', ['lang' => app()->getLocale()]);
    }
}
