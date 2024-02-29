@extends('layouts.app')
@section('title', 'Shortcuts Discovered in This Period')
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
                            <form id="shortcutDiscover" action="{{ route('shortcuts-discovered') }}" method="POST"
                                  autocomplete="off">
                                @csrf
                                <input type="hidden" name="next_page" value="production-period-one-result">
                                <div class="title text-center w-100 mt-5 mb-5">
                                    <h6>Shortcuts Discovered in This Period</h6>
                                    <!----page no 32----->
                                </div>
                                <br>
                                <div class="question">
                                    <p>It is important for us to know exactly which shortcuts you discovered DURING the
                                        experiment
                                    </p>
                                    <p>Please describe the shortcuts you discovered below. You may click on the ‘View My
                                        Answer Sheets’ button to view your recently completed answer sheet if required.
                                        You can spend maximum of 1 minute time for viewing your answer sheet.
                                    </p>
                                    <p>For any shortcut you did not discover during the experiment, please leave the
                                        line blank.</p>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-1 text-end d-flex  flex-column">
                                            <span class="">Box</span>
                                            <span class="mb-2">1</span>
                                            <span class="mb-2">2</span>
                                            <span class="mb-1">3</span>
                                            <span class="mb-2">4</span>
                                            <span class="mb-1">5</span>
                                            <span class="mb-2">6</span>
                                        </div>
                                        <div class="col-md-7">
                                            <span>Describe the shortcuts
                                            </span>
                                            <input class="w-100" name="box_1" type="text">
                                            <input class="w-100" name="box_2" type="text">
                                            <input class="w-100" name="box_3" type="text">
                                            <input class="w-100" name="box_4" type="text">
                                            <input class="w-100" name="box_5" type="text">
                                            <input class="w-100" name="box_6" type="text">

                                        </div>
                                    </div>

                                </div>
                                <div class="cm_btn d-flex justify-content-between ">
                                    <a href=""></a>
                                    <button id="viewAnsPage" link="{{ route('view-my-answer-sheets') }}" type="button"
                                            class="btn pre_btn btn-danger btn-sm resultSheetButton">View My Answer
                                        sheets
                                    </button>
                                    <button id="formSubmitBtn" type="submit" style="padding: 5px 20px 5px 20px;"
                                            class="btn btn-danger next_btn btn-sm">Next
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
        // function modal call
        $('.resultSheetButton').click(function () {
            let link = $(this).attr('link');
            @if (Session::has('timeMessage'))
            let title = '<i class="fa-solid fa-triangle-exclamation text-danger"></i> Warning',
                message = '{{ Session::get('timeMessage') }}';
            modalShow(title, message)
            @else
                window.location.href = link;
            @endif

        });
    </script>

    <script>

        // Event listener for when the user leaves Page
        // Event listener for when the user navigates to Page
        document.querySelector('#viewAnsPage').addEventListener('click', function () {
            storeFormValues();
        });

        // Event listener for when the page loads
        window.addEventListener('DOMContentLoaded', function () {
            populateFormValues();
        });

        // Delete from storage when form submit
        let viewButton = document.querySelector('#formSubmitBtn');
        viewButton.addEventListener('click', function () {
            localStorage.removeItem('formValues');
        });

        // Function to store form input values in Local Storage
        function storeFormValues() {
            const form = document.querySelector('#shortcutDiscover');
            // console.log(form)
            const formData = new FormData(form);
            const serializedData = JSON.stringify(Object.fromEntries(formData));
            localStorage.setItem('formValues', serializedData);
        }

        // Function to populate form input values from Local Storage
        function populateFormValues() {
            const storedValues = localStorage.getItem('formValues');

            if (storedValues) {
                const formValues = JSON.parse(storedValues);
                // const form2 = document.querySelector('#shortcutDiscover');
                Object.entries(formValues).forEach(([name, value]) => {
                    let query = `input[name="${name}"]`;
                    const inputField = document.querySelector(query);
                    if (inputField) {
                        if (inputField.type === 'checkbox') {
                            inputField.checked = value;
                        } else if (inputField.type === 'radio') {
                            inputField.checked = value;
                        } else {
                            inputField.value = value;
                        }
                    }
                });
            }
        }
    </script>
@endpush
