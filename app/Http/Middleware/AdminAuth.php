<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //check session
        if(!$request->session()->has('session_id')) //session not exist
        {
            return redirect('/login');
        }
        else
        {
            if($request->session()->get('session_type')!=1)
            {
                return redirect('/login')->with('error_msg', 'Please Login as Admin');
            }
        }
        return $next($request);
    }
    
}
