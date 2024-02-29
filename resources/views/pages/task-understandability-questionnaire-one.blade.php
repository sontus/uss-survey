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
            width: 55%;
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

                width: 54%;
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
                            <div class="question d-block">
                                <p><strong>To demonstrate your understanding of the task, please answer the following
                                        questions. </strong></p>
                                <div>
                                    <p> 1. If you wish to move to the page number 6 from the page shown below, which
                                        button
                                        would you click?</p>
                                    <div class="understandability " style="padding-left: 35px">
                                        <label>
                                            <input type="radio" name="understandability" value="previewButton">
                                            ‘Previous Page’ button
                                        </label> <br>
                                        <label>
                                            <input type="radio" name="understandability" value="nextButton">
                                            ‘Next Page’ button
                                        </label>
                                    </div>
                                </div>

                                <img class="img-fluid" src="{{ asset('assets/images/Questionnaire_one.png')}}"
                                     alt="task-three">

                            </div>
                            <div class="cm_btn d-flex justify-content-between ">
                                <a href="{{ route('task-three')}}" type="button" class="btn pre_btn btn-danger btn-sm">Previous</a>
                                <a href="{{ route('task-understandability-questionnaire-two')}}"
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
            if (value === 'nextButton') {
                let title = '<i class="fa-solid fa-triangle-exclamation text-danger"></i> Warning',
                    message = 'To find the correct button, you need to notice the page number of your current page. In this example, you are currently on page 7 as shown in the top centre of your screen. Therefore to move to page number 6, you need to click on ‘Previous Page’ button.';
                modalShow(title, message)
            } else {
                $('.redirectNext')[0].click();
            }
        })

    </script>
@endpush


