@extends('layouts.app')
@section("title","Compensation Structure Questionnaire")
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

        @media only screen and (max-width: 768px) {
            .main_card {
                /* border: 2px solid #6f6f6f65; */
                margin: 5px 5px;
                height: auto;
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
                                <h6>Compensation Structure - Understandability Questionnaire </h6>
                                <!----page no 32----->
                            </div>
                            <br>
                            <form action="{{ route('compensation-structure-ans')}}" method="POST">
                                @csrf
                                <div class="question">
                                    <ul style="list-style-type:none;">
                                        <li><strong>To test your understanding of the compensation structure, please
                                                answer the following two questions. </strong></li>
                                    </ul>
                                    <ul style="list-style-type:'1.';">
                                        <li>&nbsp;&nbsp;The member who completes the most number of correct answer in
                                            total receives a bonus
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_1">
                                        <li><input type="radio" id="page_3011" value="true" name="question_one"
                                                   required><label for="page_3011">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="page_3012" value="false" name="question_one"><label
                                                for="page_3012">&nbsp;&nbsp;False</label></li>

                                    </ul>
                                    <br>
                                    <ul style="list-style-type:'2.';">
                                        <li>&nbsp;&nbsp;The member who completes the fewest number of correct answer
                                            pays a penalty.
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_2">
                                        <li><input type="radio" id="page_3021" value="true" name="question_two"
                                                   required><label for="page_3021">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="page_3022" value="false" name="question_two"><label
                                                for="page_3022">&nbsp;&nbsp;False</label></li>
                                    </ul>
                                </div>
                                <div class="cm_btn d-flex justify-content-between ">
                                    <a href="{{ route('compensation-structure')}}" type="button"
                                       class="btn pre_btn btn-danger btn-sm">Previous</a>
                                    <a href="{{ route('work-environment-Questionnaire-three')}}"
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
            if (valueForOne === 'true' && valueForTwo === 'false') {
                $('.redirectNext')[0].click();
            } else {
                if (valueForOne !== 'true') {
                    questionnaire_1.find('input[name=question_one]:checked').prop("checked", false);
                }
                if (valueForTwo !== 'false') {
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


