@extends('layouts.app')
@section('title', 'Post experimental questionnaire')
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
            list-style-type: none;
            padding: 12px;
            margin: 0px;
        }

        .cm_btn {
            position: absolute;
            bottom: 15px;

            width: 95%;
            /* justify-content: space-between; */
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

        .num-radio-section {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .number_radio {
            display: flex;
            justify-content: space-between;
            width: 97%;
            margin-bottom: 30px;
        }

        .number_radio span {
            width: calc(100% / 7);
            text-align: center;
        }

        .number_radio span:first-child {
            text-align: left;
            width: calc(100% / 11);
        }

        .number_radio span:last-child {
            text-align: right;
            width: calc(100% / 10);
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
                            <div class="title text-center w-100 mt-2 mb-2">
                                <h5>Post experimental questionnaire</h5>
                            </div>
                            <form action="{{ route('post-experimental-main-one') }}" method="POST">
                                @csrf
                                <input type="hidden" name="next_page" value="page-forty-five">
                                <input type="hidden" name="current_page" value="42">
                                <input type="hidden" name="question_set" value="A and B">
                                <input type="hidden" name="question_part" value="A">
                                <div class="question">
                                    <p><strong>PART A: To help us better understand your decisions, please respond to
                                            the
                                            following questions. Recall that your identity will remain anonymous and
                                            your
                                            responses will be kept confidential. </strong></p>

                                    <div class="cm_row">
                                        <div class="col-md-3 w-100 text-end pe-4"><b>Recall also,</b></div>
                                        <div class="col-md-6 w-100">
                                            <table class=" table-sm mb-1" style="border-top: 1px solid #000">
                                                <tr style="border-bottom: 1px solid #000;">
                                                    <th class="text-center"><b>Current rank of Festina’s coding team
                                                            members</b></th>
                                                </tr>
                                                <tr>
                                                    <td class="text-start ps-1" style="background-color:#d6d6d6"><b>You
                                                            are
                                                            ranked 1<sup>st</sup></b></td>
                                                </tr>
                                                <tr style="border-bottom: 1px solid #000;">
                                                    <td class="w-100 text-start ps-1"><b>Your other colleagues are
                                                            ranked
                                                            2<sup>nd</sup>, 3<sup>rd</sup>, 4<sup>th</sup> and
                                                            5<sup>th</sup> positions</b></td>
                                                </tr>
                                            </table>
                                            <p><b>The shortcuts you share will be <u>visible to all</u> the coding team
                                                    members.</b></p>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <p>1. To what extent are you willing to share your identified shortcuts with your colleagues, by enabling the new feature of the upgraded software?</p>
                                    <div class="num-radio-section">
                                        <div class="number_radio">
                                        <span>
                                            <input type="radio" required id="one" name="question_one"
                                                   value="1">
                                            <label for="one">1</label>
                                            <div>Not at all</div>
                                        </span>
                                            <span><input type="radio" required id="two" name="question_one"
                                                         value="2">
                                            <label for="two">2</label></span>
                                            <span><input type="radio" required id="three" name="question_one"
                                                         value="3">
                                            <label for="three">3</label></span>
                                            <span><input type="radio" required id="four" name="question_one"
                                                         value="4">
                                            <label for="four">4</label>
                                             <div>To amoderate extent</div>
                                        </span>
                                            <span><input type="radio" required id="five" name="question_one"
                                                         value="5">
                                            <label for="five">5</label></span>
                                            <span><input type="radio" required id="six" name="question_one"
                                                         value="6">
                                            <label for="six">6</label></span>
                                            <span><input type="radio" required id="seven" name="question_one"
                                                         value="7">
                                            <label for="seven">7</label>
                                            <div>To a great extent</div>
                                        </span>
                                        </div>
                                    </div>
                                    <p class="mb-0">2. How many shortcuts are you willing to share with your colleagues?
                                    </p>
                                    <ul>
                                        <p><b><u>All</u> of your colleagues will view the details for the number of shortcuts that you select below.</b></p>
                                        <li><label><input type="radio" id="question_5" name="question_two"
                                                          value="0 shortcut">&nbsp;&nbsp;0 shortcut</label></li>
                                        <li><input type="radio" required id="question_two" name="question_two"
                                                   value="1 shortcut"><label for="question_two">&nbsp;&nbsp;1
                                                shortcut </label>
                                        </li>
                                        <li><input type="radio" required id="question_two1" name="question_two"
                                                   value="2 shortcut"><label for="question_two1">&nbsp;&nbsp;2
                                                shortcuts</label></li>
                                        <li><input type="radio" required id="question_3" name="question_two"
                                                   value="3 shortcut"><label for="question_3">&nbsp;&nbsp;3
                                                shortcuts</label>
                                        </li>
                                        <li><label><input type="radio" required id="question_4" name="question_two"
                                                          value="4 shortcut">&nbsp;&nbsp;4 shortcuts</label></li>

                                    </ul>
                                </div>
                                <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                    <button id="nextButton" style="padding: 5px 20px 5px 20px;" type="submit"
                                            class="btn btn-danger next_btn btn-sm" disabled>Next
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
