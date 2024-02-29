@extends('layouts.app')
@section("title","Your role in organisation")
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

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }

        .cell {
            margin-left: 40px;

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

            .cell {
                margin-left: 20px;

            }

            .cm_row {
                display: grid;
                grid-template-columns: 12fr;
            }

            img {

                width: 40%;
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
                            <div class="title text-center w-100 mt-4 mb-4">
                                <h5>Your role in organisation </h5>
                            </div>
                            <br>
                            <div class="question">

                                <img class="img-fluid" src="{{ asset('assets/images/organisation.png')}}"
                                     alt="task-three"><br>
                                <p>Imagine that you work as an employee of an organisation called ‘Festina Services’.
                                    Festina is a tech support centre that helps clients to fix computer problems. In
                                    past few months there has been an increase in demands for the services that Festina
                                    provides to its clients due to the rapid growth of cybercrimes worldwide. In
                                    response to this high demand of Festina’s services, the senior management of the
                                    organisation has set up a goal of increasing the company’s share in the global
                                    market. The organisation wants to do so by offering the best level of services to
                                    its clients. All employees in Festina are now expected to take initiatives that
                                    benefit the organisation. The tasks that you will do in this experiment represents
                                    what Festina does for fixing computer error codes for its clients.</p>
                                <br>
                                <p>There are two phases of this experiment. In the first phase, you will be introduced
                                    to the task that you do as an employee of Festina. In the second phase, you will
                                    answer a few questions related to your work at Festina.  </p>
                            </div>
                            <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                <a href="{{ route('introduction-to-phase-one')}}" style="padding: 5px 20px 5px 20px;"
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

@endpush


