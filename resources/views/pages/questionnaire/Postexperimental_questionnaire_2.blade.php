@extends('layouts.app')
@section('title', 'General Information')
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

        tr:nth-child(even) {
            background-color: #d6d6d6;
        }

        .question span {
            margin-right: 10%;
        }

        .text_span span {
            margin-right: 24%;
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
                            <div class="title text-center w-100 mt-3 mb-3">
                                <h5>Post experimental questionnaire</h5>
                            </div>
                            <br>
                            <form action="{{ route('post-experimental-main-two') }}" method="POST">
                                @csrf
                                <input type="hidden" name="next_page" value="Post_experimental_questionnaire_three">
                                <input type="hidden" name="current_page" value="43">
                                <input type="hidden" name="question_set" value="C and D">
                                <input type="hidden" name="question_part" value="A">

                                <div class="question">
                                    <p><strong>PART A: To help us better understand your decisions, please respond to
                                            the following questions. Recall that your identity will remain anonymous and
                                            your responses will be kept confidential. </strong></p>


                                    <div class="cm_row">
                                        <div class="col-md-3 w-100 text-end pe-4"><b>Recall also,</b></div>
                                        <div class="col-md-6 w-100">
                                            <table class=" table-sm mb-1" style="border-top: 1px solid #000">
                                                <tr style="border-bottom: 1px solid #000;">
                                                    <th class="text-center">Current rank of Festina’s coding team
                                                        members
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#d6d6d6"><strong>You are ranked
                                                            1<sup>st</sup></strong></td>
                                                </tr>
                                                <tr style="border-bottom: 1px solid #000;">
                                                    <td class="w-100 text-start ps-1"><strong>other colleagues are
                                                            ranked 2<sup>nd</sup>, 3<sup>rd</sup>, 4<sup>th</sup> and
                                                            5<sup>th</sup>
                                                            positions</strong></td>
                                                </tr>
                                            </table>

                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="text-center">
                                        <strong>The shortcuts you share will be <u>visible only to your chosen</u>
                                            coding team
                                            members.</strong>
                                    </div>
                                    <p class="mt-5">1. To what extent would you be willing to allow your colleagues to
                                        view the
                                        description of the shortcuts you have discovered, by enabling the new function
                                        of
                                        the upgraded software?</p>

                                    <div class="number_radio d-flex justify-content-between">
                                        <span>
                                            <input type="radio" id="one" name="question_one" value="1" required>
                                            <label for="one">1</label></span>
                                        <span><input type="radio" id="two" name="question_one" value="2">
                                            <label for="two">2</label></span>
                                        <span><input type="radio" id="three" name="question_one" value="3">
                                            <label for="three">3</label></span>
                                        <span><input type="radio" id="four" name="question_one" value="4">
                                            <label for="four">4</label></span>
                                        <span><input type="radio" id="five" name="question_one" value="5">
                                            <label for="five">5</label></span>
                                        <span><input type="radio" id="six" name="question_one" value="6">
                                            <label for="six">6</label></span>
                                        <span><input type="radio" id="seven" name="question_one" value="7">
                                            <label for="seven">7</label>
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="col-md-4 me-3">(not at all)</div>
                                        <div class="col-md-4 me-2">(To a moderate extent)</div>
                                        <div class="col-md-4 text-center">(To a great extent)</div>
                                    </div>


                                    {{-- <p>2. If you were to share answer sheets for any of the four shortcuts that you have
                                        discovered, how many shortcuts would you like to share answer sheets for?</p>
                                    <div class="cm_row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6 w-100">
                                            <table class="table table-sm">
                                                <tr>
                                                    <th>Current rank of Festina’s coding team members</th>
                                                    <th>Do you allow the following colleagues to view your answer
                                                        sheet?
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>You are ranked 1<sup>st</sup></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Colleague who is ranked 2<sup>nd</sup></td>
                                                    <td>
                                                        <label><input type="radio" id="vehicle1" value="Allow"
                                                                      name="question_two_1"> Allow</label>
                                                        <label><input type="radio" value="Do not allow" id="vehicle2"
                                                                      name="question_two_1"> Do not allow</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Colleague who is ranked 3<sup>rd</sup></td>
                                                    <td>
                                                        <label><input type="radio" id="vehicle1" value="Allow"
                                                                      name="question_two_2"> Allow</label>
                                                        <label><input type="radio" id="vehicle2" value="Do not allow"
                                                                      name="question_two_2"> Do not allow</label>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Colleague who is ranked 4<sup>th</sup></td>
                                                    <td>
                                                        <label><input type="radio" id="vehicle1" value="Allow"
                                                                      name="question_two_3"> Allow</label>
                                                        <label><input type="radio" id="vehicle2" value="Do not allow"
                                                                      name="question_two_3"> Do not allow</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Colleague who is ranked 5<sup>th</sup></td>
                                                    <td>
                                                        <label><input type="radio" id="vehicle1" value="Allow"
                                                                      name="question_two_4"> Allow</label>
                                                        <label><input type="radio" id="vehicle2" value="Do not allow"
                                                                      name="question_two_4"> Do not allow</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div> --}}
                                </div>
                                <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">
                                    <button style="padding: 5px 20px 5px 20px;" type="submit" id="nextButton" disabled
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
        const container = document.querySelector('.number_radio');
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
