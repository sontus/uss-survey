@extends('layouts.backend')

@section("title","Set Version")
@push('vendor-css')

@endpush
@push('page-css')

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
                <h1 class="page-title"> Set Version</h1>
            </header><!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                    <h6>Current Version is: {{ $data->set_name}}</h6>

                    <h6>Select Version</h6>
                    <form action="{{ route('save-version')}}" method="POST">
                        @csrf
                          <label class="radio-inline">
                            <input type="radio" name="version" value="A" required> A 
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="version" value="B" required> B
                          <label class="radio-inline">
                            <input type="radio" name="version" value="C"> C
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="version" value="D"> D
                          </label>
                          <button type="submit" class="btn btn-success">Save</button>
                    </form>
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


@endpush
