@extends('layouts.backend')

@section("title","Survey Report Details")
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
                        <h1 class="page-title"> {{ $period_name}} Report Details</h1>
                    </header><!-- /.page-title-bar -->
                    <hr>
                    <!-- .page-section -->
                    <div class="page-section">
                        <!-- .section-block -->
                        <div class="section-block">
                            <div class="report">
                                <div class="col-md-8 offset-2" id="tbl_exporttable_to_xls">
                                    <button onclick="ExportToExcel('xlsx')" class="btn btn-success mb-3">Export Data to
                                        excel
                                    </button>
                                    @foreach ($results as $result)

                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <th colspan="4">Period : {{ $result->period}}</th>
                                                <th colspan="3">User ID : {{ $result->user_id}}</th>
                                            </tr>
                                            <tr class="heading">
                                                <th scope="col">Page No</th>
                                                <th scope="col">Box 1</th>
                                                <th scope="col">Box 2</th>
                                                <th scope="col">Box 3</th>
                                                <th scope="col">Box 4</th>
                                                <th scope="col">Box 5</th>
                                                <th scope="col">Box 6</th>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 1</th>
                                                <td>{{ $result->box_11}}</td>
                                                <td>{{ $result->box_12}}</td>
                                                <td>{{ $result->box_13}}</td>
                                                <td>{{ $result->box_14}}</td>
                                                <td>{{ $result->box_15}}</td>
                                                <td>{{ $result->box_16}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 2</th>
                                                <td>{{ $result->box_21}}</td>
                                                <td>{{ $result->box_22}}</td>
                                                <td>{{ $result->box_23}}</td>
                                                <td>{{ $result->box_24}}</td>
                                                <td>{{ $result->box_25}}</td>
                                                <td>{{ $result->box_26}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 3</th>
                                                <td>{{ $result->box_31}}</td>
                                                <td>{{ $result->box_32}}</td>
                                                <td>{{ $result->box_33}}</td>
                                                <td>{{ $result->box_34}}</td>
                                                <td>{{ $result->box_35}}</td>
                                                <td>{{ $result->box_36}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 4</th>
                                                <td>{{ $result->box_41}}</td>
                                                <td>{{ $result->box_42}}</td>
                                                <td>{{ $result->box_43}}</td>
                                                <td>{{ $result->box_44}}</td>
                                                <td>{{ $result->box_45}}</td>
                                                <td>{{ $result->box_46}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 5</th>
                                                <td>{{ $result->box_51}}</td>
                                                <td>{{ $result->box_52}}</td>
                                                <td>{{ $result->box_53}}</td>
                                                <td>{{ $result->box_54}}</td>
                                                <td>{{ $result->box_55}}</td>
                                                <td>{{ $result->box_56}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 6</th>
                                                <td>{{ $result->box_61}}</td>
                                                <td>{{ $result->box_62}}</td>
                                                <td>{{ $result->box_63}}</td>
                                                <td>{{ $result->box_64}}</td>
                                                <td>{{ $result->box_65}}</td>
                                                <td>{{ $result->box_66}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 7</th>
                                                <td>{{ $result->box_71}}</td>
                                                <td>{{ $result->box_72}}</td>
                                                <td>{{ $result->box_73}}</td>
                                                <td>{{ $result->box_74}}</td>
                                                <td>{{ $result->box_75}}</td>
                                                <td>{{ $result->box_76}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 8</th>
                                                <td>{{ $result->box_81}}</td>
                                                <td>{{ $result->box_82}}</td>
                                                <td>{{ $result->box_83}}</td>
                                                <td>{{ $result->box_84}}</td>
                                                <td>{{ $result->box_85}}</td>
                                                <td>{{ $result->box_86}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 9</th>
                                                <td>{{ $result->box_91}}</td>
                                                <td>{{ $result->box_92}}</td>
                                                <td>{{ $result->box_93}}</td>
                                                <td>{{ $result->box_94}}</td>
                                                <td>{{ $result->box_95}}</td>
                                                <td>{{ $result->box_96}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 10</th>
                                                <td>{{ $result->box_101}}</td>
                                                <td>{{ $result->box_102}}</td>
                                                <td>{{ $result->box_103}}</td>
                                                <td>{{ $result->box_104}}</td>
                                                <td>{{ $result->box_105}}</td>
                                                <td>{{ $result->box_106}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 11</th>
                                                <td>{{ $result->box_111}}</td>
                                                <td>{{ $result->box_112}}</td>
                                                <td>{{ $result->box_113}}</td>
                                                <td>{{ $result->box_114}}</td>
                                                <td>{{ $result->box_115}}</td>
                                                <td>{{ $result->box_116}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 12</th>
                                                <td>{{ $result->box_121}}</td>
                                                <td>{{ $result->box_122}}</td>
                                                <td>{{ $result->box_123}}</td>
                                                <td>{{ $result->box_124}}</td>
                                                <td>{{ $result->box_125}}</td>
                                                <td>{{ $result->box_126}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 13</th>
                                                <td>{{ $result->box_131}}</td>
                                                <td>{{ $result->box_132}}</td>
                                                <td>{{ $result->box_133}}</td>
                                                <td>{{ $result->box_134}}</td>
                                                <td>{{ $result->box_135}}</td>
                                                <td>{{ $result->box_136}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 14</th>
                                                <td>{{ $result->box_141}}</td>
                                                <td>{{ $result->box_142}}</td>
                                                <td>{{ $result->box_143}}</td>
                                                <td>{{ $result->box_144}}</td>
                                                <td>{{ $result->box_145}}</td>
                                                <td>{{ $result->box_146}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 15</th>
                                                <td>{{ $result->box_151}}</td>
                                                <td>{{ $result->box_152}}</td>
                                                <td>{{ $result->box_153}}</td>
                                                <td>{{ $result->box_154}}</td>
                                                <td>{{ $result->box_155}}</td>
                                                <td>{{ $result->box_156}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 16</th>
                                                <td>{{ $result->box_161}}</td>
                                                <td>{{ $result->box_162}}</td>
                                                <td>{{ $result->box_163}}</td>
                                                <td>{{ $result->box_164}}</td>
                                                <td>{{ $result->box_165}}</td>
                                                <td>{{ $result->box_166}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 17</th>
                                                <td>{{ $result->box_171}}</td>
                                                <td>{{ $result->box_172}}</td>
                                                <td>{{ $result->box_173}}</td>
                                                <td>{{ $result->box_174}}</td>
                                                <td>{{ $result->box_175}}</td>
                                                <td>{{ $result->box_176}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 18</th>
                                                <td>{{ $result->box_181}}</td>
                                                <td>{{ $result->box_182}}</td>
                                                <td>{{ $result->box_183}}</td>
                                                <td>{{ $result->box_184}}</td>
                                                <td>{{ $result->box_185}}</td>
                                                <td>{{ $result->box_186}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 19</th>
                                                <td>{{ $result->box_191}}</td>
                                                <td>{{ $result->box_192}}</td>
                                                <td>{{ $result->box_193}}</td>
                                                <td>{{ $result->box_194}}</td>
                                                <td>{{ $result->box_195}}</td>
                                                <td>{{ $result->box_196}}</td>
                                            </tr>
                                            <tr>
                                                <th id="heading_row" scope="row">Page 20</th>
                                                <td>{{ $result->box_201}}</td>
                                                <td>{{ $result->box_202}}</td>
                                                <td>{{ $result->box_203}}</td>
                                                <td>{{ $result->box_204}}</td>
                                                <td>{{ $result->box_205}}</td>
                                                <td>{{ $result->box_206}}</td>
                                            </tr>
                                            @if ($period_name != "Preliminary-Period")
                                                <tr>
                                                    <th colspan="7" style="text-align: center">Shortcuts discovered</th>
                                                </tr>
                                                <tr>
                                                    <th id="heading_row" scope="row">Box 1</th>
                                                    <th id="heading_row" scope="row">Box 2</th>
                                                    <th id="heading_row" scope="row">Box 3</th>
                                                    <th id="heading_row" scope="row">Box 4</th>
                                                    <th id="heading_row" scope="row">Box 5</th>
                                                    <th id="heading_row" scope="row">Box 6</th>
                                                </tr>
                                                <tr>
                                                    <td>{{  $result->shortcuts_discovered?->box_1}}</td>
                                                    <td>{{  $result->shortcuts_discovered?->box_2}}</td>
                                                    <td>{{  $result->shortcuts_discovered?->box_3}}</td>
                                                    <td>{{  $result->shortcuts_discovered?->box_4}}</td>
                                                    <td>{{  $result->shortcuts_discovered?->box_5}}</td>
                                                    <td>{{  $result->shortcuts_discovered?->box_6}}</td>
                                                </tr>

                                            @endif
                                            </tbody>
                                        </table>
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
        var file_name = "{{ $period_name}}";

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('tbl_exporttable_to_xls');
            var wb = XLSX.utils.table_to_book(elt, {sheet: "sheet1"});
            return dl ?
                XLSX.write(wb, {bookType: type, bookSST: true, type: 'base64'}) :
                XLSX.writeFile(wb, fn || (file_name + '.' + (type || 'xlsx')));
        }

    </script>
@endpush


