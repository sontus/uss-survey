@extends('layouts.app')
@section("title","General Information")
@push('vendor-css')

@endpush
@push('page-css')
    <style>

        .main_card {
            /* border: 2px solid #6f6f6f65; */
            margin: 20px 10px;
            height: 90vh;
            width: 100%;

            /* background-color: #fff; */

        }

        .pre_btn {
            margin-left: 15px;
        }

        .cm-container {
            background-color: #eee;
            height: 100vh;
        }

        .question {
            position: relative;
            font-size: 14px;
            margin-left: 5% !important;
            margin-right: 5%;
        }


        .text_span span {
            margin-right: 15%;
        }

        .cm_row {
            display: grid;
            grid-template-columns: 3fr 6fr 3fr;
        }

        @media only screen and (max-width: 1030px) {
            .main_card {
                /* border: 2px solid #6f6f6f65; */
                margin: 5px 5px;
                height: 90vh !important;
                width: 100%;

                /* background-color: #fff; */

            }

            .cm_row {
                display: grid;
                grid-template-columns: 12fr;
            }

            .question {
                /* margin-bottom: 50px !important; */
                font-size: 12px;
            }

            .cm_btn {
                /* position: absolute; */
                bottom: 15px;
                width: 100%;

                /* justify-content: space-between; */
            }

            .pre_btn {
                margin-left: 0px;
                padding: 5px 15px 5px 15px;
            }

            .next_btn {
                margin-right: 35px
            }
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid cm-container ">
        <div class="container p-0">
            <div class="row w-100 p-0">
                <div class="col-12 main_card">
                    <div class="card w-100 h-100">
                        {{-- <form action="{{ route('one')}}" method="GET">
                            @csrf --}}
                            <div class="card-body">
                                <div class="title text-center w-100 mt-3 mb-3">
                                    <h5>Information Statement and Consent Form </h5>
                                </div>
                                    {{-- <input type="text" hidden name="prolific_pid" value="{{ request()->get('PROLIFIC_PID') }}"/>
                                    <input type="text" hidden name="study_id" value="{{ request()->get('STUDY_ID') }}"/>
                                    <input type="text" hidden name="session_id" value="{{ request()->get('SESSION_ID') }}"/> --}}
                                <br>
                                <div class="question">
                                    <p><strong>A copy of Participant Information statement and Consent Form can be
                                            downloaded (as a pdf file) by clicking on the button below.</strong></p>
                                    <a href="{{ asset('file/Information Statement and Consent Form.pdf')}}"
                                    style="padding: 5px 20px 5px 20px;" type="button"
                                    class="btn btn-danger next_btn btn-sm" download="">Download Information Statement and
                                        Consent Form</a>
                                    <br><br>
                                    <p><strong>Declaration by the participant</strong></p>
                                    <p>By checking the agree/start questionnaire option below:</p>
                                    <ul>
                                        <li>I understand I am being asked to provide consent to participate in this research
                                            study;
                                        </li>
                                        <li>I have read the Participant Information Statement, or it has been provided to me
                                            in a language that I understand;
                                        </li>
                                        <li>I provide my consent for the information collected about me to be used for the
                                            purpose of this research study only.
                                        </li>
                                        <li>I understand that if necessary, I can ask questions and the research team will
                                            respond to my questions.
                                        </li>
                                        <li>I freely agree to participate in this research study as described and understand
                                            that I am free to withdraw at any time during the study and withdrawal will not
                                            affect my relationship with any of the named organisations and/or research team
                                            members;
                                        </li>
                                        <li>I understand that I can download a copy of this consent from by clicking on the
                                            ‘Download Information Statement and Consent Form’ button.
                                        </li>
                                        <li>I understand that I can contact the researchers if I would like to receive a
                                            copy of the study results
                                        </li>
                                    </ul>

                                </div>
                                <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-start">
                                    <a href="{{ route('one')}}" type="button" style="margin-left: 5%"
                                    class="btn btn-danger  btn-sm">I agree, start questionnaire</a>
                                    {{-- <button type="submit" class="btn btn-danger  btn-sm" style="margin-left: 5%">I agree, start questionnaire</button> --}}
                                </div>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('vendor-js')

@endpush
@push('page-js')

@endpush


