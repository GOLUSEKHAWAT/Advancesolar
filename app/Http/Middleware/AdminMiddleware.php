<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // अगर यूज़र लॉगिन नहीं है तो उसे login पेज पर भेजो
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // अगर यूज़र admin नहीं है तो उसे home पेज पर भेज दो
        if (Auth::user()->role !== 'admin') {
            return redirect('/')->with('error', 'Unauthorized Access');
        }

        return $next($request);
    }
}
