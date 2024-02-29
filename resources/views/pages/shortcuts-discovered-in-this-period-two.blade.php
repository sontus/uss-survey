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

        .task-two {
            width: 60%;
            border: 2px solid #000;
        }

        .editBtn {
            border: none;
            background-color: green;
            color: #fff;
            padding: 0 15px;
        }

        .editBtn:hover {
            color: rgba(255, 255, 255, 0.44);
        }

        input {
            border-radius: 0;
            border: none;
            outline: none;
        }

        .inputBox {
            border: 1px solid #333;
        }

        .inputBox:nth-child(n+3) {
            border-top: 0;
            border-bottom: 1px solid #333;
            /* background-color: red; */
        }

        .pre_btn {
            margin-left: 15px;
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
            list-style-type: "❑";
            padding: 12px;
            margin: 0px;
        }

        .cm_btn {
            position: absolute;
            bottom: 15px;

            width: 95%;
            /* justify-content: space-between; */
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #d6d6d6;
        }

        .question span {
            margin-right: 6%;
        }

        .text_span span {
            margin-right: 15%;
        }

        .cm_row {
            display: grid;
            grid-template-columns: 3fr 6fr 3fr;
        }

        @media only screen and (max-width: 1030px) {
            .main_card {
                /* border: 2px solid #6f6f6f65; */
                margin: 5px 5px;
                height: 90vh !important;
                width: 100%;

                /* background-color: #fff; */

            }

            .cm_row {
                display: grid;
                grid-template-columns: 12fr;
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
                            <div class="title text-center w-100 mt-5 mb-4">
                                <h5>Shortcuts Discovered in This Period</h5>
                            </div>
                            <br>
                            <form id="shortcutDiscover" action="{{ route('shortcuts-discovered')}}" method="POST"
                                  autocomplete="off">
                                @csrf
                                <input type="hidden" name="next_page" value="production-period-two-result">
                                <div class="question">
                                    <p>Which NEW shortcuts did you discover this period?</p>
                                    <p>If needed, you may use ‘Edit’ button to change your previous answers</p>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-1 text-end d-flex  flex-column">
                                            <span class="">Box</span>
                                            <span class="mb-1">1</span>
                                            <span class="mb-1">2</span>
                                            <span class="mb-1">3</span>
                                            <span class="mb-1">4</span>
                                            <span class="mb-1">5</span>
                                            <span class="mb-1">6</span>
                                        </div>
                                        <div class="col-md-7">
                                    <span>Describe the shortcuts
                                    </span>
                                            <div class="d-flex inputBox">
                                                <input class="w-100" name="box_1" value="{{ $shortcuts->box_1 }}"
                                                       type="text" readonly>
                                                <button type="button" class="editBtn">Edit</button>
                                            </div>

                                            <div class="d-flex inputBox">
                                                <input class="w-100" name="box_2" value="{{ $shortcuts->box_2 }}"
                                                       type="text" readonly>
                                                <button type="button" class="editBtn">Edit</button>
                                            </div>

                                            <div class="d-flex inputBox">
                                                <input class="w-100" name="box_3" value="{{ $shortcuts->box_3 }}"
                                                       type="text" readonly>
                                                <button type="button" class="editBtn">Edit</button>
                                            </div>

                                            <div class="d-flex inputBox">
                                                <input class="w-100" name="box_4" value="{{ $shortcuts->box_4 }}"
                                                       type="text" readonly>
                                                <button type="button" class="editBtn">Edit</button>
                                            </div>

                                            <div class="d-flex inputBox">
                                                <input class="w-100" name="box_5" value="{{ $shortcuts->box_5 }}"
                                                       type="text" readonly>
                                                <button type="button" class="editBtn">Edit</button>
                                            </div>

                                            <div class="d-flex inputBox">
                                                <input class="w-100" name="box_6" value="{{ $shortcuts->box_6 }}"
                                                       type="text" readonly>
                                                <button type="button" class="editBtn">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cm_btn d-flex justify-content-between ">
                                    <a href=""></a>
                                    <button id="viewAnsPage" link="{{route('view-my-answer-sheets-two')}}" type="button"
                                            class="btn pre_btn btn-danger btn-sm resultSheetButton">View My Answer
                                        sheets
                                    </button>
                                    {{-- <a href="{{ route('production-period-two-result')}}" style="padding: 5px 20px 5px 20px;"
                                       type="button" class="btn btn-danger next_btn btn-sm">Next</a> --}}
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
                message = '{{Session::get('timeMessage')}}';
            modalShow(title, message)
            @else
                window.location.href = link;
            @endif
        });

        // edit input
        $('.editBtn').click(function () {
            $('.editBtn').siblings('input').prop('readonly', true);
            $row = $(this);
            $row.siblings('input').prop('readonly', false);
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
            localStorage.removeItem('formValues-2');
        });

        // Function to store form input values in Local Storage
        function storeFormValues() {
            const form = document.querySelector('#shortcutDiscover');

            // Enable disabled fields
            const disabledFields = form.querySelectorAll('input:disabled');
            disabledFields.forEach((field) => field.disabled = false);

            // Create FormData object
            const formData = new FormData(form);

            // Disable fields again
            disabledFields.forEach((field) => field.disabled = true);

            const serializedData = JSON.stringify(Object.fromEntries(formData));
            localStorage.setItem('formValues-2', serializedData);
        }

        // Function to populate form input values from Local Storage
        function populateFormValues() {
            const storedValues = localStorage.getItem('formValues-2');

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


