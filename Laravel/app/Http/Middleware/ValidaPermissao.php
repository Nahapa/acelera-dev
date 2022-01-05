<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidaPermissao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //verifica usuario
        if(!session()->has('usuario')):
            return redirect()->route('exercicios')->with('error', 'você não tem permissão para acessar essa pagina');
        endif;

        return $next($request);
    }
}
