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

        ul {
            list-style-type: "❑";
            padding: 12px;
            margin: 0px;
        }

        .cm_btn {
            position: absolute;
            bottom: 15px;

            width: 95%;
            /* justify-content: space-between; */
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #d6d6d6;
        }

        .question span {
            margin-right: 10%;
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

        .number_radio input[type="radio"] {
            /* Add if not using autoprefixer */
            -webkit-appearance: none;
            appearance: none;
            /* For iOS < 15 to remove gradient background */
            background-color: #d23d3d;
            /* Not removed via appearance */
            margin: 0;

        }

        .number_radio input[type="radio"]:checked + label {
            color: rgb(250, 246, 246);
            transition: all 500ms;
            background: rgb(31, 148, 243);
        }

        .number_radio label {
            padding-bottom: 2px;
            width: 25px;

            height: 25px;
            text-align: center;
            border: 1px solid black;
            border-radius: 50%;
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
                            <div class="title text-center w-100 mt-5 mb-4">
                                <h5>Introduction to PHASE 2</h5>
                            </div>
                            <br>
                                {{-- <input type="hidden" name="next_page" value="page-fifty-one"> --}}
                                <input type="hidden" name="next_page" value="page-fifty-two">
                                <input type="hidden" name="current_page" value="27">
                                <input type="hidden" name="question_set" value="All">
                                <div class="question">
                                    <p>
                                        You are about the start the second phase of this experiment. In this phase, you will read additional information about your work
                                        environment and compensation structure at Festina. Once you finish reading, you will be required answer a few questions.
                                    </p>
                                    <p class="mt-5">
                                        Click on the ‘Next’ button to continue.
                                    </p>

                                </div>
                            <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                {{-- <a href="{{ route('your-role-in-organisation')}}"  style="padding: 5px 20px 5px 20px;" type="button" class="btn btn-danger next_btn btn-sm">Next</a> --}}
                                <a href="{{ route('work-environment')}}" style="padding: 5px 20px 5px 20px;"
                                   type="button" class="btn btn-danger next_btn btn-sm">Next</a>
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
    <script>
        // Disable next button untill all questions are not answered
        const container = document.querySelector('.question');
        const nextButton = document.getElementById('nextButton');
        const radioSets = container.querySelectorAll('input[type="radio"]');

        container.addEventListener('change', function (event) {
            nextButton.disabled = !areAllSetsSelected();
        });

        function areAllSetsSelected() {
            for (let i = 0; i < radioSets.length; i++) {
                const setName = radioSets[i].getAttribute('name');
                const selectedInSet = container.querySelector(`input[type="radio"][name="${setName}"]:checked`);
                if (!selectedInSet) {
                    return false;
                }
            }
            return true;
        }

    </script>
@endpush


