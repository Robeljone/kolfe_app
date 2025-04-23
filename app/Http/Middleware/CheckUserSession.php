<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class CheckUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $nsext): Response
    {
        // $is_true = $request->session()->get('is_true');
        // if($is_true!="logged_in")
        // {
        //    return redirect('/');
        // }
        return $next($request);
    }
}
