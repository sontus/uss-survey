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

        ul {
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
                            <div class="title text-center w-100 mt-5 mb-5">
                                <h6>Sharing of knowledge with colleagues - Understandability Questionnaire</h6>
                            </div>
                            <br>

                            <form action="{{ route('sharing-information-with-colleagues-ans-final')}}" method="POST">
                                @csrf
                                <div class="question">
                                    <input type="hidden" name="next_page" value="Post_experimental_questionnaire_two">
                                    <input type="hidden" name="current_page" value="40">
                                    <input type="hidden" name="question_set" value="C and D">
                                    <p>3. Out of four production periods, how many production periods have you
                                        completed?</p>
                                    <ul class="questionnaire_1">
                                        <li><input type="radio" id="1" value="1" name="question_one" required><label
                                                for="1">&nbsp;&nbsp;1</label></li>
                                        <li><input type="radio" id="2" value="2" name="question_one"><label for="2">&nbsp;&nbsp;2</label>
                                        </li>
                                        <li><input type="radio" id="3" value="3" name="question_one"><label for="3">&nbsp;&nbsp;3</label>
                                        </li>
                                        <li><input type="radio" id="4" value="4" name="question_one"><label for="4">&nbsp;&nbsp;4</label>
                                        </li>
                                    </ul>
                                    <p>4. You are the only member in Festina’s coding team who is using the upgraded
                                        software with a feature that can be enabled to allow others to view the
                                        details of the shortcuts you have discovered.</p>
                                    <ul class="questionnaire_2">
                                        <li><input type="radio" id="true" value="true" name="question_two"
                                                   required><label for="true">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="false" value="false" name="question_two"><label
                                                for="false">&nbsp;&nbsp;False</label></li>

                                    </ul>
                                    <p>5. If you enable the new function of the upgraded software, who can view the
                                        details of the shortcuts you have discovered?</p>
                                    <ul class="questionnaire_3">
                                        <li><input type="radio" id="all" value="all"
                                                   name="question_three" required><label for="all">&nbsp;&nbsp;All
                                                members in coding team</label></li>
                                        <li><input type="radio" id="only"
                                                   value="only"
                                                   name="question_three"><label for="only">&nbsp;&nbsp;Only your
                                                selected members in the coding team</label></li>
                                    </ul>
                                </div>
                                <div class="cm_btn d-flex justify-content-between ">
                                    <a href="{{ route('Sharing_of_informationQuestionnaire_five') }}" type="button"
                                       class="btn pre_btn btn-danger btn-sm">Previous</a>
                                    <a href="{{ route('Post_experimental_questionnaire_two')}}"
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
            questionnaire_3 = $('.questionnaire_3'),
            nextButton = $('.next_btn');
        questionnaire_1.find('input').change(function () {
            correctAnsCheck();
        });
        questionnaire_2.find('input').change(function () {
            correctAnsCheck();
        });
        questionnaire_3.find('input').change(function () {
            correctAnsCheck();
        });
        nextButton.click(function () {
            let valueForOne = questionnaire_1.find('input[name=question_one]:checked').val(),
                valueForTwo = questionnaire_2.find('input[name=question_two]:checked').val(),
                valueForThree = questionnaire_3.find('input[name=question_three]:checked').val();
            if (valueForOne === '2' && valueForTwo === 'true' && valueForThree === 'only') {
                $('.redirectNext')[0].click();
            } else {
                if (valueForOne !== '2') {
                    questionnaire_1.find('input[name=question_one]:checked').prop("checked", false);
                }
                if (valueForTwo !== 'true') {
                    questionnaire_2.find('input[name=question_two]:checked').prop("checked", false);
                }
                if (valueForThree !== 'only') {
                    questionnaire_3.find('input[name=question_three]:checked').prop("checked", false);
                }
                let title = '<i class="fa-solid fa-triangle-exclamation text-danger"></i> Warning',
                    message = 'Incorrect answer.';
                modalShow(title, message)
            }
        });

        function correctAnsCheck() {
            if (questionnaire_1.find('input').is(':checked') && questionnaire_2.find('input').is(':checked') && questionnaire_3.find('input').is(':checked')) {
                nextButton.prop('disabled', false);
            }
        }
    </script>
@endpush


