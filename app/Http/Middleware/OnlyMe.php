<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class onlyMe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            if (auth()->user()->email == 'weka@gmail.com') {
                // proceed to the next request (Allow the request)
                return $next($request);
            }
            return response()->json(['message' => 'access denied'], 403);

        }
        return redirect()->route('login');
    }
}
