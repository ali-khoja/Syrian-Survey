<?php

namespace App\Http\Middleware;

use Closure;

class check
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
        $cuser = $request->user()->email;
        $admin = "alikhoja9898@gmail.com" ;
        if ($cuser != $admin ) 
             {
                echo "you are not an admin" ;
                return redirect('/login');}
        return $next($request);
    }
}
