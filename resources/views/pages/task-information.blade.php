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
            list-style-type: square;
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
                                <h5>Task Information</h5>
                            </div>
                            <br>
                            <div class="question">
                                <p>You will now work on two Production Periods of the task, which are similar to the
                                    Preliminary Period you have completed. </p>
                                <p>Before you continue, please note that there are <u>TWO ways</u> to search for the
                                    answer for each box.</p>
                                <p><strong style="font-size:16px">FIRST</strong>, you can count the number of times each
                                    search letter appears in its corresponding box of letters.</p>
                                <p><strong style="font-size:16px">SECOND</strong>, you can identify “shortcuts”. On EACH
                                    PAGE of 6 boxes there are 6 shortcuts. Shortcuts include patterns in a particular
                                    box across the pages and/or patterns across boxes within a single page which will
                                    help identify the answer. </p>

                                <ul style="padding-left: 30px">
                                    <li>The SAME shortcuts are used on EACH new page of boxes and they will be placed in
                                        the SAME LOCATION. So, for example if you identify the shortcut for the first
                                        box on the first page, the SAME shortcut will apply to the first box on EACH
                                        subsequent page.
                                    </li>
                                    <li>Also, the SAME shortcuts will be used in EACH production period in the SAME
                                        LOCATION. Once you discover a shortcut in one production period, you will be
                                        able to use it repeatedly throughout the remaining production periods.
                                    </li>
                                </ul>
                                <p>You are free to choose either strategy for determining the correct answers EACH
                                    period. While counting is a reliable way to complete the task, it will take more
                                    time than using the shortcuts once they have been discovered. Shortcuts, on the
                                    other hand, will initially take time to discover but will allow you to determine the
                                    correct answers much faster. </p>
                            </div>
                            <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                <a href="{{ route('task-understandability-questionnaire-five')}}"
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


