@extends('layouts.admin.master')

@section('title')
    
@endsection

@section('csslink')
Stock Contactlans
@endsection

@section('content')
        <div id="page_content">

        <div id="page_content_inner">
            <h4 class="heading_a uk-margin-bottom">Stock Contact Lans</h4>
            <div class="uk-width-medium-1-6">
                <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" href="add-new-stock">Add New Contactlans</a>
             </div>
               <br>      

          <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category/Name</th>
                            <th>Quantity</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                           
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Category/Name</th>
                            <th>Quantity</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($contactlanses as $contactlans)
                                <tr>
                                    <td>{{ $contactlans->id }}</td>
                                    <td>{{ $contactlans->category }}</td>
                                    <td>{{ $contactlans->quantity }}</td>
                                    <td>{{ $contactlans->created_at }}</td>
                                    <td>{{ $contactlans->updated_at }}</td>
                            </tr>        
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('jslink')
    <!-- datatables -->
    <script src="{{ asset('admin/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <!-- datatables buttons-->
    <script src="{{ asset('admin/bower_components/datatables-buttons/js/dataTables.buttons.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/datatables/buttons.uikit.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables-buttons/js/buttons.colVis.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables-buttons/js/buttons.html5.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables-buttons/js/buttons.print.js') }}"></script>
    
    <!-- datatables custom integration -->
    <script src="{{ asset('admin/assets/js/custom/datatables/datatables.uikit.min.js') }}"></script>

    <!--  datatables functions -->
    <script src="{{ asset('admin/assets/js/pages/plugins_datatables.min.js') }}"></script>
@endsection



