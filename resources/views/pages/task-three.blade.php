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
            font-size: 12px;
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
            margin-right: 6%;
        }

        .text_span span {
            margin-right: 15%;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 45%;
            border: 2px solid black;
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

            img {

                width: 40%;

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
    </style>
@endpush

@section('content')
    <div class="container-fluid cm-container ">
        <div class="container p-0">
            <div class="row w-100 p-0">
                <div class="col-12 main_card">
                    <div class="card w-100 h-100">
                        <div class="card-body">
                            <div class="title text-center w-100 mt-1 mb-1">
                                <h5>The Task </h5>
                            </div>

                            <div class="question">
                                <p>You will need to enter the correct answer for each box in the appropriate cell of a
                                    spreadsheet on your computer screen (as shown below). Once you enter the answer and
                                    hit
                                    ‘tab’ key, the computer will determine if your response is correct.</p>
                                <img class="img-fluid" src="{{ asset('assets/images/task-three.png') }}" alt="task-two">
                                <ul>
                                    <li>&nbsp;&nbsp;If your response is CORRECT, the cell will turn to GREEN and you
                                        will be
                                        permitted to provide a response for the next box of letters immediately.
                                    </li>
                                    <li>&nbsp;&nbsp;If your response is INCORRECT, there will be a 5 seconds delay
                                        before
                                        you can enter your next response in the spreadsheet.
                                    </li>
                                </ul>
                                <p>The computer screen will show you the time remaining and the number of correct
                                    responses
                                    that you have recorded. You may record an answer in any cells at any time. To move
                                    between cells on the spreadsheet, you can use your mouse or ‘tab’ keys of your
                                    keyboard.
                                </p>
                            </div>
                            <div class="cm_btn d-flex justify-content-between ">
                                <a href="{{ route('task-two') }}" type="button"
                                   class="btn pre_btn btn-danger btn-sm">Previous</a>
                                <a href="{{ route('task-understandability-questionnaire') }}"
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
