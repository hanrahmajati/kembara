<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Partner
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
        if(auth()->user()->level_user == 2){
            return $next($request);
        }
        
        return redirect('/')->with('error',"Only admin can access!");
    }
}
