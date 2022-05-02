<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
//     */
//    public function handle($request, Closure $next)
//    {
//        //TODO добавить админскую проверку
//        if (Auth::check()) {
//            return $next($request);
//        } else {
//            return redirect(RouteServiceProvider::ADMIN);
//        }
//    }

}
