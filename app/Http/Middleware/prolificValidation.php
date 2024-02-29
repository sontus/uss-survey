<?php

namespace App\Http\Middleware;

use App\Models\ProlificUser;
use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class prolificValidation
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
        $prolific_pid   = Session::get('prolific_pid');
        $study_id       = Session::get('study_id');
        $session_id     = Session::get('session_id');

        if( empty($prolific_pid) || empty($study_id) || empty($session_id)) {
            return redirect()->route('out-from-prolific');
        }

        $userCheck = ProlificUser::where([['prolific_pid',$prolific_pid],['study_id',$study_id],['session_id',$session_id]])->first();

        if($userCheck)
        {
           
        }



        return $next($request);


    }
}
