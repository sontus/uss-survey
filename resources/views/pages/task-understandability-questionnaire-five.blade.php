@extends('layouts.app')
@section("title","Task Understandability Questionnaire")
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
                                <h5>Task Understandability Questionnaire </h5>
                            </div>
                            <br>
                            <form action="" method="POST">
                                @csrf
                                <div class="question">
                                    <p><strong>To test your understanding of the shortcuts please answer the following
                                            two questions.</strong></p>
                                    <ul style="list-style-type:'1.';">
                                        <li>&nbsp;&nbsp;Within each production period, the same shortcuts are used on
                                            each new page of boxes and they will be placed in the same location on each
                                            page.
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_1">
                                        <li><input type="radio" id="html" value="true" name="question_one"
                                                   required><label for="html">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="false" value="false" name="question_one"><label
                                                for="false">&nbsp;&nbsp;False</label></li>
                                    </ul>
                                    <ul style="list-style-type:'2.';">
                                        <li>&nbsp;&nbsp;The same shortcuts will be used at the same location at each
                                            production period.
                                        </li>
                                    </ul>
                                    <ul class="sq_ul questionnaire_2">
                                        <li><input type="radio" id="question_true" value="true" name="question_two"
                                                   required><label for="question_true">&nbsp;&nbsp;True</label></li>
                                        <li><input type="radio" id="question_false" value="false"
                                                   name="question_two"><label
                                                for="question_false">&nbsp;&nbsp;False</label></li>
                                    </ul>


                                </div>
                                <div class="cm_btn d-flex justify-content-between ">
                                    {{-- <a href="{{ route('task-information')}}" type="button"
                                       class="btn pre_btn btn-danger btn-sm">Previous</a> --}}
                                    <a href="{{ route('production-period-text')}}"
                                       class="redirectNext"></a>
                                    <button style="padding: 5px 20px 5px 20px;" type="button"
                                            class="btn btn-danger next_btn btn-sm" disabled>Next
                                    </button>
                                </div>
                            </form>

                        </div>
                        <br>
                        {{-- <form action="{{ route('task-information-answer')}}" method="POST">
                            @csrf
                            <div class="question">
                                <p> <strong>To test your understanding of the shortcuts please answer the following two questions.</strong> </p>
                                <ul style="list-style-type:'1.';">
                                <li>&nbsp;&nbsp;Within each production period, the same shortcuts are used on each new page of boxes and they will be placed in the same location on each page.</li>
                                </ul>
                                <ul class="sq_ul">
                                    <input type="hidden" name="next_page" value="production-period-text">
                                    <input type="hidden" name="current_page" value="14">
                                    <li><input type="radio" id="html" value="true" name="question_one" required><label for="html">&nbsp;&nbsp;True</label></li>
                                    <li><input type="radio" id="false" value="false" name="question_one"><label for="false">&nbsp;&nbsp;False</label></li>
                                </ul>
                                <ul style="list-style-type:'2.';">
                                    <li>&nbsp;&nbsp;The same shortcuts will be used at the same location at each production period.</li>
                                </ul>
                                <ul class="sq_ul">
                                    <li><input type="radio" id="question_true" value="true" name="question_two" required><label for="question_true">&nbsp;&nbsp;True</label></li>
                                    <li><input type="radio" id="question_false" value="false" name="question_two" ><label for="question_false">&nbsp;&nbsp;False</label></li>
                                </ul>



                            </div>
                            <div class="cm_btn d-flex justify-content-between ">
                                <a href="{{ route('task-information')}}" type="button" class="btn pre_btn btn-danger btn-sm">Previous</a>
                                <a href="{{ route('production-period-text')}}" style="padding: 5px 20px 5px 20px;" type="button" class="btn btn-danger next_btn btn-sm nextButton" disabled>Next</a>
                                <button style="padding: 5px 20px 5px 20px;" type="submit" class="btn btn-danger next_btn btn-sm">Next</button>
                            </div>
                        </form> --}}

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
            if (valueForOne === 'true' && valueForTwo === 'true') {
                $('.redirectNext')[0].click();
            } else {
                if (valueForOne !== 'true') {
                    questionnaire_1.find('input[name=question_one]:checked').prop("checked", false);
                }
                if (valueForTwo !== 'true') {
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


