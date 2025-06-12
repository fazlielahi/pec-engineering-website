<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {

        if(!$request->session()->has('user_id'))
        {
            return redirect()->route('localized.login', ['lang' => app()->getLocale()]);
        }

        $user = User::find($request->session()->get('user_id'));
        
        if(!$user)
        {
            $request->session()->forget('user_id');
            return redirect()->route('localized.login', ['lang' => app()->getLocale()]);
        }

        //if role is specified, check if user has that role
        if($role &&$user->type !== $role && $role !== 'any'){
            //if super admin is required but the user is not super admin, deny access
            if($role === 'super_admin' && $user->type === 'admin')
            {
                abort(403, 'Unauthorized action.');
            }
        }
        
        $request->merge(['currentUser' => $user]);

        return $next($request);
    }
}
