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
            margin-left: 25px;
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

        @media only screen and (max-width: 1030px) {
            .main_card {
                /* border: 2px solid #6f6f6f65; */
                margin: 5px 5px;
                height: 90vh !important;
                width: 100%;

                /* background-color: #fff; */

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
                            <div class="title text-center w-100 mt-5 mb-5">
                                <h5>Compensation Structure</h5>
                            </div>
                            <br>
                            <div class="question">
                                <p>Now imagine that you and your colleagues at Festina’s coding team are working on
                                    tasks that are similar to the one that you have performed earlier in the first phase
                                    of this experiment. The tasks runs for four production periods. Each member’s
                                    compensation will be determined at the end of fourth production period. </p>
                                <p>All members of the coding team are compensated based on their performance in their
                                    task. Specifically, there are THREE elements of the compensation structure.</p>
                                <ul>
                                    <li class="mb-2"><strong>Fixed payment: </strong>All members receive a fixed payment
                                        of $2,000 Lira for completing 4 production periods. 
                                    </li>
                                    <li class="mb-2"><strong>Winner’s bonus: </strong>The member who completes the most
                                        number of correct answers in total at the end of 4 production periods receives a
                                        bonus of $1,000 Lira. Coding team members are ranked from 1 to 5 based on their
                                        total performance in 4 production periods. Specifically, the team member who
                                        ranks first (1<sup>st</sup>) out of the 5 members in your team receives this
                                        bonus.
                                    </li>
                                    <li>
                                        <strong>Penalty: </strong>
                                        The member who completes the fewest number of correct answers receives a penalty
                                        of $1,000 Lira. Specifically, the team member that ranks last (5<sup>th</sup>)
                                        in your team will have $1,000 Lira salary deduction applied.
                                    </li>
                                </ul>

                            </div>
                            <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                <a href="{{ route('compensation-structure-understandability-questionnaire-two')}}"
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


