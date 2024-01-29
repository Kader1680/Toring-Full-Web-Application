<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::user()->name == "admin" && Auth::user()->password == "$2y$12$0rE0XS9vZaYsII7C.K.lFecI7wWj7bCe5ptlqJRiOQcLDB.52FHRu") {
             return $next($request);

        }

        abort(401);


    }
}
