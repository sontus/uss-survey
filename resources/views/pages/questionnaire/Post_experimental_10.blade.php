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
            list-style-type: none;
            padding: 12px;
            margin: 0px;
        }

        ul li {
            margin-left: 25px;
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
            margin-right: 6%;
        }

        .text_span span {
            margin-right: 15%;
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
                            <form action="{{ route('post-experimental-step-seven')}}" method="POST">
                                @csrf
                                <input type="hidden" name="next_page" value="Post_experimental_questionnaire_eleven">
                                <input type="hidden" name="current_page" value="51">
                                <input type="hidden" name="question_set" value="All">
                                <div class="question">
                                    <p><strong>PART B: Please answer the following questions carefully.</strong></p>
                                    <ul>
                                        <span>1. At Festina Services, could you choose the specific colleagues who can view the description of the shortcuts you have discovered?</span>
                                        <li><label><input type="radio" id="html" name="question_one" value="Yes"
                                                          required>&nbsp;&nbsp;Yes - I can choose which colleague (or
                                                colleagues) to view the shortcuts I discovered.</label></li>
                                        <li><label><input type="radio" id="html" name="question_one" value="No">&nbsp;&nbsp;No
                                                - If I choose to share the shortcuts I discovered, all my colleagues in
                                                the coding team can see these shortcuts.
                                            </label></li>
                                    </ul>
                                    <br>
                                    <ul>
                                        <span>2. At Festina Services, do the coding team member with lowest performance receives a penalty?</span>
                                        <li><input type="radio" id="Yes" name="question_two" value="Yes" required><label
                                                for="Yes">&nbsp;&nbsp;Yes</label></li>
                                        <li><input type="radio" id="No" name="question_two" value="No"><label for="No">&nbsp;&nbsp;No</label>
                                        </li>
                                    </ul>
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


