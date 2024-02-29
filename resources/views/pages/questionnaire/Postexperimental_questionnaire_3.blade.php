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
            margin-left: 15px;
        }

        .cm-container {
            background-color: #eee;
            height: 100vh;
        }

        .question {
            position: relative;
            font-size: 14px;
            margin-left: 10% !important;
            margin-right: 10%;
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
            font-weight: 600;
        }

        td, th {

            text-align: left !important;
            padding: 8px;
            font-weight: 600;
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
                            <div class="title text-center mt-4 mb-4">
                                <h5>Post experimental questionnaire</h5>
                            </div>
                            <br>
                            <p class="me-3 ms-5">2. How many shortcuts are you willing to share with each colleague?
                            </p>

                            <form action="{{ route('post-experimental-main-three')}}" method="POST">
                                @csrf
                                {{-- <input type="hidden" name="next_page" value="Post_experimental_questionnaire_four"> --}}
                                <input type="hidden" name="next_page" value="page-forty-five">
                                <input type="hidden" name="current_page" value="44">
                                <input type="hidden" name="question_set" value="C and D">
                                <input type="hidden" name="question_part" value="A">
                                <div class="question">
                                    <br>
                                    <div class="w-100">
                                        <table class=" table-sm mb-1" style="border-top: 1px solid #000">
                                            <tr style="border-bottom: 1px solid #000;">
                                                <th style="border-right: 1px solid #000;">Current rank of Festina’s
                                                    coding team members
                                                </th>
                                                <th>Only your chosen colleagues will view the details for the number of shortcuts that you
                                                    select below.
                                                </th>
                                            </tr>
                                            <tr>
                                                <td style="border-right: 1px solid #000;">You are ranked 1<sup>st</sup>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td style="border-right: 1px solid #000;">Colleague who is ranked 2<sup>nd</sup>
                                                </td>
                                                <td>
                                                    <label><input type="radio" value="0 shortcuts" id="vehicle0" name="question_three_1" required> 0 shortcut</label>
                                                    <label><input type="radio" value="1 shortcuts" id="vehicle1" name="question_three_1" required> 1 shortcut</label>
                                                    <label><input type="radio" value="2 shortcuts" id="vehicle2"
                                                                  name="question_three_1"> 2 shortcuts</label>
                                                    <label> <input type="radio" value="3 shortcuts" id="vehicle3"
                                                                   name="question_three_1"> 3 shortcuts</label>
                                                    <label> <input type="radio" value="4 shortcuts" id="vehicle4"
                                                                   name="question_three_1"> 4 shortcuts</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-right: 1px solid #000;">Colleague who is ranked 3<sup>rd</sup>
                                                </td>
                                                <td>
                                                    <label><input type="radio" value="0 shortcuts" id="vehicle0"
                                                        name="question_three_2" required> 0 shortcut</label>
                                                    <label><input type="radio" value="1 shortcuts" id="vehicle1"
                                                                  name="question_three_2" required> 1 shortcut</label>
                                                    <label><input type="radio" value="2 shortcuts" id="vehicle2"
                                                                  name="question_three_2"> 2 shortcuts</label>
                                                    <label><input type="radio" value="3 shortcuts" id="vehicle3"
                                                                  name="question_three_2"> 3 shortcuts</label>
                                                    <label><input type="radio" value="4 shortcuts" id="vehicle4"
                                                                  name="question_three_2"> 4 shortcuts</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-right: 1px solid #000;">Colleague who is ranked 4<sup>th</sup>
                                                </td>
                                                <td>
                                                    <label><input type="radio" value="0 shortcuts" id="vehicle0"
                                                        name="question_three_3" required> 0 shortcut</label>
                                                    <label><input type="radio" value="1 shortcuts" id="vehicle1"
                                                                  name="question_three_3" required> 1 shortcut</label>
                                                    <label><input type="radio" value="2 shortcuts" id="vehicle2"
                                                                  name="question_three_3"> 2 shortcuts</label>
                                                    <label><input type="radio" value="3 shortcuts" id="vehicle3"
                                                                  name="question_three_3"> 3 shortcuts</label>
                                                    <label> <input type="radio" value="4 shortcuts" id="vehicle4"
                                                                   name="question_three_3"> 4 shortcuts</label>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #000;">
                                                <td style="border-right: 1px solid #000;">Colleague who is ranked 5<sup>th</sup>
                                                </td>
                                                <td>
                                                    <label><input type="radio" value="0 shortcuts" id="vehicle0"
                                                        name="question_three_4" required> 0 shortcut</label>
                                                    <label><input type="radio" value="1 shortcuts" id="vehicle1"
                                                                  name="question_three_4" required> 1 shortcut</label>
                                                    <label><input type="radio" value="2 shortcuts" id="vehicle2"
                                                                  name="question_three_4"> 2 shortcuts</label>
                                                    <label><input type="radio" value="3 shortcuts" id="vehicle3"
                                                                  name="question_three_4"> 3 shortcuts</label>
                                                    <label><input type="radio" value="4 shortcuts" id="vehicle4"
                                                                  name="question_three_4"> 4 shortcuts</label>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div> <!-- qustion end-->
                                <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">

                                    <button style="padding: 5px 20px 5px 20px;" type="submit" id="nextButton" disabled
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
@endsection

@push('vendor-js')

@endpush
@push('page-js')
    <script>
        const container = document.querySelector('.question');
        const nextButton = document.getElementById('nextButton');
        const radioSets = container.querySelectorAll('input[type="radio"]');

        container.addEventListener('change', function (event) {
            nextButton.disabled = !areAllSetsSelected();
        });

        function areAllSetsSelected() {
            for (let i = 0; i < radioSets.length; i++) {
                const setName = radioSets[i].getAttribute('name');
                const selectedInSet = container.querySelector(`input[type="radio"][name="${setName}"]:checked`);
                if (!selectedInSet) {
                    return false;
                }
            }
            return true;
        }
    </script>
@endpush


