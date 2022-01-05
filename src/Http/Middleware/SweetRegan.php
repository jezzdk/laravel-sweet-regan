<?php

namespace Jezzdk\LaravelSweetRegan\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SweetRegan
{
    /**
     * Sweet Regan says hi. Maybe ;)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $chance = config('sweet-regan.chance', '1:10');

        [$from, $to] = explode(':', $chance);

        if (rand($from, $to) === (int)ceil($to / 2)) {
            return response()->view('sweet-regan::sweet-regan', [
                'delay' => config('sweet-regan.visit_length', 2),
                'intended' => redirect()->intended()->getTargetUrl(),
                'source' => base64_encode(file_get_contents(__DIR__.'/../../../3df1de355383830cbb7e545df76761c6.jpg'))
            ]);
        }

        return $next($request);
    }
}
