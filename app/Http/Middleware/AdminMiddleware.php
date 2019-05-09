<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
		if (!auth()->check())
			return redirect('login'); //Si el usuario no ha iniciado sesión lo lleva a login
			
		if (auth()->user()->id_puesto !=1) //Si no es admin ==1, se redire a home 
			return redirect ('home');
		
        return $next($request); 
    }
}
