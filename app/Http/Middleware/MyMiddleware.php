<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $param1)
    {
//        if ($request->route('page') != 'pages') {
//            return redirect()->route('home');
//        }

        //echo $request->
        echo 'Middleware: ' . $param1;

        return $next($request);
    }
}
