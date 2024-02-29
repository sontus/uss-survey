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
                            <div class="title text-center w-100 mt-5 mb-4">
                                <h6>Sharing of knowledge with colleagues - Understandability Questionnaire</h6>
                            </div>
                            <br>
                            <form action="{{ route('sharing-information-with-colleagues-ans')}}" method="POST">
                                @csrf
                                <div class="question">
                                    <input type="hidden" name="next_page"
                                           value="sharing_of_information_with_colleagues_Understandability_Questionnaire_four">
                                    <input type="hidden" name="current_page" value="37">

                                    <ul style="list-style-type:none;">
                                        <li><p><strong>To test your understanding of ways to share knowledge with
                                                    colleagues, please answer the following four questions.</strong></p>
                                        </li>
                                    </ul>
                                    <ul style="list-style-type:'1.';">
                                        <li>What is your current rank in Festina’s coding team based on your
                                            performance?
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_1">
                                        <li>
                                            <label><input type="radio" id="1" name="question_one" value="1" required>
                                                1<sup>st</sup></label>
                                        </li>
                                        <li>
                                            <label><input type="radio" id="2" name="question_one" value="2">
                                                2<sup>nd</sup></label>
                                        </li>
                                        <li>
                                            <label><input type="radio" id="3" name="question_one" value="3">
                                                3<sup>rd</sup></label>
                                        </li>
                                        <li>
                                            <label><input type="radio" id="4" name="question_one" value="4">
                                                4<sup>th</sup></label>
                                        </li>
                                        <li>
                                            <label><input type="radio" id="5" name="question_one" value="5">
                                                5<sup>th</sup></label>
                                        </li>
                                    </ul>
                                    <ul style="list-style-type:'2.';">
                                        <li> Out of six shortcuts, how many shortcuts you have discovered so
                                            far?
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_2">
                                        <li>
                                            <label><input type="radio" id="html" name="question_two" value="0" required>
                                                0</label>
                                        </li>
                                        <li>
                                            <label><input type="radio" id="4" name="question_two" value="4"> 4</label>
                                        </li>
                                        <li>
                                            <label><input type="radio" id="5" name="question_two" value="5"> 5</label>
                                        </li>
                                        <li>
                                            <label><input type="radio" id="6" name="question_two" value="6"> 6</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cm_btn d-flex justify-content-between ">
                                    <a href="{{ url('/options_to_share_information_with_colleagues_two') }}"
                                       type="button" class="btn pre_btn btn-danger btn-sm">Previous</a>
                                    <a href="{{ route('sharing_of_information_with_colleagues_Understandability_Questionnaire_four')}}"
                                       class="redirectNext"></a>
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
            nextButton = $('.next_btn');
        questionnaire_1.find('input').change(function () {
            correctAnsCheck();
        });
        questionnaire_2.find('input').change(function () {
            correctAnsCheck();
        });
        nextButton.click(function () {
            let valueForOne = questionnaire_1.find('input[name=question_one]:checked').val(),
                valueForTwo = questionnaire_2.find('input[name=question_two]:checked').val();
            if (valueForOne === '1' && valueForTwo === '4') {
                $('.redirectNext')[0].click();
            } else {
                if (valueForOne !== '1') {
                    questionnaire_1.find('input[name=question_one]:checked').prop("checked", false);
                }
                if (valueForTwo !== '4') {
                    questionnaire_2.find('input[name=question_two]:checked').prop("checked", false);
                }
                let title = '<i class="fa-solid fa-triangle-exclamation text-danger"></i> Warning',
                    message = 'Incorrect answer.';
                modalShow(title, message)
            }
        });

        function correctAnsCheck() {
            if (questionnaire_1.find('input').is(':checked') && questionnaire_2.find('input').is(':checked')) {
                nextButton.prop('disabled', false);
            }
        }
    </script>
@endpush


