<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleIkusi
{
    /**
     * Maneja una solicitud entrante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = auth()->user();

        if ($role == 'ikasle' && $user->rola != 0) {
            return redirect('home')->with('error', 'Solo los ikasleak pueden realizar esta acción');
        }

        if ($role == 'irakasle' && $user->rola != 1) {
            return redirect('home')->with('error', 'Solo los irakasleak pueden realizar esta acción');
        }

        return $next($request);
    }
}

