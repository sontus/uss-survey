@extends('layouts.app')
@section("title","The Task")
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

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
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

            .cm_row {
                display: grid;
                grid-template-columns: 12fr;
            }

            img {

                width: 60%;
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
                            <div class="title text-center w-100 mt-2 mb-2">
                                <h5>The Task</h5>
                            </div>
                            <br>
                            <div class="question">
                                <p>Several boxes of random letters are placed together on each page of your computer
                                    screen. There are 20 pages in total. The page numbers are located at the top of each
                                    page. You can navigate through the pages by clicking on the arrow buttons placed
                                    next to the page numbers. </p>
                                <p>An example of a page is provided below. In this example, 6 boxes of random letters
                                    are placed on page number 1. To navigate other pages, you will need to click on the
                                    “&lt;Previous Page” and “Next Page&gt;” buttons at the top.</p>

                                <img class="img-fluid" src="{{ asset('assets/images/task-two.png')}}" alt="task-three">

                            </div>
                            <div class="cm_btn d-flex justify-content-between ">
                                <a href="{{ route('task-one')}}" type="button" class="btn pre_btn btn-danger btn-sm">Previous</a>
                                <a href="{{ route('task-three')}}" style="padding: 5px 20px 5px 20px;" type="button"
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


