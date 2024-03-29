@extends('layouts.app')
@section("title","General Information")
@push('page-css')
    <style>
        .main_card {
            margin: 20px 10px;
            height: 90vh;
            width: 100%;
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
                margin: 5px 5px;
                height: 90vh !important;
                width: 100%;
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
            -webkit-appearance: none;
            appearance: none;
            background-color: #d23d3d;
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
                                <h5>Post experimental questionnaire</h5>
                            </div>
                            <br>
                            <form action="{{ route('page-fifty-seven-save')}}" method="POST">
                                @csrf
                                <input type="hidden" name="next_page" value="page-fifty-eight">
                                <input type="hidden" name="current_page" value="57">
                                <input type="hidden" name="question_set" value="All">
                                <input type="hidden" name="question_part" value="K">
                                <div class="question">
                                    <p><strong>PART K: Please respond to the following questions.</strong></p>
                                    <p>To what extent do you think sharing your shortcut details will help colleagues with very low ranks to avoid penalties?</p>
                                    <div class="number_radio d-flex justify-content-between">
                                            <span><input type="radio" id="soft_one" name="question_one" value="1">
                                                <label for="soft_one">1</label></span>
                                        <span><input type="radio" id="soft_two" name="question_one" value="2">
                                                <label for="soft_two">2</label></span>
                                        <span><input type="radio" id="soft_three" name="question_one" value="3">
                                                <label for="soft_three">3</label></span>
                                        <span><input type="radio" id="soft_four" name="question_one" value="4">
                                                <label for="soft_four">4</label></span>
                                        <span><input type="radio" id="soft_five" name="question_one" value="5">
                                                <label for="soft_five">5</label></span>
                                        <span><input type="radio" id="soft_six" name="question_one" value="6">
                                                <label for="soft_six">6</label></span>
                                        <span><input type="radio" id="soft_seven" name="question_one" value="7">
                                                <label for="soft_seven">7</label></span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="col-md-3 me-1">(Not at all)</div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-3 me-4">(To a moderate extent)</div>
                                        <div class="col-md-4 text-center ps-4">(To a great extent)</div>
                                    </div>
                                </div>
                                <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">
                                    <button id="nextButton" disabled style="padding: 5px 20px 5px 20px;" type="submit"
                                            class="btn btn-danger next_btn btn-sm">Next
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('page-js')
    <script>
        // Disable next button until all questions are not answered
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


