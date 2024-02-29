<?php

namespace App\Http\Controllers;

use App\Models\ParticipantPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ParticipantPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id                = Session::get('prolific_pid');
        $fixed_payment          = $request->fixed_payment;
        $performance_payment    = $request->performance_payment;

        $payment = new ParticipantPayment();
        $payment->fixed_payment = $fixed_payment;
        $payment->performance_payment = $performance_payment;
        $payment->user_id = $user_id;
        $payment->save();
        return view('pages.end-experiment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParticipantPayment  $participantPayment
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipantPayment $participantPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParticipantPayment  $participantPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipantPayment $participantPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParticipantPayment  $participantPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParticipantPayment $participantPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParticipantPayment  $participantPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipantPayment $participantPayment)
    {
        //
    }
}
