<?php

namespace App\Http\Middleware;

use App\Http\Controllers\UserController;
use Closure;

class CheckRememberCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        app(UserController::class)->checkRememberCookie($request);
        return $next($request);
    }
}
