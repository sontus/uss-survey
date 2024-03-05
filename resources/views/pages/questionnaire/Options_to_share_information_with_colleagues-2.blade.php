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
                                <p class="mb-4">At Festina, the coding team uses a software called Zempra to perform their tasks. The current version of Zempra (version 1) <span class="text-danger">had</span> no
                                    option to allow sharing of shortcut details between coding team members.</p>
                                {{-- <br> --}}
                                {{-- <p>Out of the 5 members in Festina’s coding team, you are currently ranked at <strong>#1</strong> based on your performance in the task. There are six shortcuts to be discovered in your task and you have already identified four of them. </p> --}}
                                <p class="mb-4">Management at Festina believes that by sharing shortcut details with each other, coding team members can help each other improve their work skills and become more productive. This is because shortcuts enable the coding team members to complete their tasks faster. This increase in productivity at the individual employee level will ultimately improve Festina’s overall performance.
                                </p>
                                <p>Festina's management has decided to adopt an upgraded version of Zempra software (version 2), which has a new feature that allows sharing of shortcut details between coding team members. By enabling this feature, one member can share the details of their identified shortcuts with other members. All Festina employees now use this upgraded software.
                                </p>
                                {{-- <br> --}}
                                {{-- <p>There are six shortcuts to be discovered in your task and you have already identified four of them.</p> --}}
                                <p class="mb-4">Using this new feature if you share shortcuts, the details of your shared shortcuts can <b>be viewed by all members of the coding team.</b> If you prefer not to share your shortcuts with any individual member of the coding team, you <b>cannot exclude</b> that member from receiving the details of your shared shortcuts.
                                </p>
                            </div>
                            <div class="cm_btn d-flex justify-content-between ">
                                <a href="{{ route('sharing-of-information-with-colleagues-Understandability-Questionnaire') }}"
                                   type="button" class="btn pre_btn btn-danger btn-sm">Previous</a>
                                <a href="{{ route('options_to_share_information_with_colleagues_three') }}"
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


