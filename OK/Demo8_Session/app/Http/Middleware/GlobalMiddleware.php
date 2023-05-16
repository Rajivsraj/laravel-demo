<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "<pre>";
        print_r(session()->all());
        echo "</pre>";
        // if(session()->has("one")){
        //     echo "session exists";
        // }else{
        //     echo "Session not exists";
        // }
        return $next($request);
        

        

    }
}
