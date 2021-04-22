<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IPIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){
            return response("Ваш IP не валиден", 400);
        }
        return $next($request);
    }
}
