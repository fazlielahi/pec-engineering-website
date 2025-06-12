<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return redirect()->route('localized.welcome', ['lang' => session('locale', config('app.locale'))]);
    }

    public function language() {
        $locale = app()->getLocale();
        $viewName = 'welcome' . ($locale == 'en' ? '_en' : '');
        return view($viewName);
    }
}
