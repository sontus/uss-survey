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
                                <h5>Post experimental questionnaire</h5>
                            </div>
                            <br>
                            <form action="{{ route('page-fifty-nine-save')}}" method="POST">
                                @csrf
                                <input type="hidden" name="next_page" value="page-sixty">
                                <input type="hidden" name="current_page" value="59">
                                <input type="hidden" name="question_set" value="All">
                                <input type="hidden" name="question_part" value="M">
                                <div class="question">
                                    <p><strong>PART M: To what extent do you agree or disagree with the following
                                            statements.</strong></p>
                                    <p>(1) I feel related to those of my colleagues who rank very low </p>
                                    <div class="number_radio d-flex justify-content-between">
                                <span><input type="radio" id="warm_one" name="question_one" value="1">
                                <label for="warm_one">1</label></span>
                                        <span><input type="radio" id="warm_two" name="question_one" value="2">
                                <label for="warm_two">2</label></span>
                                        <span><input type="radio" id="warm_three" name="question_one" value="3">
                                <label for="warm_three">3</label></span>
                                        <span><input type="radio" id="warm_four" name="question_one" value="4">
                                <label for="warm_four">4</label></span>
                                        <span><input type="radio" id="warm_five" name="question_one" value="5">
                                <label for="warm_five">5</label></span>
                                        <span><input type="radio" id="warm_six" name="question_one" value="6">
                                <label for="warm_six">6</label></span>
                                        <span><input type="radio" id="warm_seven" name="question_one" value="7">
                                <label for="warm_seven">7</label></span>

                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="col-md-4 me-3">(Strongly Disagree)</div>
                                        <div class="col-md-4 me-2">(Neither Disagree nor Agree)</div>
                                        <div class="col-md-4 text-center">(Strongly Agree)</div>
                                    </div>

                                    {{-- 2nd --}}
                                    <p class="mt-3">(2) I feel compassionate toward those of my colleagues who rank very
                                        low </p>

                                    <div class="number_radio d-flex justify-content-between">
                                <span><input type="radio" id="one-q1" name="question_two" value="1">
                                <label for="one-q1">1</label></span>
                                        <span><input type="radio" id="two-q1" name="question_two" value="2">
                                <label for="two-q1">2</label></span>
                                        <span><input type="radio" id="three-q1" name="question_two" value="3">
                                <label for="three-q1">3</label></span>
                                        <span><input type="radio" id="four-q1" name="question_two" value="4">
                                <label for="four-q1">4</label></span>
                                        <span><input type="radio" id="five-q1" name="question_two" value="5">
                                <label for="five-q1">5</label></span>
                                        <span><input type="radio" id="six-q1" name="question_two" value="6">
                                <label for="six-q1">6</label></span>
                                        <span><input type="radio" id="seven-q1" name="question_two" value="7">
                                <label for="seven-q1">7</label></span>

                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div class="col-md-4 me-3">(Strongly Disagree)</div>
                                        <div class="col-md-4 me-2">(Neither Disagree nor Agree)</div>
                                        <div class="col-md-4 text-center">(Strongly Agree)</div>
                                    </div>
                                    {{-- 3rd --}}
                                    <p class="mt-3">(3) I have never used the Internet myself</p>

                                    <div class="number_radio d-flex justify-content-between">
                                <span><input type="radio" id="one-q2" name="question_three" value="1">
                                <label for="one-q2">1</label></span>
                                        <span><input type="radio" id="two-q2" name="question_three" value="2">
                                <label for="two-q2">2</label></span>
                                        <span><input type="radio" id="three-q2" name="question_three" value="3">
                                <label for="three-q2">3</label></span>
                                        <span><input type="radio" id="four-q2" name="question_three" value="4">
                                <label for="four-q2">4</label></span>
                                        <span><input type="radio" id="five-q2" name="question_three" value="5">
                                <label for="five-q2">5</label></span>
                                        <span><input type="radio" id="six-q2" name="question_three" value="6">
                                <label for="six-q2">6</label></span>
                                        <span><input type="radio" id="seven" name="question_three" value="7">
                                <label for="seven">7</label></span>

                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div class="col-md-4 me-3">(Strongly Disagree)</div>
                                        <div class="col-md-4 me-2">(Neither Disagree nor Agree)</div>
                                        <div class="col-md-4 text-center">(Strongly Agree)</div>
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


