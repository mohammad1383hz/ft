<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authorize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

       if($request->user()->role==='admin'|| $request->user()->role==='seller'){
                return $next($request);}

                else{
                    dd('شما دسترسی به این قسمت را ندارید');
                }

        // elseif($request->user()->role='seller'){
        //        return $next($request);}
    }
}
