@extends('layouts.app')
@section("title","Post experimental questionnaire")
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

        td,
        th {
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

        .text_span span {
            margin-right: 22%;
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
                            <form action="{{ route('post-experimental-step-four')}}" method="POST">
                                @csrf
                                <input type="hidden" name="next_page" value="Post_experimental_questionnaire_nine">
                                <input type="hidden" name="current_page" value="49">
                                <input type="hidden" name="question_set" value="C and D">
                                <div class="question">
                                    <p><strong>PART D: Please respond to the following questions.</strong></p>

                                    <p>To what extent do you believe that allowing <u>your chosen colleagues</u> to view
                                        your answer sheet is likely to reduce your chances of winning reward in the
                                        competition?</p>

                                    <p class="number_radio">
                                    <span><input type="radio" id="one" name="question_one" value="1">
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
                                        <label for="seven">7</label></span>
                                    </p>

                                    <p class="text_span">    </span>(Not at all)<span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(To
                                        a moderate extent)<span> </span>(To a great extent)<span></p>

                                </div>
                                <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                    <button style="padding: 5px 20px 5px 20px;" type="submit"
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

@endpush
