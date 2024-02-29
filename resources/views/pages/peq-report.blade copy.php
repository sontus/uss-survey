@extends('layouts.backend')

@section("title","PEQ Report Details")
@push('vendor-css')
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <style>
        .table-bordered, .table-bordered td, .table-bordered th {
            border: 1px solid #000000;
        }
    </style>
@endpush

@section('content')
    <div class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page">
                <!-- .page-inner -->
                <div class="page-inner">
                    <!-- .page-title-bar -->
                    <header class="page-title-bar">
                        <!-- page title stuff goes here -->
                        <h1 class="page-title"> PEQ Report Details</h1>
                    </header><!-- /.page-title-bar -->
                    <hr>
                    <!-- .page-section -->
                    <div class="page-section">
                        <!-- .section-block -->
                        <div class="section-block">
                            <div class="report">
                                <div class="col-md-10 offset-1" id="tbl_exporttable_to_xls">
                                    <button onclick="ExportToExcel('xlsx')" class="btn btn-success mb-3">Export Data to
                                        excel
                                    </button>
                                    @if(checkversion() == "A" || checkversion() == "B")
                                        @foreach ($data as $item)
                                            <table class="table table-responsive table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>Question Set: {{checkversion()}}</td>
                                                    <td>User ID: {{ $item->user}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PEQ_Part_A</td>
                                                    <td>PEQ_Part_B</td>
                                                    <td>PEQ_Part_C</td>
                                                    <td>PEQ_Part_D</td>
                                                    <td>PEQ_Part_E</td>
                                                    <td>PEQ_Part_F</td>
                                                    <td>PEQ_Part_G</td>
                                                    <td>PEQ_Part_H</td>
                                                    <td>PEQ_Part_I</td>
                                                    <td>PEQ_Part_J</td>
                                                    <td>PEQ_Part_K</td>
                                                    <td>PEQ_Part_L</td>
                                                    <td>PEQ_Part_M</td>
                                                    <td>PEQ_Part_N</td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td>Question</td>
                                                                <td>Answer</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Colleague who is ranked 2nd</td>
                                                                <td>{{ $item->question_two_1}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Colleague who is ranked 3rd</td>
                                                                <td>{{ $item->question_two_2}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Colleague who is ranked 4th</td>
                                                                <td>{{ $item->question_two_3}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Colleague who is ranked 5th</td>
                                                                <td>{{ $item->question_two_4}}</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td>Question</td>
                                                                <td>Answer</td>

                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>{{ $item->bq_1}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>{{ $item->bq_2}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>{{ $item->bq_3}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>{{ $item->bq_4}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>{{ $item->bq_5}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>{{ $item->bq_6}}</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td></td>
                                                    <td>{{ $item->q_d}}</td>
                                                    <td>{{ $item->q_e}}</td>
                                                    <td>
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td>Question</td>
                                                                <td>Answer</td>

                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>{{ $item->q_f_1}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>{{ $item->q_f_2}}</td>
                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                    </td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            {{-- <a class="btn btn-warning float-end" href="{{ route('report-export') }}">Export Survery Report</a> --}}
                        </div><!-- /.section-block -->
                    </div><!-- /.page-section -->
                </div><!-- /.page-inner -->
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
    </div><!-- /.app-main -->
@endsection

@push('vendor-js')

@endpush
@push('page-js')
    <script>
        var file_name = " PEQ-Report-Details";

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('tbl_exporttable_to_xls');
            var wb = XLSX.utils.table_to_book(elt, {sheet: "sheet1"});
            return dl ?
                XLSX.write(wb, {bookType: type, bookSST: true, type: 'base64'}) :
                XLSX.writeFile(wb, fn || (file_name + '.' + (type || 'xlsx')));
        }

    </script>
@endpush


