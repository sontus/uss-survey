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
        }

        .sq_ul {
            list-style-type: none;

        }

        .cm_btn {
            position: absolute;
            bottom: 15px;

            width: 95%;
            /* justify-content: space-between; */
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
                /* margin-left:20px;  */
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
                            <div class="title text-center w-100 mt-5 mb-1">
                                <h6>Work environment - Understandability Questionnaire</h6> <!----page no 32----->
                            </div>
                            <br>
                            <form action="" method="POST">
                                @csrf


                                <div class="question">
                                    <ul style="list-style-type:none;">
                                        <li><strong>To test your understanding of the work environment in Festina’s
                                                coding team, please answer the following questions.</strong></li>
                                    </ul>
                                    <ul style="list-style-type:'1.';">
                                        <li>&nbsp;&nbsp;In total, how many employees work in Festina’s coding team?</li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_1_fix mb-3">
                                        <input type="hidden" name="current_page" value="28">

                                        <li><input type="radio" id="question_one_fix" value="1" name="question_one_fix"
                                                   required><label for="question_one_fix">&nbsp;&nbsp;1</label></li>

                                        <li><input type="radio" id="question_one_fix1" value="2" name="question_one_fix"
                                                   required><label for="question_one_fix1">&nbsp;&nbsp;2</label></li>

                                        <li><input type="radio" id="question_one_fix2" value="3" name="question_one_fix"
                                                   required><label for="question_one_fix2">&nbsp;&nbsp;3</label></li>

                                        <li><input type="radio" id="question_one_fix3" value="4" name="question_one_fix"
                                                   required><label for="question_one_fix3">&nbsp;&nbsp;4</label></li>

                                        <li><input type="radio" id="question_one_fix4" value="5" name="question_one_fix"
                                                   required><label for="question_one_fix4">&nbsp;&nbsp;5</label></li>

                                    </ul>
                                    {{-- <br> --}}
                                    <ul style="list-style-type:'2.';">
                                        <li>&nbsp;&nbsp;You never meet your other colleagues who work in Festina’s
                                            coding team.
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_1 mb-3">
                                        <li><input type="radio" id="question_one" value="true" name="question_one"
                                                   required><label for="question_one">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="page_2812" value="false" name="question_one"><label
                                                for="page_2812">&nbsp;&nbsp;False</label></li>

                                    </ul>
                                    {{-- <br> --}}
                                    <ul style="list-style-type:'3.';">
                                        <li>&nbsp;&nbsp;At Festina, you know who your colleagues are in the coding
                                            team.
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_2">
                                        <li><input type="radio" id="page_2821" value="true" name="question_two"
                                                   required><label for="page_2821">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="page_2822" value="false" name="question_two"><label
                                                for="page_2822">&nbsp;&nbsp;False</label></li>


                                    </ul>

                                </div>

                                @php
                                    $nextRoute = "work-environment-Questionnaire-three";
                                    if (checkVersion() == "A" || checkVersion() =="C")
                                        $nextRoute = "compensation-structure";
                                    elseif(checkVersion() == "B" || checkVersion() =="D")
                                        $nextRoute = "compensation-structure-two";
                                @endphp

                                <div class="cm_btn d-flex justify-content-between ">
                                    <a href="{{ route('work-environment')}}" type="button"
                                       class="btn pre_btn btn-danger btn-sm">Previous</a>
                                    <a href="{{ route($nextRoute)}}" class="redirectNext"></a>
                                    <button style="padding: 5px 20px 5px 20px;" type="button"
                                            class="btn btn-danger next_btn btn-sm" disabled>Next
                                    </button>
                                </div>
                            </form>
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
        var questionnaire_1 = $('.questionnaire_1'),
            questionnaire_2 = $('.questionnaire_2'),
            questionnaire_1_fix = $('.questionnaire_1_fix'),
            nextButton = $('.next_btn');
        questionnaire_1_fix.find('input').change(function () {
            correctAnsCheck();
        });
        questionnaire_1.find('input').change(function () {
            correctAnsCheck();
        });
        questionnaire_2.find('input').change(function () {
            correctAnsCheck();
        });
        nextButton.click(function () {
            let valueForOne = questionnaire_1.find('input[name=question_one]:checked').val(),
                valueForTwo = questionnaire_2.find('input[name=question_two]:checked').val(),
                valueForOneFix = questionnaire_1_fix.find('input[name=question_one_fix]:checked').val();
            if (valueForOneFix === '5' && valueForOne === 'false' && valueForTwo === 'true') {
                $('.redirectNext')[0].click();
            } else {
                if (valueForOne !== 'false') {
                    questionnaire_1.find('input[name=question_one]:checked').prop("checked", false);
                }
                if (valueForTwo !== 'true') {
                    questionnaire_2.find('input[name=question_two]:checked').prop("checked", false);
                }
                if (valueForOneFix !== '5') {
                    questionnaire_1_fix.find('input[name=question_one_fix]:checked').prop("checked", false);
                }
                let title = '<i class="fa-solid fa-triangle-exclamation text-danger"></i> Warning',
                    message = 'Incorrect answer.';
                modalShow(title, message)
            }
        });

        function correctAnsCheck() {
            if (questionnaire_1_fix.find('input').is(':checked') && questionnaire_1.find('input').is(':checked') && questionnaire_2.find('input').is(':checked')) {
                nextButton.prop('disabled', false);
            }
        }
    </script>
@endpush


