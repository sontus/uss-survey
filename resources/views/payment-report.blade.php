@extends('layouts.backend')

@section("title","Payment Report")
@push('vendor-css')
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <style>
        .table-bordered, .table-bordered td, .table-bordered th {
            border: 1px solid #000000;
        }
    </style>
@endpush
@push('page-css')
    <style>
        .table-bordered, .table-bordered td, .table-bordered th {
            border: 1px solid #070707;
        }
    </style>
@endpush
@section('content')
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
        <!-- .page -->
        <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
            <!-- .page-title-bar -->
            <header class="page-title-bar">
                <!-- page title stuff goes here -->
                <h1 class="page-title"> Payment Report</h1>
            </header><!-- /.page-title-bar -->
            <hr>
            <!-- .page-section -->
            <div class="page-section">
                <!-- .section-block -->
                <div class="section-block" id="tbl_exporttable_to_xls">
                    <button onclick="ExportToExcel('xlsx')" class="btn btn-success mb-3">Export Data to
                        excel
                    </button>
                    <div class="report">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>User ID</td>
                                    <td>Fixed Payment</td>
                                    <td>Performance Payment</td>
                                    <td>Total Payment</td>
                                    <td>Status</td>
                                    <td>Payment Date</td>
                                    <td>Action</td>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total_fixed = 0 ;
                                    $total_performance = 0 ;
                                    $total_payment = 0 ;
                                @endphp
                                @foreach ($payments as $key=>$report)
                                    @php
                                        $total_fixed += $report->fixed_payment ;
                                        $total_performance += $report->performance_payment ;
                                        $total_payment +=  $report->fixed_payment + $report->performance_payment ;
                                    @endphp
                                    <tr>
                                        <td>{{$key +1}}</td>
                                        <td>{{$report->user_id}}</td>
                                        <td style="text-align: right">£.{{$report->fixed_payment}}</td>
                                        <td style="text-align: right">£.{{$report->performance_payment}}</td>
                                        <td style="text-align: right">£.{{ $report->fixed_payment + $report->performance_payment}}</td>
                                        <td>{{$report->payment_status}}</td>
                                        <td>

                                            {{$report->payment_date ? date('d/m/Y',strtotime($report->payment_date)): ''}}

                                        </td>
                                        <td>
                                            @if($report->payment_status == 'Unpaid')
                                                <a class="btn btn-success" href="{{ route('paid-payment',$report->user_id) }}">Pay Now</a>
                                            @endif
                                        </td>
                                    </tr>

                                @endforeach
                                <tr>
                                    <td>Total</td>
                                    <td>Participant: <strong>{{$total_participant}}</strong></td>
                                    <td style="text-align: right;"><strong>£.{{ $total_fixed}}</strong></td>
                                    <td style="text-align: right;"><strong>£.{{ $total_performance}}</strong></td>
                                    <td style="text-align: right;"><strong>£.{{ $total_payment}}</strong></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.section-block -->
            </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
        </div><!-- /.page -->
        </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
@endsection

@push('vendor-js')

@endpush
@push('page-js')
    <script>
        var file_name = "Payment Report";

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('tbl_exporttable_to_xls');
            var wb = XLSX.utils.table_to_book(elt, {sheet: "sheet1"});
            return dl ?
                XLSX.write(wb, {bookType: type, bookSST: true, type: 'base64'}) :
                XLSX.writeFile(wb, fn || (file_name + '.' + (type || 'xlsx')));
        }

    </script>
@endpush
