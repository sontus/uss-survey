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
            width: 45%;
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

                width: 53%;
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
                                <h5>Task Understandability Questionnaire </h5>
                            </div>
                            <br>
                            <div class="question">
                                <p>4. Let’s assume box 3 of page 5 contains 14 search letter “F”. In which cell would
                                    you record your answer?</p>

                                <span class="understandability">
                                    <label>
                                        <input type="radio" value="cellA" name="understandability">
                                        Cell A
                                    </label>

                                    <label>
                                         <input class="cell" value="cellB" type="radio" name="understandability">
                                        Cell B
                                    </label>

                                    <label>
                                        <input class="cell" value="cellC" type="radio" name="understandability">
                                        Cell C
                                    </label>

                                    <label>
                                        <input class="cell" value="cellD" type="radio" name="understandability">
                                        Cell D
                                    </label>
                                </span>

                                <img class="img-fluid mt-3" src="{{ asset('assets/images/Questionnaire-four.png')}}"
                                     alt="task-three">

                            </div>
                            <div class="cm_btn d-flex justify-content-between ">
                                <a href="{{ route('task-understandability-questionnaire-three')}}" type="button"
                                   class="btn pre_btn btn-danger btn-sm">Previous</a>
                                <a href="{{ route('preliminary-period-text')}}"
                                   class="redirectNext"></a>
                                <button style="padding: 5px 20px 5px 20px;" type="button"
                                        class="btn btn-danger next_btn btn-sm nextButton" disabled>Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.modal')
@endsection

@push('vendor-js')

@endpush
@push('page-js')
    <script>
        $('.understandability').find('input').change(function () {
            $('.nextButton').prop('disabled', false);
        })
        $('.nextButton').click(function (e) {
            e.preventDefault();
            let value = $('.understandability').find('input[name=understandability]:checked').val();
            if (value !== 'cellC') {
                let title = '<i class="fa-solid fa-triangle-exclamation text-danger"></i> Warning',
                    message = 'To find the correct cell to record you answer, look at the box numbers listed at the top row and page numbers listed on the left column. You need to find the column for box number 3 and then scroll down to the row for page number 5.';
                modalShow(title, message)
            } else {
                $('.redirectNext')[0].click();
            }
        })

    </script>
@endpush


