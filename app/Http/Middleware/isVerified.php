<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use function PHPUnit\Framework\isNull;

class isVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (isNull($request->session()->get('auth')->email_verified_at)){
//            return abort(403, 'email verify first');
            return redirect()->route('auth.verify');
        }
        return $next($request);
    }
}
