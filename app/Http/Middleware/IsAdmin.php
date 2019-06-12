<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        
        $roles = Auth::user()->roles;
        $r = [];
        $isAdmin = ['Admin', 'Super Admin'];
        $admin =  false;
        foreach($roles as $role){
            if(in_array($role->name, $isAdmin)){
                $admin =  true;
            }
        }
        if(!$admin){
            return response()->view('admin.forbidden');
        }else {
            return $next($request);
        }

    }
}
