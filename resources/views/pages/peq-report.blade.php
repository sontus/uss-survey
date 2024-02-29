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

                                        @foreach ($data as $item)
                                            @if($item->question_set_number == checkversion())
                                                <table cellspacing="0" border="0" class="table table-responsive table-bordered">
                                                    <colgroup span="20" width="64"></colgroup>
                                                    <tr>
                                                        <td colspan=9 height="20" align="center">Question Set: {{checkversion() }}</td>
                                                        <td
                                                        @if(checkversion() == "B" || checkversion() == "D")
                                                        colspan=11
                                                        @else
                                                        colspan=10
                                                        @endif
                                                        align="center">User ID: {{  $item->user}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan=2 height="20" align="center">PEQ_Part_A</td>
                                                        <td colspan=2 align="center">PEQ_Part_B</td>
                                                        <td colspan=2 align="center">PEQ_Part_C</td>
                                                        <td align="left">PEQ_Part_D</td>
                                                        <td colspan=2 align="center">PEQ_Part_E</td>
                                                        {{-- <td colspan=2 align="center">PEQ_Part_F reomve</td> --}}
                                                        <td align="left">PEQ_Part_G</td>
                                                        <td align="left">PEQ_Part_H</td>
                                                        <td align="left">PEQ_Part_I</td>
                                                        <td align="left">PEQ_Part_J</td>
                                                        @if(checkversion() == "B" || checkversion() == "D")
                                                        <td  align="left">PEQ_Part_K</td>
                                                        @endif
                                                        <td align="left">PEQ_Part_L</td>
                                                        <td colspan=2 align="center">PEQ_Part_M</td>
                                                        <td colspan=2 align="center">PEQ_Part_N</td>
                                                        </tr>
                                                    <tr>
                                                        <td height="20" align="left">Question</td>
                                                        <td align="left">Answer</td>
                                                        <td align="left">Question</td>
                                                        <td align="left">Answer </td>
                                                        <td align="left">Question</td>
                                                        <td align="left">Answer</td>
                                                        <td rowspan=7 align="center">{{ $item->q_d_1}}</td>
                                                        <td align="left">Question </td>
                                                        <td align="left">Answer </td>
                                                        {{-- <td align="left">Question reomve</td>
                                                        <td align="left">Answer reomve</td> --}}
                                                        <td rowspan=7 align="center">{{ $item->q_g_1}}</td>
                                                        <td rowspan=7 align="center">{{ $item->q_h_1}}</td>
                                                        <td rowspan=7 align="center">{{ $item->q_i_1}}</td>
                                                        <td rowspan=7 align="center">{{ $item->q_j_1}}</td>
                                                        @if(checkversion() == "B" || checkversion() == "D")
                                                        <td rowspan=7 align="center">{{ $item->q_k_1}}</td>
                                                        @endif
                                                        <td rowspan=7 align="center">{{ $item->q_l_1}}</td>
                                                        <td align="left">Question</td>
                                                        <td align="left">Answer</td>
                                                        <td align="left">Question</td>
                                                        <td align="left">Answer</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20">1 </td>
                                                        <td>{{ $item->q_a_1}}</td>
                                                        <td>1 </td>
                                                        <td>{{ $item->q_b_1}}</td>
                                                        <td>1</td>
                                                        <td>{{ $item->q_c_1}}</td>
                                                        <td>1</td>
                                                        <td>{{ $item->q_e_1}}</td>
                                                        {{-- <td>1 reomve</td>
                                                        <td>{{ $item->q_f_1}} reomve</td> --}}
                                                        <td>1</td>
                                                        <td>{{ $item->q_m_1}}</td>
                                                        <td>Gender</td>
                                                        <td>{{ $item->gender}}</td>
                                                    </tr>
                                                    <tr>
                                                        @if(checkversion() == "C" || checkversion() == "D")
                                                            <td height="20">Colleague who is ranked 2nd</td>
                                                            <td>{{$item->q_three_a}}</td>
                                                        @else
                                                            <td height="20">2</td>
                                                            <td>{{ $item->q_a_2}}</td>
                                                        @endif
                                                        <td>2 </td>
                                                        <td>{{ $item->q_b_2}}</td>
                                                        <td>2</td>
                                                        <td>{{ $item->q_c_2}}</td>
                                                        <td>2</td>
                                                        <td>{{ $item->q_e_2}}</td>
                                                        {{-- <td>2 reomve</td>
                                                        <td>{{ $item->q_f_2}} reomve</td> --}}
                                                        <td>2</td>
                                                        <td>{{ $item->q_m_2}}</td>
                                                        <td>Age</td>
                                                        <td>{{ $item->age}}</td>
                                                    </tr>
                                                    <tr>
                                                        @if(checkversion() == "C" || checkversion() == "D")
                                                            <td>Colleague who is ranked 3rd</td>
                                                            <td>{{ $item->q_three_b}}</td>
                                                        @else
                                                            <td height="20" align="left"><br></td>
                                                            <td align="left"><br></td>
                                                        @endif
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td>3</td>
                                                        <td>{{ $item->q_c_3}}</td>
                                                        <td>3</td>
                                                        <td>{{ $item->q_e_3}}</td>
                                                        {{-- <td>3 reomve</td>
                                                        <td>{{ $item->q_f_3}} reomve</td> --}}
                                                        <td>3</td>
                                                        <td>{{ $item->q_m_3}}</td>
                                                        <td>Have any work experience</td>
                                                        <td>{{ $item->work_experience}}</td>
                                                    </tr>
                                                    <tr>
                                                        @if(checkversion() == "C" || checkversion() == "D")
                                                            <td>Colleague who is ranked 4th</td>
                                                            <td>{{ $item->q_three_c}}</td>
                                                        @else
                                                            <td height="20" align="left"><br></td>
                                                            <td align="left"><br></td>
                                                        @endif
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        {{-- <td align="left"><br>reomve</td>
                                                        <td align="left"><br>reomve</td> --}}
                                                        <td>4</td>
                                                        <td> {{ $item->q_m_4 }}</td>
                                                        <td>Have any work experience</td>
                                                        <td>{{ $item->work_experience}}</td>
                                                    </tr>
                                                    <tr>
                                                        @if(checkversion() == "C" || checkversion() == "D")
                                                            <td>Colleague who is ranked 5th</td>
                                                            <td>{{ $item->q_three_d}}</td>
                                                        @else
                                                            <td height="20" align="left"><br></td>
                                                            <td align="left"><br></td>
                                                        @endif
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        {{-- <td align="left"><br>reomve</td>
                                                        <td align="left"><br>reomve</td> --}}
                                                        <td>5</td>
                                                        <td>{{ $item->q_m_5 }}</td>
                                                        <td>Type of experience</td>
                                                        <td>{{ $item->work_type}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20" align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        <td align="left"><br></td>
                                                        {{-- <td align="left"><br>reomve</td>
                                                        <td align="left"><br>reomve</td> --}}
                                                        <td>6</td>
                                                        <td>{{ $item->q_m_6 }}</td>
                                                        <td>Years of work experience</td>
                                                        <td>{{ $item->experience_year}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan=9 height="20" align="center">Work Environments</td>
                                                        <td
                                                        @if(checkversion() == "B" || checkversion() == "D")
                                                        colspan=11
                                                        @else
                                                        colspan=10
                                                        @endif
                                                        align="center">{{  $item->teammate}}</td>
                                                    </tr>
                                                </table>
                                            @endif
                                        @endforeach

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
        var file_name = "PEQ-Report-Details";

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('tbl_exporttable_to_xls');
            var wb = XLSX.utils.table_to_book(elt, {sheet: "sheet1"});
            return dl ?
                XLSX.write(wb, {bookType: type, bookSST: true, type: 'base64'}) :
                XLSX.writeFile(wb, fn || (file_name + '.' + (type || 'xlsx')));
        }

    </script>
@endpush


