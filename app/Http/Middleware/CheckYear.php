<?php

namespace App\Http\Middleware;

use Closure;

use App\Helpers\DatabaseConnection;

class CheckYear
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
        DatabaseConnection::setAnotherDB($request->dbName);
        return $next($request);
    }
}
