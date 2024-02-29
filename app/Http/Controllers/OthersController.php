<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class OthersController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse|Application|Redirector
     * @method post
     *
     */
    public function TimeManagementSystem(Request $request): RedirectResponse|Application|Redirector
    {
        session()->put($request->timeTag, $request->timeLeft);
        return redirect($request->redirectTo);
    }
}
