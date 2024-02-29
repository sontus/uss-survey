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
            margin-left: 25px;
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

        .question span {
            margin-right: 10%;
        }

        .text_span span {
            margin-right: 24%;
        }

        @media only screen and (max-width: 1030px) {
            .main_card {
                /* border: 2px solid #6f6f6f65; */
                margin: 5px 5px;
                height: 90vh !important;
                width: 100%;

                /* background-color: #fff; */

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

        input[type="radio"] {
            /* Add if not using autoprefixer */
            -webkit-appearance: none;
            appearance: none;
            /* For iOS < 15 to remove gradient background */
            background-color: #d23d3d;
            /* Not removed via appearance */
            margin: 0;

        }

        input[type="radio"]:checked + label {
            color: rgb(250, 246, 246);
            transition: all 500ms;
            background: rgb(31, 148, 243);
        }

        label {
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
                            <div class="title text-center w-100 mt-5 mb-5">
                                <h6>Work environment - Questionnaire</h6>   <!----page no 33----->
                            </div>
                            <br>
                            <form action="{{ route('work-environment-ans-final')}}" method="POST">
                                @csrf

                                <div class="question">
                                    <p>To what extend do you consider that the other members in the coding team is your
                                        teammate?</p>
                                    <br>
                                    <input type="hidden" name="next_page"
                                           value="sharing-of-information-with-colleagues">
                                    <input type="hidden" name="current_page" value="34">
                                    <div class="d-flex justify-content-between">
                                    <span><input type="radio" id="one" name="teammate" value="1">
                                    <label for="one">1</label></span>
                                    <span><input type="radio" id="two" name="teammate" value="2">
                                    <label for="two">2</label></span>
                                    <span><input type="radio" id="three" name="teammate" value="3">
                                    <label for="three">3</label></span>
                                    <span><input type="radio" id="four" name="teammate" value="4">
                                    <label for="four">4</label></span>
                                    <span><input type="radio" id="five" name="teammate" value="5">
                                    <label for="five">5</label></span>
                                    <span><input type="radio" id="six" name="teammate" value="6">
                                    <label for="six">6</label></span>
                                    <span><input type="radio" id="seven" name="teammate" value="7">
                                    <label for="seven">7</label></span>
                                    </div>
                                    <input type="submit" value="Submit" hidden>

                                    <div class="d-flex justify-content-between">
                                        <div class="col-md-4 me-3">(not at all)</div>
                                        <div class="col-md-4 me-2">(To a moderate extent)</div>
                                        <div class="col-md-4 text-center">(To a great extent)</div>
                                    </div>

                                </div>
                                <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                    <button style="padding: 5px 20px 5px 20px;" type="submit"
                                            class="btn btn-danger next_btn btn-sm" disabled>Next
                                    </button>
                                    {{-- <a href="{{ route('Sharing-of-information-with-colleagues') }}" style="padding: 5px 20px 5px 20px;" type="button" class="btn btn-danger next_btn btn-sm">Next</a> --}}
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
    <script>
        var question = $('.question');
        question.find('input').change(function () {
            correctAnsCheck();
        });

        function correctAnsCheck() {
            if (question.find('input').is(':checked')) {
                $('.next_btn').prop('disabled', false);
            }
        }
    </script>
@endpush


