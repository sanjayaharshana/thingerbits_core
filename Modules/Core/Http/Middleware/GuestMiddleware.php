<?php

namespace Modules\Core\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param bool $to
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next, $to = '')
    {
        if (auth()->check()) {
            $route = app('inBackend') ? 'admin.dashboard.index' : 'account.dashboard.index';

            return redirect()->route($route);
        }

        return $next($request);
    }
}
