@extends('layouts.index')


@section('css')

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{-- <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" /> --}}
        <!-- END PAGE LEVEL PLUGINS -->

@endsection

@section('content')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">{{ $title }}</h4>
                </div>
             </div>
             <div class="card-body">
             
                <div class="table-responsive">
                   <table id="kategori" class="table table-striped" data-toggle="data-table">
                      <thead>
                         <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                         </tr>
                      </thead>
                
                      <tfoot>
                         <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                         </tr>
                      </tfoot>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

@endsection

@section('js')


@endsection