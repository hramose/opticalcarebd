@extends('layouts.admin.master')

@section('title')
Stock Frame
@endsection

@section('csslink')
          <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@endsection

@section('content')
        <div id="page_content">

        <div id="page_content_inner">
            <h4 class="heading_a uk-margin-bottom">Stock Frame</h4>
            <div class="uk-width-medium-1-6">
                <div class="uk-width-medium-1-3">
                            <button id="addFrameModel" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" data-uk-modal="{target:'#model_frame'}">Add&nbsp;New&nbsp;Frame</button>
                            <div class="uk-modal" id="model_frame">
                                <div class="uk-modal-dialog">
                                    <div class="uk-modal-header">
                                        <h3 class="uk-modal-title">Model Title</h3>
                                    </div>
                                   <form id="form_validation" class="uk-form-stacked" method="POST">
                                        {{ csrf_field() }}
                                    {{ method_field('DELETE') }} 
                                    <input type="hidden" id="frameId">
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label for="category">Category/Name<span class="req">*</span></label>
                                                <input type="text" 
                                                          class="md-input label-fixed"
                                                          name="category" 
                                                          id="txtCategory"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label for="quantity">Quantity<span class="req">*</span></label>
                                                <input type="text" 
                                                          class="md-input label-fixed"                                     name="quantity" 
                                                          id="txtQuantity"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" id="addQuantity" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label for="newQuantity">Add Quantity<span class="req">*</span></label>
                                                <input type="text" 
                                                          name="newQuantity" 
                                                          id="txtNewQuantity"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                        <button type="button" 
                                                     id="btnAddFrame"
                                                    class="md-btn md-btn-primary uk-modal-close">Add Frame</button>
                                        <button type="button" 
                                                     id="btnUpdateQuantity"
                                                    class="md-btn md-btn-success  uk-modal-close">Update Quantity</button>
                                        <button type="button" 
                                                     id="btnEdit"
                                                    class="md-btn md-btn-warning  uk-modal-close">Edit</button>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
             </div>
               <br>      

          <div class="md-card uk-margin-medium-bottom" id="frames">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table uk-table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category/Name</th>
                            <th class="uk-text-center">Quantity</th>
                            <th class="uk-text-center">Created at</th>
                            <th class="uk-text-center">Updated at</th>
                            <th class="uk-text-center">Action</th>
                           
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Category/Name</th>
                            <th class="uk-text-center">Quantity</th>
                            <th class="uk-text-center">Created at</th>
                            <th class="uk-text-center">Updated at</th>
                            <th class="uk-text-center">Action</th>                          
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
 </form>
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

        <!-- parsley (validation) -->
    <script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
    </script>
    <script src="{{ asset('admin/bower_components/parsleyjs/dist/parsley.min.js') }}"></script>

    <!--  forms validation functions -->
    <script src="{{ asset('admin/assets/js/pages/forms_validation.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sweetalert-dev.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/ajax/stock.frame.js') }}"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        
    </script>
@endsection



