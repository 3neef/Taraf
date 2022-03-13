<?php

namespace App\Http\Middleware;
use Closure;

use Illuminate\Http\Request;



class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $language = 'en'; // default

        if (request('language')) {
            $language = request('language');
            session()->put('language', $language);
        } elseif (session('language')) {
            $language = session('language');
        }
        app()->setLocale($language);

        return $next($request);
    }

}
