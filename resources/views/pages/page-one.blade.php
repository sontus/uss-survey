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
                                <h5>General Information</h5>
                            </div>
                            <br>
                            <div class="question">
                                <p>Thank you for agreeing to participate in this experiment.</p>

                                <p>The experiment will last for approximately for 60 minutes. Your performance will
                                    determine the compensation that you will receive. Your compensation will be paid to
                                    you at the end of the experiment.</p>
                                <br>
                                <p>The experiment will be carried out exactly as described in these instructions, with
                                    no deception of any form. No one will be able to associate your responses in today’s
                                    experiment to you personally. To ensure control is maintained over this experiment,
                                    please refrain from any comments or communication about this study with others who
                                    might be participating in future sessions.</p>
                                <br>
                                <p>Further instructions will be provided on the next screen. Click on the ‘Next’ button
                                    to continue.</p>
                            </div>
                            <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                <a href="{{ route('new-your-role-org')}}" style="padding: 5px 20px 5px 20px;"
                                   type="button" class="btn btn-danger next_btn btn-sm">Next</a>
                                {{-- <a href="{{ route('introduction-to-phase-one')}}"  style="padding: 5px 20px 5px 20px;" type="button" class="btn btn-danger next_btn btn-sm">Next</a> --}}
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


