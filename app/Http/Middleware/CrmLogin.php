<?php

namespace App\Http\Middleware;

use Closure;

class CrmLogin
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

        if (!session('user')) {
            echo  "<script>location.href='/admin/login';alert('请先登陆')</script>";
        }
        return $next($request);
    }
}
