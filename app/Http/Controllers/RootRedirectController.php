<?php
namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class RootRedirectController extends Controller
{
    public function redirect(): RedirectResponse
    {
        return redirect('/ar');
    }
}
