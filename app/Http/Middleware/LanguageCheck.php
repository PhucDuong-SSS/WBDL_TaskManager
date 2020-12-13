<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locate = null;
        if(!session()->has('locale'))
        {
            $locale = session()->put('locale',config('app.locale'));
        }
        else
        {
            $locale=session('locale');
        }
        App::setLocale($locale);

        return $next($request);
    }
}
