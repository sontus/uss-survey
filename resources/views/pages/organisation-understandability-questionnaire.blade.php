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
                                <h6>Your role in organisation – Understandability Questionnaire</h6>
                            </div>
                            <br>
                            <form action="" method="POST">
                                @csrf
                                <div class="question">
                                    <ul style="list-style-type:none;">
                                        <li><p><strong>To test your understanding of your role in Festina, please answer
                                                    the following two questions. </strong></p></li>
                                    </ul>
                                    <ul style="list-style-type:'1.';">
                                        <li>&nbsp;&nbsp;As an employee of Festina Services, you are expected to take
                                            initiatives that only benefits you but do not benefit the organisation.
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_1">
                                        <input type="hidden" name="next_page" value="work-environment">
                                        <input type="hidden" name="current_page" value="26">
                                        <li><input type="radio" id="question_true" value="true" name="question_one"
                                                   required><label for="question_true">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="question_false" value="false"
                                                   name="question_one"><label
                                                for="question_false">&nbsp;&nbsp;False</label></li>

                                    </ul>
                                    <ul style="list-style-type:'2.';">
                                        <li>&nbsp;&nbsp; In total, how many employees work in Festina’s coding team?
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_2">
                                        <li><input type="radio" id="1" value="1" name="question_two" required><label
                                                for="1">&nbsp;&nbsp;1</label></li>
                                        <li><input type="radio" id="2" value="2" name="question_two"><label for="2">&nbsp;&nbsp;2</label>
                                        </li>
                                        <li><input type="radio" id="3" value="3" name="question_two"><label for="3">&nbsp;&nbsp;3</label>
                                        </li>
                                        <li><input type="radio" id="4" value="4" name="question_two"><label for="4">&nbsp;&nbsp;4</label>
                                        </li>
                                        <li><input type="radio" id="5" value="5" name="question_two"><label for="5">&nbsp;&nbsp;5</label>
                                        </li>

                                    </ul>

                                </div>
                                <div class="cm_btn d-flex justify-content-between ">
                                    <a href="{{ route('your-role-in-organisation')}}" type="button"
                                       class="btn pre_btn btn-danger btn-sm">Previous</a>
                                    <a href="{{ route('work-environment')}}"
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
            if (valueForOne === 'false' && valueForTwo === '5') {
                $('.redirectNext')[0].click();
            } else {
                if (valueForOne !== 'false') {
                    questionnaire_1.find('input[name=question_one]:checked').prop("checked", false);
                }
                if (valueForTwo !== '5') {
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


