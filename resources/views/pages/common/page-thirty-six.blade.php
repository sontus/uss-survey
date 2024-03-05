@extends('layouts.app')
@section("title","General Information")
@push('vendor-css')

@endpush
@push('page-css')
    <style>
        .main_card {
            margin: 20px 10px;
            height: 90vh;
            width: 100%;
        }

        .cm-container {
            background-color: #eee;
            height: 100vh;
        }

        .question {
            position: relative;
            font-size: 14px;
            margin-left: 5% !important;
        }

        ul {
            list-style-type: "❑";
        }

        .cm_btn {
            position: absolute;
            bottom: 15px;
            width: 95%;
        }

        .flow-chart {
            font-size: 1.1rem;
            margin: 50px 0;
        }

        .flow-chart .flow-chart-figure {
            width: 70%;
            height: 60px;
            display: flex;
            align-items: end;
            margin: 0 20px;
            position: relative;
        }

        .flow-chart .flow-chart-figure:after {
            content: '';
            height: 2px;
            width: 100%;
            background-color: #000;
            position: absolute;
            left: 0;
            top: calc(50% - 10px);
        }

        .flow-chart .flow-chart-figure span {
            width: calc(100% / 4);
            text-align: center;
        }

        .flow-chart .flow-chart-figure span:nth-child(1):before, .flow-chart .flow-chart-figure span:nth-child(2):before, .flow-chart .flow-chart-figure span:nth-child(3):before, .flow-chart .flow-chart-figure span:nth-child(4):before {
            content: '';
            height: 45px;
            width: 2px;
            background-color: #000;
            position: absolute;
            left: 0;
            top: 0;
        }

        .flow-chart .flow-chart-figure span:nth-child(2):before {
            left: calc(100% / 4);
        }

        .flow-chart .flow-chart-figure span:nth-child(3):before {
            left: calc((100% / 4) * 2);
        }

        .flow-chart .flow-chart-figure span:nth-child(4):before {
            left: calc((100% / 4) * 3);
        }
        .flow-chart .flow-chart-figure span:nth-child(4):after {
            content: '';
            height: 45px;
            width: 2px;
            background-color: #000;
            position: absolute;
            right: 0;
            top: 0;
        }

        @media only screen and (max-width: 1030px) {
            .main_card {
                margin: 5px 5px;
                height: 90vh !important;
                width: 100%;
            }

            .question {
                margin-bottom: 50px !important;
                font-size: 12px;
            }

            .cm_btn {
                position: absolute;
                bottom: 15px;
                width: 100%;
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
                            <div class="title text-center w-100 mt-5 mb-5">
                                <h6>Sharing of knowledge with colleagues</h6>
                            </div>
                            <br>
                            <div class="question">
                                <p>Remember in this task there are Four Production periods as shown on the
                                    timeline below.
                                </p>
                                <div class="flow-chart d-flex justify-content-center align-items-center">
                                    <p>START</p>
                                    <div class="flow-chart-figure">
                                        <span>Period ONE</span>
                                        <span>Period TWO</span>
                                        <span>Period THREE</span>
                                        <span>Period FOUR</span>
                                    </div>
                                    <p>END</p>
                                </div>
                                <p class="mb-4">If you discover any shortcuts in the first two periods (ONE and TWO),
                                    you may share it with your colleagues at the end of period TWO, which is the
                                    mid-point of the task. If you do so, they may use this information to learn the
                                    unique shortcut applicable for their clients in period THREE. Once learned, they can
                                    use this knowledge to complete answers for that box in period THREE and FOUR. That
                                    way, they will be able to do their tasks efficiently and hence improve their
                                    performance.
                                </p>
                            </div>
                            <div class="cm_btn d-flex justify-content-end">
                                <a href="{{ route('sharing-of-information-with-colleagues-Understandability-Questionnaire') }}"
                                   style="padding: 5px 20px 5px 20px;" type="button"
                                   class="btn next_btn btn-danger btn-sm">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


