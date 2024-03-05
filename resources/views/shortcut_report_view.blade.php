@extends('layouts.backend')

@section("title","Survey Report")
@push('vendor-css')

@endpush
@push('page-css')
    <style>

    </style>
@endpush
@section('content')
    <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
            <!-- .page -->
            <div class="page m-4">
                <div id="tbl_exporttable_to_xls">
                    <button onclick="ExportToExcel('xlsx')" class="btn btn-success mb-3">Export Data to
                        excel
                    </button>

                <h5># Shortcuts Discovered in The all Periods </h5>
               <table class="table table-bordered border-danger table-sm table-striped">
                       <thead>
                           <tr>
                               <th>SL</th>
                               <th>Users</th>
                               <th>Box-1</th>
                               <th>Box-2</th>
                               <th>Box-3</th>
                               <th>Box-4</th>
                               <th>Box-5</th>
                               <th>Box-6</th>
                           </tr>
                       </thead>
                       <tbody>
                       @foreach($data as $key => $shortcut)
                           <tr>
                               <td>{{ $key+1 }}</td>
                               <td>{{ $shortcut->user_id }}</td>
                               <td>{{ $shortcut->box_1 }}</td>
                               <td>{{ $shortcut->box_2 }}</td>
                               <td>{{ $shortcut->box_3 }}</td>
                               <td>{{ $shortcut->box_4 }}</td>
                               <td>{{ $shortcut->box_5 }}</td>
                               <td>{{ $shortcut->box_6 }}</td>
                           </tr>
                       @endforeach
                    </tbody>
               </table>
            </div>
        </div>
        </div>
    </main>
@endsection

@push('vendor-js')
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
@endpush
@push('page-js')
    <script !src="">
        var file_name = "Shortcuts Discovered in The all Period";

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('tbl_exporttable_to_xls');
            var wb = XLSX.utils.table_to_book(elt, {sheet: "sheet1"});
            return dl ?
                XLSX.write(wb, {bookType: type, bookSST: true, type: 'base64'}) :
                XLSX.writeFile(wb, fn || (file_name + '.' + (type || 'xlsx')));
        }
    </script>

@endpush
