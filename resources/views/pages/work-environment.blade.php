@extends('layouts.app')
@section("title","Work environment")
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

        ul {
            list-style-type: square;
            padding: 12px;
            margin: 0px;
        }

        .cm_btn {
            position: absolute;
            bottom: 15px;

            width: 95%;
            /* justify-content: space-between; */
        }


        .question span {
            margin-right: 6%;
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
                margin-bottom: 50px !important;
                font-size: 12px;
            }

            .cm_btn {
                position: absolute;
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
                        <div class="card-body">
                            <div class="title text-center w-100 mt-4 mb-5">
                                <h5>Work environment</h5>
                            </div>
                            <br>
                            <div class="question">
                                <p>Recall that the task that you have done earlier represents what Festina does for
                                    fixing computer error codes for its clients. </p>
                                <p>Now imagine that at Festina, you work in one of its coding teams that consists of
                                    five employees. The members of your team includes you and four of your colleagues.
                                    The work environment of Festina’s coding team is described below:</p>
                                <ul>
                                    <li>
                                        You know the other colleagues who work with you in Festina’s coding team. You
                                        and other coding team members work at Festina’s head office. As all of you work
                                        for different clients, you work independently to each other and your work desks
                                        are located at different floors.
                                    </li>
                                    <li>
                                        However, as you are all part of Festina’s same coding team, you meet each other
                                        occasionally during ad-hoc team meetings. In those meetings, you and your
                                        colleagues often talk about your experiences of working with different clients.
                                    </li>
                                    <li>
                                        On special occasions (such as birthdays) you go out for lunch with your coding
                                        team members and colleagues from other departments. Sometimes, you also meet
                                        your coding team members in the common kitchen area during lunch breaks.
                                    </li>
                                </ul>
                            </div>
                            <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                <a href="{{ route('work-environment-understandability-questionnaire')}}"
                                   style="padding: 5px 20px 5px 20px;" type="button"
                                   class="btn btn-danger next_btn btn-sm">Next</a>
                            </div>
                        </div>
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
