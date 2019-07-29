<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if($request->id == 1){
        return $next($request);
        }else{
            return response()->json([
                'error' => 'ERR',
                'test' => 'TE'
            ],'403');
            //abort('403','error admin');
        }
    }
}
