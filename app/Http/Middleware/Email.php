<?php

namespace App\Http\Middleware;

use Closure;

class Email
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


        if(request()->has('email') ){

            if(request('email')=='hna@hna.hna'){
                return redirect('error');
            }
            else{
                return redirect('/');
            }
        }
        return $next($request);
    }
}
