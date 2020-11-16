<?php

namespace App\Http\Middleware;

use Closure;

class Allowdomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $res =  $next($request);
        // 允许跨域
        $res->header('Access-Control-Allow-Origin','*');
        return $res;
    }
}
