<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class timeOut
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return string
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('preliminaryTimeUp') === 'up' && Route::current()->getName() === 'preliminary-period') {
            return redirect('preliminary-period-result');
        }
        if ($request->session()->get('productionOneTimeUp') === 'up' && Route::current()->getName() === 'production-period-one') {
            return redirect('shortcuts-discovered-in-this-period');
        }
        if ($request->session()->get('productionTowTimeUp') === 'up' && Route::current()->getName() === 'production-period-two') {
            return redirect('shortcuts-discovered-in-this-period-two');
        }
        if ($request->session()->get('viewResultProductionOneTimeLeft') === 'up' && Route::current()->getName() === 'view-my-answer-sheets') {
            return redirect('shortcuts-discovered-in-this-period')->with('timeMessage', 'Your allocated time of 1 minute for viewing your answer sheet has expired!');
        }
        if ($request->session()->get('viewResultProductionTwoTimeLeft') === 'up' && Route::current()->getName() === 'view-my-answer-sheets-two') {
            return redirect('shortcuts-discovered-in-this-period-two')->with('timeMessage', 'Your allocated time of 1 minute for viewing your answer sheet has expired!');
        }
        return $next($request);
    }
}
