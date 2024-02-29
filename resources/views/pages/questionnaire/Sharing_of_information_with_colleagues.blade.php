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
    </style>
@endpush

@section('content')
    <div class="container-fluid cm-container ">
        <div class="container p-0">
            <div class="row w-100 p-0">
                <div class="col-12 main_card">
                    <div class="card w-100 h-100">
                        <div class="card-body">
                            <div class="title text-center w-100 mt-4 mb-3">
                                <h5>Sharing of knowledge with colleagues</h5>
                            </div>
                            <br>
                            <div class="question">
                                <p>At Festina, the type of work that you and your colleagues in the coding team do (such
                                    as fixing computer error codes) are not exactly the same, but they are similar. This
                                    is because each of you work on different clients. </p>

                                <p style="margin-bottom: -2px">If you find a shortcut – which is an efficient way of
                                    doing the task:</p>

                                <ul>
                                    <li class="mb-2">You can help your colleagues to find shortcuts for their clients by
                                        sharing the descriptions of the shortcuts you have found for your clients.
                                    </li>
                                    <li class="mb-2">If you share the descriptions of shortcuts you have found, they
                                        will not be able to just copy and apply your shortcuts onto their clients since
                                        they do not work on exactly the same clients as yours. They will need to modify
                                        your shortcuts further to make them work on their clients.
                                    </li>
                                    <li>Their performance will only improve when they can identify the unique shortcuts
                                        for their own clients.
                                    </li>
                                    {{-- <li>&nbsp;&nbsp;Their performance will only improve when they can identify the unique shortcuts for their clients.</li> --}}
                                </ul>
                                {{-- <p>However, before your colleagues can benefit from the shortcuts you have discovered, you need to let them view the work you have done. You can do this by allowing them to view the answer sheets you have completed in your most recently completed production period. </p>
                                <p>For example, if you have discovered a shortcut in production period TWO to complete answers for a particular box, to allow your colleagues to learn it from you, you will have to share your answer sheets for that shortcut at the end of the period TWO. </p>
                                <p>If you do so, they may use this answer sheet in production period THREE to learn the shortcut applicable for their task. Once learned, they can use this knowledge to complete answers for that box in period THREE and FOUR. That way, they will be able to do their tasks efficiently and hence improve their performance. </p> --}}
                                <p>In this task, if you discover a shortcut in production period TWO to complete answers
                                    for a particular box, you may share the shortcut you have found with your colleagues
                                    in the coding team at the end of production period TWO. If you do so, they may use
                                    this information to learn the unique shortcut applicable for their clients in period
                                    THREE. Once learned, they can use this knowledge to complete answers for that box in
                                    period THREE and FOUR. That way, they will be able to do their tasks efficiently and
                                    hence improve their performance.</p>

                            </div>
                            <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                <a href="{{ route('sharing-of-information-with-colleagues-Understandability-Questionnaire') }}"
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


