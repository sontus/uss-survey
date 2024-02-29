@extends('layouts.app')
@section('title', 'General Information')
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

        td,
        th {
            border: 1px solid #ffffff;
            text-align: left;
            padding: 8px;
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
                        <form action="{{ route('save-payment-info')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="title text-center w-100 mt-5 mb-4">
                                    <h5>Your Payout</h5>
                                </div>
                                <br>
                                <div class="question mt-5">
                                    <div class="row mt-5">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6 mt-5">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <p>Fixed Payment </p>
                                                    </td>
                                                    <td>£ &nbsp;<input type="text" name="fixed_payment" value="6.50" readonly></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Performance Payment </p>
                                                    </td>
                                                    <td>£ &nbsp;<input type="text" name="performance_payment" id="performance_payment"
                                                                    value="{{ Session::get('preliminaryCorrect') + Session::get('productionOneCorrect') + Session::get('productionTowCorrect') }}"
                                                                    readonly></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Total Payment </p>
                                                    </td>
                                                    <td>£ &nbsp;<input type="text" id="total_payment" value="0"
                                                                    readonly></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="cm_btn d-grid gap-2 d-md-flex justify-content-md-end ">
                                    {{-- <a href="{{ route('end-experiment') }}" style="padding: 5px 20px 5px 20px;"
                                    type="button"
                                    class="btn btn-danger next_btn btn-sm">Next</a> --}}

                                    <button type="submit" style="padding: 5px 20px 5px 20px;" class="btn btn-danger next_btn btn-sm">Next</button>
                                </div>
                            </div>
                        </form>
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
        let totalAnwser =
            {{ Session::get('preliminaryCorrect') + Session::get('productionOneCorrect') + Session::get('productionTowCorrect') }};
        const performancePayment = totalAnwser * 0.03;
        const totalPayment = 6.50 + performancePayment;
        $('#performance_payment').val(performancePayment);
        $('#total_payment').val(totalPayment);
    </script>
@endpush
