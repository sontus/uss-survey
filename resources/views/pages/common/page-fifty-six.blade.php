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
            display: none;
            background-color: #d23d3d;
            margin: 0;

        }

        .number_radio input[type="radio"]:checked + label:not(.checkbox-label) {
            color: rgb(250, 246, 246);
            transition: all 500ms;
            background: rgb(31, 148, 243);
        }

        .number_radio label:not(.checkbox-label) {
            padding-bottom: 2px;
            width: 25px;
            height: 25px;
            text-align: center;
            border: 1px solid black;
            border-radius: 50%;
        }

        .number_radio label.checkbox-label {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .number_radio label.checkbox-label div {
            height: 25px;
            width: 25px;
            border: 1px solid black;
            color: #fff;
            border-radius: 5px;
        }

        .number_radio label.checkbox-label div .checkmark-sign {
            display: none;
        }

        .number_radio .checkbox-ratio[type="radio"]:checked + label.checkbox-label div {
            color: rgb(250, 246, 246);
            transition: all 500ms;
            background: rgb(31, 148, 243);
        }

        .number_radio .checkbox-ratio[type="radio"]:checked + label.checkbox-label div .checkmark-sign {
            display: block;
        }

        .number_radio .d-flex {
            width: calc(100% / 8);
            align-items: center;
            text-align: center;
        }

        .number_radio .d-flex:nth-child(1) {
            align-items: start;
        }

        .number_radio .d-flex:nth-child(2) {
            margin-left: -46px;
        }

        .number_radio .d-flex:nth-last-child(2) {
            align-items: end;
            margin-left: -46px;
        }

        .number_radio .d-flex:nth-last-child(1) {
            margin-left: 40px;
        }

        .number_radio .d-flex input[type="checkbox"] {
            height: 25px;
            width: 25px;
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
                            <form action="{{ route('page-fifty-six-save')}}" method="POST">
                                @csrf
                                @if (checkVersion() == 'B' || checkVersion() == 'D')
                                    <input type="hidden" name="next_page" value="page-fifty-seven">
                                @else
                                    <input type="hidden" name="next_page" value="page-fifty-eight">
                                @endif
                                <input type="hidden" name="current_page" value="56">
                                <input type="hidden" name="question_set" value="All">
                                <input type="hidden" name="question_part" value="J">
                                <div class="question">
                                    <p><strong>PART J: Please respond to the following questions.</strong></p>

                                    <p>To what extent do you agree with the following statements</p>
                                    <p>(1) I share shortcuts with my colleague ranked #2 because my colleague will also share shortcuts with me.</p>
                                    <div class="number_radio d-flex justify-content-between">
                                        <div
                                            class="d-flex flex-column"> <span><input
                                                    type="radio" id="soft_one" name="question_one" value="1">
                                                <label for="soft_one">1</label></span>
                                            <div>Strongly Disagree</div>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_two" name="question_one" value="2">
                                                <label for="soft_two">2</label></span>
                                        </div>
                                        <div class="d-flex flex-column ">
                                        <span><input type="radio" id="soft_three" name="question_one" value="3">
                                                <label for="soft_three">3</label></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_four" name="question_one" value="4">
                                                <label for="soft_four">4</label></span>
                                            <div>Neither Disagree nor Agree</div>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_five" name="question_one" value="5">
                                                <label for="soft_five">5</label></span>
                                            <div></div>
                                        </div>
                                        <div class="d-flex flex-column ">
                                        <span><input type="radio" id="soft_six" name="question_one" value="6">
                                                <label for="soft_six">6</label></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_seven" name="question_one" value="7">
                                                <label for="soft_seven">7</label></span>
                                            <div>Strongly Agree</div>
                                        </div>
                                        <div style="width: 20%"
                                             class="d-flex flex-column align-items-center justify-content-end">
                                                <span>
                                                    <input type="radio" id="soft_eight" class="checkbox-ratio"
                                                           name="question_one"
                                                           value="7">
                                                    <label class="checkbox-label" for="soft_eight">
                                                        <div><span class="checkmark-sign">&#10004;</span></div>
                                                        I did not share shortcuts
                                                        with this colleague
                                                    </label>
                                                </span>
                                        </div>
                                    </div>

                                    <p class="mt-3">(2) I share shortcuts with my colleague ranked #4 because my colleague will also share shortcuts with me.</p>
                                    <div class="number_radio d-flex justify-content-between">
                                        <div
                                            class="d-flex flex-column"> <span><input
                                                    type="radio" id="soft_two_one" name="question_two" value="1">
                                                <label for="soft_two_one">1</label></span>
                                            <div>Strongly Disagree</div>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_two_two" name="question_two" value="2">
                                                <label for="soft_two_two">2</label></span>
                                        </div>
                                        <div class="d-flex flex-column ">
                                        <span><input type="radio" id="soft_two_three" name="question_two" value="3">
                                                <label for="soft_two_three">3</label></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_two_four" name="question_two" value="4">
                                                <label for="soft_two_four">4</label></span>
                                            <div>Neither Disagree nor Agree</div>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_two_five" name="question_two" value="5">
                                                <label for="soft_two_five">5</label></span>
                                            <div></div>
                                        </div>
                                        <div class="d-flex flex-column ">
                                        <span><input type="radio" id="soft_two_six" name="question_two" value="6">
                                                <label for="soft_two_six">6</label></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_two_seven" name="question_two" value="7">
                                                <label for="soft_two_seven">7</label></span>
                                            <div>Strongly Agree</div>
                                        </div>
                                        <div style="width: 20%"
                                             class="d-flex flex-column align-items-center justify-content-end">
                                                <span>
                                                    <input type="radio" id="soft_two_eight" class="checkbox-ratio"
                                                           name="question_two"
                                                           value="7">
                                                    <label class="checkbox-label" for="soft_two_eight">
                                                        <div><span class="checkmark-sign">&#10004;</span></div>
                                                        I did not share shortcuts
                                                        with this colleague
                                                    </label>
                                                </span>
                                        </div>
                                    </div>
                                    <p class="mt-3">(3) I share shortcuts with my colleague ranked #5 because my colleague will also share shortcuts with me.</p>

                                    <div class="number_radio d-flex justify-content-between">
                                        <div
                                            class="d-flex flex-column"> <span><input
                                                    type="radio" id="soft_three_one" name="question_three" value="1">
                                                <label for="soft_three_one">1</label></span>
                                            <div>Strongly Disagree</div>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_three_two" name="question_three" value="2">
                                                <label for="soft_three_two">2</label></span>
                                        </div>
                                        <div class="d-flex flex-column ">
                                        <span><input type="radio" id="soft_three_three" name="question_three" value="3">
                                                <label for="soft_three_three">3</label></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_three_four" name="question_three" value="4">
                                                <label for="soft_three_four">4</label></span>
                                            <div>Neither Disagree nor Agree</div>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_three_five" name="question_three" value="5">
                                                <label for="soft_three_five">5</label></span>
                                            <div></div>
                                        </div>
                                        <div class="d-flex flex-column ">
                                        <span><input type="radio" id="soft_three_six" name="question_three" value="6">
                                                <label for="soft_three_six">6</label></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                        <span><input type="radio" id="soft_three_seven" name="question_three" value="7">
                                                <label for="soft_three_seven">7</label></span>
                                            <div>Strongly Agree</div>
                                        </div>
                                        <div style="width: 20%"
                                             class="d-flex flex-column align-items-center justify-content-end">
                                                <span>
                                                    <input type="radio" id="soft_three_eight" class="checkbox-ratio"
                                                           name="question_three"
                                                           value="7">
                                                    <label class="checkbox-label" for="soft_three_eight">
                                                        <div><span class="checkmark-sign">&#10004;</span></div>
                                                        I did not share shortcuts
                                                        with this colleague
                                                    </label>
                                                </span>
                                        </div>
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


