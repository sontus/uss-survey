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
                                <h5>Sharing of knowledge with colleagues - Understandability Questionnaire</h5>
                            </div>
                            <form action="" method="POST">
                                @csrf
                                <div class="question">
                                    <ul style="list-style-type:none;">
                                        <li><p><strong>To test your understanding of options to share knowledge with
                                                    colleagues, please answer the following three questions.</strong>
                                            </p>
                                        </li>
                                    </ul>
                                    <ul style="list-style-type:'1.';">
                                        <li>The tasks that you and your colleagues perform are exactly the same, so they
                                            can simply copy your shortcuts to complete their tasks.
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_1">
                                        <li><input type="radio" id="question_one" value="true" name="question_one"
                                                   required><label for="question_one">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="question_one1" value="false"
                                                   name="question_one"><label
                                                for="question_one1">&nbsp;&nbsp;False</label></li>
                                    </ul>
                                    <ul style="list-style-type:'2.';">
                                        <li>&nbsp;&nbsp; If your colleagues can view the details of shortcuts you
                                            have identified, this knowledge will help them to identify shortcuts for
                                            their clients.
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_2">
                                        <li><input type="radio" id="question_two" value="true" name="question_two"
                                                   required><label for="question_two">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="question_two1" value="false"
                                                   name="question_two"><label
                                                for="question_two1">&nbsp;&nbsp;False</label></li>
                                    </ul>

                                    <ul style="list-style-type:'3.';">
                                        <li>&nbsp;&nbsp;Your colleagues can learn from the shortcuts you have identified
                                            only if you allow them to view the details of your shortcuts.
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_3">
                                        <li><input type="radio" id="question_three" value="true" name="question_three"
                                                   required><label for="question_three">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="question_three1" value="false"
                                                   name="question_three"><label
                                                for="question_three1">&nbsp;&nbsp;False</label></li>
                                    </ul>

                                </div>

                                {{-- Finding next route --}}
                                @php
                                    $nextRoute = "page-forty-five";
                                    $version = checkversion();
                                    if($version == 'A' || $version == 'B') $nextRoute = "options_to_share_information_with_colleagues_two";
                                    else if ($version == 'C' || $version == 'D') $nextRoute = "options_to_share_information_with_colleagues_four";
                                @endphp
                                <div class="cm_btn d-flex justify-content-between ">
                                    <a href="{{ route('sharing-of-information-with-colleagues') }}" type="button"
                                       class="btn pre_btn btn-danger btn-sm">Previous</a>
                                    <a href="{{ route($nextRoute)}}"
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
            if (valueForOne === 'false' && valueForTwo === 'true' && valueForThree === 'true') {
                $('.redirectNext')[0].click();
            } else {
                if (valueForOne !== 'false') {
                    questionnaire_1.find('input[name=question_one]:checked').prop("checked", false);
                }
                if (valueForTwo !== 'true') {
                    questionnaire_2.find('input[name=question_two]:checked').prop("checked", false);
                }
                if (valueForThree !== 'true') {
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


