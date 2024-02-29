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
        }

        ul {
            list-style-type: "❑";
        }

        .cm_btn {
            position: absolute;
            bottom: 15px;

            width: 95%;
            /* justify-content: space-between; */
        }

        .pre_btn {
            margin-left: 20px;
            padding: 5px 15px 5px 15px;
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
                /* margin-left:20px;  */
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
                                <h6>Options to share knowledge with colleagues</h6>
                            </div>
                            <br>
                            <div class="question">
                                <p class="mb-4">Now imagine that in the four production period task that you and your
                                    colleagues were working on, all members of the coding team have completed the first
                                    and second production periods</p>
                                {{-- <br> --}}
                                {{-- <p>Out of the 5 members in Festina’s coding team, you are currently ranked at <strong>#1</strong> based on your performance in the task. There are six shortcuts to be discovered in your task and you have already identified four of them. </p> --}}
                                <p class="mb-4">Out of the 5 members in Festina’s coding team, you are currently ranked
                                    at <strong>#1</strong> based on your performance in the task. All coding team
                                    members can view their own rank and the ranks received by others. </p>
                                <p>Recall that there are six shortcuts to be discovered in your task. Imagine that you
                                    have already identified four of them.</p>
                                {{-- <br> --}}
                                {{-- <p>There are six shortcuts to be discovered in your task and you have already identified four of them.</p> --}}
                                <p class="mb-4">At the end of the second period, which is the half-way mark of the task,
                                    Festina has decided to trial a new and upgraded version of the software that you use
                                    for completing the task. However, the new version is being trialled only in the area
                                    of the office where your work desk is located. As a result, you are the only member
                                    of coding team who is using the upgraded version of the software. All other coding
                                    team members are using the non-upgraded version of the software.</p>
                                {{-- <br> --}}
                                <p>The upgraded software has a new function that you can enable to allow your other
                                    colleagues in Festina’s coding team to know the shortcuts you have discovered up to
                                    the second production period. If you decide to enable this function, <strong>description
                                        of the shortcuts you have discovered will be visible to <u>all of your
                                            colleagues</u>. </strong></p>
                            </div>
                            <div class="cm_btn d-flex justify-content-between ">
                                <a href="{{ route('sharing-of-information-with-colleagues-Understandability-Questionnaire') }}"
                                   type="button" class="btn pre_btn btn-danger btn-sm">Previous</a>
                                <a href="{{ route('sharing_of_information_with_colleaguesUnderstandability_Questionnaire2') }}"
                                   style="padding: 5px 20px 5px 20px;" type="button"
                                   class="btn next_btn btn-danger btn-sm">Next</a>
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


