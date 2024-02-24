<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpperToLowerCase
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $inputs = $request->all();

        $converted = [];

        foreach ($inputs as $key=>$value){
            $converted[$key] = strtolower($value);
        }

        $request->replace($converted);

        return $next($request);
    }
}
