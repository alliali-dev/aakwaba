<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {


                $statut = $request->user()->statut;
                if ($statut == 1) {

                    return redirect()->route('dashb');
                } elseif ($statut == 2) {

                    return redirect()->route('boss');
                } elseif ($statut == 3) {
                    return redirect()->route('bigboss');
                } else {
                    return redirect()->route('home');
                }

                //return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
